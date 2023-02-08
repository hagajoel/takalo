<?php

defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Login - Takalo';
        $this->load->view('login',$data);
        $this->load->view('templates/heading',$data);
        // $this->load->view('templates/content/login');
        $this->load->view('templates/ending');
    }

    function signup() {
        $this->load->model('user_model');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $pwd = $this->input->post('pwd');
        $user = $this->user_model->getUser($email,$pwd)->result_array();

        $this->user_model->insert($name,$email,$pwd);

        $this->session->set_userdata('id', $user[0]['id']);
        redirect('home');

    }

    function login() {
        // Check login
        $this->load->model('user_model');
        $email = $this->input->post('email');
        $pwd = $this->input->post('pwd');
        $users = $this->user_model->getUser($email,$pwd);

        foreach ($users->result_array() as $u) {
            $user = array("id" => $u['id'], "email"=> $u['email'], "pwd"=> $u['pwd']);
        }

        if($email == $user['email'] && $pwd == $user['pwd']) {
            $_SESSION['iduser'] = $user['id'];
            // $this->session->set_userdata('iduser', $user[0]['id']);
            redirect('home');
        }
        else {
            $this->session->set_userdata('error', "Veuillez verifiez votre mot de passe et votre mot de passe");
            redirect('user');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('user');
    }
}

?>