<?php
defined('BASEPATH') OR exit ('No direct script access allowed');



class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $admin = $this->session->userdata('admin');
        if(empty($admin)) {
            $this->session->set_flashdata('msg', 'Your session has been expired');
            redirect(base_url().'admin/login/index');
        }
    }
    public function index() {

        $this->load->model('Store_model');
        $this->load->model('Menu_model');
        $this->load->model('User_model');

        $data['countStore'] = $this->Store_model->countStore();
        $data['countDish'] = $this->Menu_model->countDish();
        $data['countUser'] = $this->User_model->countUser();
        $this->load->view('admin/dashboard', $data);
    }
}
