<?php 
    defined('BASEPATH') or exit('No direct script access allowed');
    class ViewProfil extends CI_Controller {
        function index() {
            $data['content'] = "profil";
            $data['title'] = "Profil";
            $this->load->view('home',$data);
        }
    }
?>