<div class="list-container">
    <?php for($i=0 ; $i < sizeof($objects) ; $i++) { ?>
        <div class="card">
            <img src="assets/img/teeshirt1.jpg" alt="product-img" class="prod-img">
            <div class="cat">
                Category : <?php echo $objects[$i]['nomCateg']; ?>
            </div>
            <div class="desc">
                <div class="profil profil-sm"></div>
                <p><?php echo $objects[$i]['nomObject']; ?></p>
                <p class="price"><?php echo $objects[$i]['price']; ?> €</p>
                <p class="description"><?php echo $objects[$i]['description']; ?></p>
                <a href="<?php echo site_url('viewDetails');?>?id=<?php echo $objects[$i]['idPropri']; ?>" class="link">View details</a>
            </div>
        </div>
    <?php } ?>
</div>