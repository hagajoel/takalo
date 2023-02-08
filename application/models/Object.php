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
          $sql = "INSERT INTO objects (idP,idC,nom,price,description) VALUES (%d,%s,%s,%s,%s)";
          $sql = sprintf($sql,$this->db->escape($data['idP']),$this->db->escape($data['ca']),$this->db->escape($data['nom']),$this->db->escape($data['price']),$this->db->escape($data['desc']));
          $this->db->query($sql);
     }
     public function search($motcle,$idC,$idProp){
          $sql = "select * from allobjects where ( obj like '%".$motcle."%' or description like '%".$motcle."%' ) and cate in('".$idC."') and idProp !=".$idProp;
          $data = $this->db->query($sql);
          $result = array();
          foreach($data->result_array() as $row){
               $indice = array(
                    'propri' => $row['propri'],
                    'obj' => $row['obj'],
                    'cate' => $row['cate'],
                    'price' => $row['price'],
                    'description' => $row['description']
               );
               array_push($result,$indice);
          }
          return $result;
     }
}
?>