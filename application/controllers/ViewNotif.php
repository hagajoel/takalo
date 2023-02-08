<?php 
    defined('BASEPATH') or exit('No direct script access allowed');
    class ViewNotif extends CI_Controller {
        function index() {
            $data['content'] = "notif";
            $data['title'] = "Notification et demandes";
            $this->load->view('home',$data);
        }
    }
?>