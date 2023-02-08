<?php 
    defined('BASEPATH') or exit('No direct script access allowed');
    class ViewProfil extends CI_Controller {
        function index() {
            $this->load->model('Category');
            $this->load->model('Object');
            $category = $this->Category->getAllCategory();
            $myobjects = $this->Object->getMyObject(1);
            $data['content'] = "profil";
            $data['title'] = "Profil";
            $data['category'] = $category;
            $data['myobjects'] = $myobjects;
            $this->load->view('profil',$data);
        }
    }
?>