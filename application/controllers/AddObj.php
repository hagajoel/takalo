<?php 
    defined('BASEPATH') or exit('No direct script access allowed');
    class AddObj extends CI_Controller {
        function index() {
            $data['content'] = "addForm";
            $data['title'] = "Ajouter un produit";
            $this->load->view('home',$data);
        }
    }
?>