<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Menu_model extends CI_Model {
    
    public function create($formArray) {
        $this->db->insert('dishesh', $formArray);
    }

    public function getMenu() {
        $result = $this->db->get('dishesh')->result_array();
        return $result;
    }

    public function getSingleDish($id) {
        $this->db->where('d_id', $id);
        $dish = $this->db->get('dishesh')->row_array();
        return $dish;
    }

    public function update($id, $formArray) {
        $this->db->where('d_id', $id);
        $this->db->update('dishesh', $formArray);
    } 

    public function delete($id) {
        $this->db->where('d_id',$id);
        $this->db->delete('dishesh');
    }

    public function countDish() {
        $query = $this->db->get('dishesh');
        return $query->num_rows();
    }

    //front

    public function getDishesh($id) {
        $this->db->where('r_id', $id);
        $dish = $this->db->get('dishesh')->result_array();
        return $dish;
    }

    public function createCustomer($custData) {
        $this->db->insert('customer', $custData);
        return $this->db->insert_id();
    }

    public function insertOrder($orderData) {
        $this->db->insert('orders', $orderData);
        return $this->db->insert_id();
    }

    public function insertOrderItems($orderItemData) {
        $this->db->insert_batch('order_items', $orderItemData);
        return $this->db->insert_id();
    }

    public function getOrder($id) {
        $this->db->where('o_id', $id);
        $order = $this->db->get('orders')->row_array();
        return $order;
    }


    public function getCustomer($id) {
        $this->db->where('c_id', $id);
        $cust = $this->db->get('customer')->row_array();
        return $cust;
    }

}
