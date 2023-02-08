<?php 
        defined('BASEPATH') or exit('No direct script access allowed');
        class Stats extends CI_Controller {
            function index() {
                $this->load->model('stats_model');
                $data['users'] = $this->stats_model->getAllUsers();
                // $data['changed'] = $this->stats_model->getChanged();
                $data['title'] = "Statistiques";
                $this->load->view('templates/stats',$data);
            }
        } 
?>