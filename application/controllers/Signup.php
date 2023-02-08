<?php 
    class Signup extends CI_Controller {
        function index() {
            $data['title'] = 'S\'inscrire - Takalo';
            $this->load->view('register',$data);
            $this->load->view('templates/heading',$data);
            $this->load->view('templates/ending');
        }
    }
?>