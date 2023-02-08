<div class="nav">
    <a href="<?php echo site_url('/home')?>"><img src="assets/img/logo.png"  class="logo"></a>
    <form action="home" method="post">
        
        <input type="text" name="search" class="search-bar input-sm" placeholder="Rechercher">
        <select name="category" class="select-box">
            <?php for($i=0 ; $i< sizeof($category) ; $i++) { ?>
                <option value="<?php echo $category[$i]['id'] ?>"><?php echo $category[$i]['nom'] ?></option>
            <?php } ?>
        </select>
        <input type="submit" value="Search">
    </form>
    <ul>
        <li><a href="<?php echo site_url('viewProfil')?>">Mes Objets</a></li>
        <li><a href="<?php echo site_url('viewNotif')?>">Notifications</a></li>
        <li><a href="<?php echo site_url('user'); ?>">Deconnecter</a></li>
    </ul>
</div>