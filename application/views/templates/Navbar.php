<div class="nav">
    <a href="<?php echo site_url('/')?>"><img src="assets/img/logo.png"  class="logo"></a>
    <form action="" method="post">
        <input type="text" name="search" class="search-bar input-sm" placeholder="Rechercher">
        <select name="cat" class="select-box">
            <?php for($i=0 ; $i< sizeof($category) ; $i++) { ?>
                <option value="<?php echo $category[$i]['id'] ?>"><?php echo $category[$i]['nom'] ?></option>
            <?php } ?>
        </select>
    </form>
    <ul>
        <li><a href="<?php echo site_url('viewProfil')?>">Mes Objets</a></li>
        <li><a href="#">Découvrir</a></li>
        <li><a href="<?php echo site_url('viewNotif')?>">Notifications</a></li>
    </ul>
    <div class="profil">
        <a href="<?php echo site_url('viewProfil')?>">HA</a>
    </div>
</div>