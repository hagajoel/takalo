<?php 
    class Category_model  extends CI_Model
    {
        function getAllCategory() {
            $res=$this->db->query("SELECT * FROM category");
            return $res;
        }
        function deleteCategory($id) {
            $this->db->query("DELETE FROM category WHERE id = ".$id."");
        }
        function addCategory($name) {
            $this->db->query(" 
            ALTER TABLE category AUTO_INCREMENT=1");
            $this->db->query("INSERT INTO category(nom) VALUES('".$name."')");
        }
    }
    
?>