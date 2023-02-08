<?php 
    defined('BASEPATH') or exit('No direct script access allowed');
    class ViewNotif extends CI_Controller {
        function index() {
            $this->load->model('Proposition');
            $propsi = $this->Proposition->getAllPropos(3);
            $data['content'] = "notif";
            $data['title'] = "Notification et demandes";
            $data['propsi'] = $propsi; 
            $this->load->view('home',$data);
        }
    }
?>