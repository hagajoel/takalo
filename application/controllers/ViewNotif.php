<?php 
    defined('BASEPATH') or exit('No direct script access allowed');
    class ViewNotif extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->library('session');
            $this->load->helper('url');
            $this->load->model('Proposition');
        }
        function index() {  
            $propsi = $this->Proposition->getAllPropos(1);
            $data['content'] = "notif";
            $data['title'] = "Notification et demandes";
            $data['propsi'] = $propsi; 
            $this->load->view('home',$data);
        }
        function deleteProposition(){
            $id = $this->input->get('id');
            $this->Proposition->delete($id);
            redirect('ViewNotif/');
        }
        function acceptPropos(){
            $id = $this->input->get('id');
            $donnees = $this->Proposition->selectOne($id);
            $this->Proposition->accept($id,$donnees['idD'],$donnees['idO1'],$donnees['idR'],$donnees['id2']);
            redirect('ViewProfil/');
        }
    }
?>