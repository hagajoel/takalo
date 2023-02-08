<?php 
    class Stats_model extends CI_Model {
        function getAllUsers () {
            return $this->db->query("SELECT * FROM proprietaire");
        }
        function getChanged() {
            return $this->db->query("SELECT count(id) as nb FROM demandes");
        }
    }
?>