<?php 
    defined('BASEPATH') or exit('No direct script access allowed');
    class ViewDetails extends CI_Controller {
        function index() {
            $data['content'] = "details";
            $data['title'] = "details";
            $this->load->view('home',$data);
        }
    }
?>