<?php 
        defined('BASEPATH') or exit('No direct script access allowed');
        class checkLoginAdmin extends CI_Controller {
            function index() {
                $pwd = $this->input->post('pwd');
                $email = $this->input->post('email');

                if ($pwd == 1234 && $email == "admin@gmail.com") {
                    redirect('admin');
                }
                else{
                    redirect('loginAdmin');
                }

            }
        }

?>