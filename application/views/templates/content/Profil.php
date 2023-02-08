<?php 
    $this->load->view('templates/navbar');
?>
    <div class="btn add-btn">
        <a href="<?php echo site_url('addObj');?>">Ajouter un objet</a>
    </div>
<?php 
    $this->load->view('templates/listmyobject');
?>
