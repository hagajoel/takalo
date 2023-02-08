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
                        <h1>Hello Admin</h1>
                    </div>
                </div>
            </div>
        </div>
   </div>
<?php 
    $this->load->view('templates/endingAdmin');
?>