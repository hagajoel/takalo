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
                        <h1>Listes des ultilisateurs inscrit:</h1>
                        <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nom</th>
                            <th scope="col">email</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                foreach ($users->result_array() as $user) {?>
                                    <tr>
                                        <th scope="row"><?php echo $user['id']; ?></th>
                                        <td><?php echo $user['nom']; ?></td>
                                        <td><?php echo $user['email']; ?></td>
                                    </tr>
                                <?php }
                            ?>
                            
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
   </div>
<?php 
    $this->load->view('templates/endingAdmin');
?>