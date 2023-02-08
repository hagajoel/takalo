<div class="list-container">
    <?php for($i=0 ; $i < sizeof($myobjects) ; $i++) { ?>
        <div class="card">
            <img src="assets/img/teeshirt1.jpg" alt="product-img" class="prod-img">
            <div class="cat">
                Category : <?php echo $myobjects[$i]['nomCateg']; ?>
            </div>
            <div class="desc">
                <div class="profil profil-sm">TA</div>
                <p><?php echo $myobjects[$i]['nomObject']; ?></p>
                <p class="price"><?php echo $myobjects[$i]['price']; ?> €</p>
                <p class="description"><?php echo $myobjects[$i]['description']; ?></p>
                <a href="<?php echo site_url('viewDetails');?>" class="link">View details</a>
            </div>
        </div>
    <?php } ?>
</div>