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
                'idP' => 1,
                'category' => $this->input->post('category'),
                'nom' => $this->input->post('nom'),
                'price' => $this->input->post('price'),
                'desc' => $this->input->post('desc')
            );
            $this->Object->insertObject($data);
        }
    }
?>