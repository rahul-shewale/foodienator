<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class User extends CI_Controller {
    public function index() {
        $this->load->view('admin/user/list');
    }
    public function create_user() {
        $this->load->view('admin/user/add_user');
    }
}