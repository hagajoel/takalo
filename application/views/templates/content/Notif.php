<?php 
    $this->load->view('templates/navbar');
?>
<div class="notif-container">
    <h3>Vos demandes de propositions d'échange:</h3>
        <?php for($i=0 ; $i < sizeof($propsi) ; $i++){ ?>
            <div class="profil-box">
            <div class="info">
                    <div class="profil profil-sm">
                        <a href="#">HA</a>
                    </div>
                    <p class="nom"><?php echo $propsi[$i]['PropD']; ?></p>
                    <p class="obj"><?php echo $propsi[$i]['object1']; ?></p>
                    <img src="assets/img/repeat-solid.svg" style="width:25px;margin:20px" alt="icon">
                    <div class="profil profil-sm">
                        <a href="#">TA</a>
                    </div>
                    <p class="nom">Paul</p>
                    <p class="obj">Casquettes</p>
            </div>
                <p>2022-11-03 15:50:20</p>
                <a href="#">Accepter</a>
                <a href="#">Refuser</a>
            </div>
        <?php } ?>
</div>