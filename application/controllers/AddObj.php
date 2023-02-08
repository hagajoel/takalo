<?php 
    defined('BASEPATH') or exit('No direct script access allowed');
    class AddObj extends CI_Controller {
        function index() {
            $this->load->model('Category');
            $category = $this->Category->getAllCategory();
            $data['content'] = "addForm";
            $data['title'] = "Ajouter un produit";
            $data['category'] = $category;
            $this->load->view('home',$data);
        }
        function insert(){
            $this->load->model('Object');
            $data = array(
                'ca' => $this->input->get('category'),
                'nom' => $this->input->get('nom'),
                'price' => $this->input->get('price'),
                'desc' => $this->input->get('desc'),
                'idP' => 1
            );
            $this->Object->insertObject($data);
            redirect('ViewProfil');
        }
    }
?>