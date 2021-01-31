<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('auth_model');
	}

	public function index(){
		$this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run() === false){
            $this->load->view("auth/index");
        } else {
            if($this->login() == 'success'){
                redirect(base_url('user'));
            }
        }
	}

	public function login(){
		$response = $this->auth_model->login();
		return $response;
	}

	public function logout(){
		$response = $this->auth_model->logout();
		if($response == 'success'){
			redirect(base_url());
		}
	}

	function change_password($id){
		$response = $this->auth_model->change_password();
		echo $response;
	}
}