<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Login - Takalo';
        $this->load->view('login',$data);
        $this->load->view('templates/heading',$data);
        $this->load->view('templates/content/login');
        $this->load->view('templates/ending');
    }
    
    public function login() {
        $this->load->view('login');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('user/login');
    }
}

?>