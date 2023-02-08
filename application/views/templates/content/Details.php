<?php 
    $this->load->view('templates/navbar');
?>
<div class="details-container">
    <!-- <img class="img-slide" src="assets/img/teeshirt1.jpg"/> -->
    <?php $this->load->view('templates/slideshow'); ?>
    <div class="desc">
        <div class="left">
            <div class="profil profil-sm">TA</div>
            <p>Catégorie(s): <span class="cat-black">fashion</span></p>
            <p class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis quos, placeat dolorum laudantium alias mollitia minima, repellendus ut necessitatibus deserunt laboriosam, minus praesentium! Dignissimos nulla cupiditate voluptas impedit sapiente corporis vitae provident eius, dicta amet tenetur non cum, fugiat obcaecati necessitatibus temporibus adipisci eaque! Ex soluta suscipit nulla nobis deleniti!</p>
        </div>
        <div class="right">
            <p class="price">35.00 €</p>
            <form action="" method="post">
                <input type="submit" class="btn btn-green" value="Proposer un takalo"> 
            </form>
        </div>
    </div>
    <div class="historic">
        <h3>Anciens propriétaires:</h3>
        <div class="profil-box">
           <div class="info">
           <div class="profil profil-sm">
                <a href="#">HA</a>
            </div>
            <p class="nom">Haga</p>
           </div>
            <p>2022-11-03 15:50:20</p>
        </div>
        <div class="profil-box">
           <div class="info">
           <div class="profil profil-sm">
                <a href="#">HA</a>
            </div>
            <p class="nom">Haga</p>
           </div>
            <p>2022-11-03 15:50:20</p>
        </div>
        <div class="profil-box">
           <div class="info">
           <div class="profil profil-sm">
                <a href="#">HA</a>
            </div>
            <p class="nom">Haga</p>
           </div>
            <p>2022-11-03 15:50:20</p>
        </div>
        <div class="profil-box">
           <div class="info">
           <div class="profil profil-sm">
                <a href="#">HA</a>
            </div>
            <p class="nom">Haga</p>
           </div>
            <p>2022-11-03 15:50:20</p>
        </div>
    </div>
</div>