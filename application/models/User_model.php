<?php
    class User_model extends CI_Model {
        function insert($name, $email, $password) {
            $this->db->query("INSERT INTO proprietaire VALUES (null, '".$name."','".$email."','".$password."')");
        }
        function getUser($email, $password) {
            return $this->db->query("SELECT * FROM proprietaire WHERE email = '".$email."' AND pwd='".$password."'");
        }
    }
?>