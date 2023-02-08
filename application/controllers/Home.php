<?php 
    class Home extends CI_Controller 
    {
        function index(){
            $this->load->model('Category');
            $this->load->model('Object');
            $category = $this->Category->getAllCategory();
            $objects = $this->Object->getOthersObject(1);
            $data = array();
            $data['content'] = 'home';
            $data['title'] = 'Home';
            $data['category'] = $category;
            $data['objects'] = $objects;
            $this->load->view('home',$data);
        }
    }
    
?>