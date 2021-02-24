<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Menu extends CI_Controller {
    public function index() {
        $this->load->view('admin/menu/list');
    }

    public function create_menu(){
        $this->load->view('admin/menu/add_menu');
    }

}