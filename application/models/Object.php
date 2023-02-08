<?php
class Object extends CI_Model{
     public function __construct()
     {
        $this->load->database();
     }
     public function getMyObject($id){
          $sql = "select * from allobjects where idProp = %d";
          $sql = sprintf($sql,$this->db->escape($id));
          $data = $this->db->query($sql);
          $result = array();
          foreach($data->result_array() as $row){
               $indice = array(
                    'idPropri' => $row['idProp'],
                    'nomPropri' => $row['propri'],
                    'nomObject' => $row['obj'],
                    'nomCateg' => $row['cate'],
                    'price' => $row['price'],
                    'description' => $row['description']
               );
               array_push($result,$indice);
          }
          return $result;
     }
     public function getOthersObject($id){
          $sql = "select * from allobjects where idProp != %d";
          $sql = sprintf($sql,$this->db->escape($id));
          $data = $this->db->query($sql);
          $result = array();
          foreach($data->result_array() as $row){
               $indice = array(
                    'idPropri' => $row['idProp'],
                    'nomPropri' => $row['propri'],
                    'nomObject' => $row['obj'],
                    'nomCateg' => $row['cate'],
                    'price' => $row['price'],
                    'description' => $row['description']
               );
               array_push($result,$indice);
          }
          return $result;
     }
     public function insertObject($data){
          $sql = "INSERT INTO objects (idP,idC,nom,price,description) VALUES (%d,%d,%s,%s,%s)";
          $sql = sprintf($sql,$this->db->escape($data['idP']),$this->db->escape($data['category']),$this->db->escape($data['nom']),$this->db->escape($data['price']),$this->db->escape($data['desc']));
          $this->db->query($sql);
     }
}
?>