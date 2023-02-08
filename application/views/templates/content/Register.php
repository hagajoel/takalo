<?php
$error = $this->session->flashdata('login_error');
?>
<div class="container">
    <div class="left">
        <div class="top">
            <div class="row">
                <img class="logo" src="assets/img/logo.png" />
                <a class="link" href="<?php echo site_url('user')?>">Se connecter</a>
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
        <form action="<?php echo site_url('user/signup');?>" method="post">
                <p class="title">Rejoingez-nous.</p>

                <div class="input">
                    <p>Nom</p>
                    <input type="text" name="name" >
                </div>
                <div class="input">
                    <p>Email</p>
                    <input type="email" name="email" placeholder="email@example.com">
                </div>
                <div class="input">
                    <p>Mot de passe ?</p>
                    <input type="password" name="pwd">
                </div>
                <a href="<?php echo site_url('loginadmin');?>" class="link">Se connecter en administrateur</a>
                <button type="submit" class="btn btn-dark">S'inscrire</button>
            </form>
        </div>
    </div>
    <div class="right">
        <img src="assets/img/bg.jpg" class="bg-img">
    </div>
</div>