<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Store_model extends CI_Model {
    
    public function create($formArray) {
        $this->db->insert('restaurants', $formArray);
    }

    public function getStores() {
        $result = $this->db->get('restaurants')->result_array();
        return $result;
    }

    public function getStore($id) {
        $this->db->where('r_id', $id);
        $store = $this->db->get('restaurants')->row_array();
        return $store;
    }

    public function update($id, $formArray) {
        $this->db->where('r_id', $id);
        $this->db->update('restaurants', $formArray);
    } 

    public function delete($id) {
        $this->db->where('r_id',$id);
        $this->db->delete('restaurants');
    }


}