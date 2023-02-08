<?php 
    $this->load->view('templates/headingAdmin');
?>

   <div id="wrapper">
        <?php 
            $this->load->view('templates/sidebar');
        ?>
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Liste des categories:</h1>
                        <div class="col-lg-10 d-flex align-items-center justify-content-center flex-wrap flex-column">
                        <form action="<?php echo site_url('category/addCat');?>" method="post">
                            <input type="text" placeholder="Ajouter une categorie" class="form-control m-3" name="name">
                            <input type="submit" value="Ajouter" class="btn btn-sm w-100 m-3 btn-success">
                        </form>
                            <?php foreach($categories->result_array() as $cat) {?>
                                <div class="card w-25 m-3">
                                <div class="card-body d-flex align-items-center justify-content-center">
                                    <?php echo $cat['nom']; ?>
                                    <a href="<?php echo site_url('category/deleteCat/'.$cat['id'])?>" class=" btn btn-danger btn-sm mx-2">Effacer</a>
                                </div>
                            </div>
                                <?php } ?>
                            </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
<?php 
    $this->load->view('templates/endingAdmin');
?>