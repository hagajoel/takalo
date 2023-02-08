<?php 
    defined('BASEPATH') or exit('No direct script access allowed');
    class Admin extends CI_Controller {
        function index() {
            $data['title'] = 'Admin';
            $data['content'] = 'admin';
            $this->load->view('admin',$data);
        }
    }
?>