<?php
$error = $this->session->flashdata('login_error');
?>
<div class="container">
    <div class="left">
        <div class="top">
            <div class="row">
                <img class="logo" src="assets/img/logo.png" />
                <a class="link" href="">S'inscrire</a>
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
            <p class="title">Content de te voir.</p>
            <?php echo form_open('user/login'); ?>

            <div class="input">
                <p>Email</p>
                <input type="email" name="nom" placeholder="email@example.com">
                <?php echo form_error('email'); ?>
            </div>
            <div class="input">
                <p>Mot de passe ?</p>
                <input type="password" name="pwd">
                <?php echo form_error('password'); ?>
            </div>
            <button type="submit" class="btn btn-dark">Connexion</button>
            <?php form_close(); ?>
        </div>
    </div>
    <div class="right">
        <img src="assets/img/bg.jpg" class="bg-img">
    </div>
</div>