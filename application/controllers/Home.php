<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->model('Menu_model');
		$dish = $this->Menu_model->getMenu();
		$data['dishesh'] = $dish;
		$this->load->view('front/home', $data);
	}

	public function sendMail() {
		$this->load->library('form_validation');
        $this->form_validation->set_rules('name','name', 'trim|required');
        $this->form_validation->set_rules('email','email', 'trim|required');
        $this->form_validation->set_rules('subject','subject', 'trim|required');
        $this->form_validation->set_rules('message','message', 'trim|required');

		if($this->form_validation->run() == true) {
			$name = $this->input->post('name');
			$emailFrom = $this->input->post('email');
			$subject = $this->input->post('subject');
			$message = $this->input->post('message');

			$emailTo = "test@gmail.com"; //not real one
			$config["protocol"] = "smtp";
			$config["smtp_host"] = "ssl://smtp.gmail.com";
			$config["smtp_port"] = "465";
			$config["smtp_timeout"] = "60";
			$config["smtp_user"] = "test@gmail.com"; //not real one
			$config["smtp_pass"] = "test"; //not real one

			$config["charset"] = "utf-8";
			$config["newline"] = "\r\n";
			$config["mailtype"] = "html";
			$config["validation"] = TRUE;

			$this->load->library('email');
			$this->email->initialize($config);
			$this->email->set_mailtype("html");
			$this->email->from($emailFrom);
			$this->email->to($emailTo);
			$this->email->subject($subject);
			$this->email->message($message);
			$test= $this->email->send();

			$this->session->set_flashdata("msg","mail has been sent successfully".$test);
			redirect(base_url().'home/index');
		} else {
			redirect(base_url().'home/index');
		}
    }
}
