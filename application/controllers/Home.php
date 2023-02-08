<?php 
    class Home extends CI_Controller 
    {
        function index(){
            $data['content'] = 'home';
            $data['title'] = 'Home';
            $this->load->view('home',$data);
        }
    }
    
?>