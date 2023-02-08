<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Category extends CI_Model {
     public function __construct()
     {
        $this->load->database();
     }
     public function getAllCategory(){
          $sql = "select * from category";
          $data = $this->db->query($sql);
          $result = array();
          foreach($data->result_array() as $row){
                $indice = array(
                    'id' => $row['id'],
                    'nom' => $row['nom']
               );
               array_push($result,$indice);
          }
          return $result;
     }
    }
?>