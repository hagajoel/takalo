<?php
$error = $this->session->userdata('error');
?>
<div class="container">
    <div class="left">
        <div class="top">
            <div class="row">
                <img class="logo" src="assets/img/logo.png" />
                <a class="link" href="<?php echo site_url('signup')?>">S'inscrire</a>
            </div>
            <?php
            if (isset($error)) { ?>
                <div class="error">
                    <p>
                        <?php
                            echo $error;
                        ?>
                    </p>
                </div>
            <?php }
            ?>
        </div>
        <div class="bottom">
            <form action="<?php echo site_url('user/login');?>" method="post">
                <p class="title">Content de te voir.</p>

                <div class="input">
                    <p>Email</p>
                    <input type="email" name="email" placeholder="email@example.com" value="rakoto@gmail.com">
                </div>
                <div class="input">
                    <p>Mot de passe ?</p>
                    <input type="password" name="pwd" value="password">
                </div>
                <a href="<?php echo site_url('loginadmin');?>" class="link">Se connecter en administrateur</a>
                <button type="submit" class="btn btn-dark">Connexion</button>
            </form>
        </div>
    </div>
    <div class="right">
        <img src="assets/img/bg.jpg" class="bg-img">
    </div>
</div>