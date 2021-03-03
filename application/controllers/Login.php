<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {
        $this->load->view('front/login');
    }

    public function authenticate() {
        $this->load->library('form_validation');
        $this->load->model('Mainuser_model');
        
        $this->form_validation->set_rules('username','Username', 'trim|required');
        $this->form_validation->set_rules('password','Password', 'trim|required');

         if($this->form_validation->run() == true) {
             $username = $this->input->post('username');
             $user = $this->Mainuser_model->getByUsername($username);
             if(!empty($user)) {
                $password = $this->input->post('password');
                if( password_verify($password, $user['password']) == true) {

                    $userArray['admin_id'] = $user['admin_id'];
                    $userArray['username'] = $user['username'];
                    $this->session->set_userdata('user', $userArray);
                    redirect(base_url().'home/index');
                } else {
                    $this->session->set_flashdata('msg', 'Either username or password is incoorect');
                    redirect(base_url().'login/index');
                }
             } else {
                $this->session->set_flashdata('msg', 'Either username or password is incoorect');
                redirect(base_url().'login/index');
             }
             //success
         } else {
             //Error
            $this->load->view('front/login');
         }
    }

    public function logout() {
        $this->session->unset_userdata('user');
        redirect(base_url().'login/index');
    }
}