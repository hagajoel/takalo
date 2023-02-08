<?php
$error = $this->session->flashdata('login_error');
?>
    <div class="btn back-btn">
        <a href="<?php echo site_url('viewProfil');?>">Revenir profil</a>
    </div>
<div class="container">
    <div class="left">
        <div class="bottom">
                <form action="AddObj/insert" method="post">
                    <p class="title">Ajouter un objet.</p>
                    <div class="input">
                        <p>Nom:</p>
                        <input type="text" name="nom" placeholder="Chaussure,vêtements,...">
                    </div>
                    <div class="input">
                        <p>Prix:</p>
                        <input type="number" name="price" min=0 step=250 placeholder="0.0 €">
                    </div>
                    <div class="input">
                        <p>Catégories:</p>
                        <select name="category" class="select-box">
                            <?php for($i=0 ; $i< sizeof($category) ; $i++) { ?>
                                <option value=<?php echo $category[$i]['id'] ?>><?php echo $category[$i]['nom'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="input">
                        <p>Description</p>
                        <textarea class="text-box" name="desc" cols="30" rows="10" placeholder="Description du produit"></textarea>
                    </div>
                <button type="submit" class="btn btn-dark">Ajouter</button>
                </form>
        </div>
    </div>
    <div class="right-content">
        <h1>Choisissez une photo.</h1>
        <img src="assets/img/image-solid.svg" style="width:100px;" alt="icon">
        <div class="upload-btn-wrapper">
            <button class="btn ">Selectionner</button>
            <input  type="file" name="myfile" />
        </div>
    </div>
</div>