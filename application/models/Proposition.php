<?php
class Proposition extends CI_Model{
     public function __construct()
     {
        $this->load->database();
     }
     function getAllPropos($id){
          $sql = "select * from allproposition where idR =%d and valide=0";
          $sql = sprintf($sql,$this->db->escape($id));
          $data = $this->db->query($sql);
          $result = array();
          foreach($data->result_array() as $row){
               $indice = array(
                    'id' => $row['id'],
                    'idD' => $row['idD'],
                    'PropD' => $row['PropD'],
                    'object1' => $row['object1'],
                    'idR' => $row['idR'],
                    'PropR' => $row['PropR'],
                    'object2' => $row['object2'],
                    'dateprops' => $row['dateprops'],
               );
               array_push($result,$indice);
          }
          return $result;
     }
     function updateIdp($idP,$idO){
          $sql ="update objects set idP=%d where id=%d";
          $sql = sprintf($sql,$this->db->escape($idP),$this->db->escape($idO));
          $this->db->query($sql);
     }
     function valide($idpropo){
          $sql = "update proposition set valide=1 where id=".$idpropo;
          $this->db->query($sql);
     }
     function insertHisto($idpropo){
          $sql ="INSERT INTO historic(idpropo) VALUES(".$idpropo.")";
          $this->db->query($sql);
     }
     function insertDemande($idProposition,$daty){
          $sql = "insert into demande(idPr,dateAccept) values(".$idProposition.",%s)";
          $sql = sprintf($sql,$this->db->escape($idProposition),$this->db->escape($daty));
          $this->db->query($sql);
     }
     function accept($idpropo,$idD,$idO1,$idR,$idO2){
          $this->updateIdp($idD,$idO2);
          $this->updateIdp($idR,$idO1);
          $this->insertHisto($idpropo);
          $this->valide($idpropo);
     }
     function delete($id){
          $sql ="delete from proposition where id=".$id;
          $this->db->query($sql);
     }
     function selectOne($id){
          $sql ="select * from proposition where id=".$id;
          $data = $this->db->query($sql);
          $row = $data->row_array();
          $result = array(
               'id' => $row['id'],
               'idD' => $row['idD'],
               'idO1' => $row['idO1'],
               'idO2' => $row['idO2'],
               'idR' => $row['idR'],
               'dateProps' => $row['dateProps'] 
          );
          return $result;
     }
}