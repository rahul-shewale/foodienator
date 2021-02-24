<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Store extends CI_Controller {
    public function index() {
        $this->load->view('admin/store/list');
    }

    public function create_category(){
        $this->load->view('admin/store/add_cat');
    }

    public function create_restuarent(){
        $this->load->view('admin/store/add_res');
    }
}