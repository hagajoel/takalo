<?php 
    defined('BASEPATH') or exit('No direct script access allowed');
    class Search extends CI_Controller {
          function index(){
               $data['content'] = "result";
               $data['title'] = "Resultat";
               $motcle = $this->input->post('search');
               $idc = $this->input->post('category');
               $this->load->model('Object');
               $donnees = $this->Object->search($motcle,$idc,1);
               if($donnees == null){
                    echo "null";
               }else{
                    $data['donnees'] = $donnees;
               }
               $this->load->view('search',$data);
          }
    }
?>