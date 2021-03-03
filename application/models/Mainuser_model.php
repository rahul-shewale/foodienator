<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Mainuser_model extends CI_Model {
    

    public function create($formArray) {
        $this->db->insert('users', $formArray);
    }

    public function getUsers() {
        $result = $this->db->get('users')->result_array();
        return $result;
    }

    public function getByUsername($username) {

        $this->db->where('username', $username);
        $mainuser = $this->db->get('users')->row_array();
        return $mainuser;
    }



}
