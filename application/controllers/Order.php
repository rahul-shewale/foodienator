<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Order extends CI_Controller {
    public function index() {
        // $this->load->model('Menu_model');
        // $dishesh = $this->Menu_model->getDishesh($id);
        // $data['dishesh'] = $dishesh;
        $this->load->view('front/orders');
    }
}