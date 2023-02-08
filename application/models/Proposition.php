<?php
class Proposition extends CI_Model{
     public function __construct()
     {
        $this->load->database();
     }
     function getAllPropos($id){
          $sql = "select idD,PropD,object1,object2,dateprops from allproposition where idR =%d";
          $sql = sprintf($sql,$this->db->escape($id));
          $data = $this->db->query($sql);
          $result = array();
          foreach($data->result_array() as $row){
               $indice = array(
                    'idD' => $row['idD'],
                    'PropD' => $row['PropD'],
                    'object1' => $row['object1'],
                    'object2' => $row['object2'],
                    'dateprops' => $row['dateprops'],
               );
               array_push($result,$indice);
          }
          return $result;
     }
}