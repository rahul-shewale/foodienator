<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class User_model extends CI_Model {
    
    public function create($formArray) {
        $this->db->insert('users', $formArray);
    }

    public function getUsers() {
        $result = $this->db->get('users')->result_array();
        return $result;
    }

    public function getUser($id) {
        $this->db->where('u_id', $id);
        $user = $this->db->get('users')->row_array();
        return $user;
    }

    public function update($id, $formArray) {
        $this->db->where('u_id',$id);
        $this->db->update('users', $formArray);
    }

    public function delete($id) {
        $this->db->where('u_id',$id);
        $this->db->delete('users');
    }

}
