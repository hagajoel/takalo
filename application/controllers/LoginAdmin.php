<?php 
    defined('BASEPATH') or exit('No direct script access allowed');
    class LoginAdmin extends CI_Controller {
        function index() {
            $data['title'] = "Admin Login";
            $this->load->view('loginAdmin',$data);
        }
    }
?>