<?php 
    defined('BASEPATH') or exit('No direct script access allowed');
    class ViewDetails extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->library('session');
            $this->load->helper('url');
            $this->load->model('Object');
        }
        function index() {
            $id = $this->input->get('id');
            $donnees = $this->Object->getMyObject($id);
            $data['content'] = "details";
            $data['title'] = "details";
            $data['donnees'] = "donnees";
            $this->load->view('home',$data);
        }
    }
?>