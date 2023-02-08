<?php 
        defined('BASEPATH') or exit('No direct script access allowed');
        class Category extends CI_Controller {
            function index() {
                //Get allCat
                $this->load->model('category_model');
                $data['categories'] = $this->category_model->getAllCategory();
                $data['title'] = "Categories";
                $this->load->view('templates/category',$data);
            }
            function deleteCat($id) {
                $this->load->model('category_model');
                $this->category_model->deleteCategory($id);
                redirect('category');
            }

            function addCat() {
                $this->load->model('category_model');
                $name = $this->input->post('name');
                $this->category_model->addCategory($name);
                redirect('category');
            }
        }
?>