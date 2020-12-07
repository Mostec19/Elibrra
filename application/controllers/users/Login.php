<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}
   
	public function index(){
		$this->load->view('users/login');
	}

	public function login(){
		$password = Null;
		$email = Null;

		extract($_POST);
		$param['password']=$password;
		$param['email']=$email;
		if(isset($email)){
			$this->load->model('User');
			$check=$this->User->login($param);
			$this->index();
			if($check==true)
			{
			  // $this->session->set_flashdata('true', 'write_the_message_you_want');
			  redirect('users/Books/books');
			}
			else
			{
			  $this->session->set_flashdata('error', "Login Credentials Incorrect");
			  redirect('users/Login');
			}
		
		}
	}



	public function logout() {
		$this->session->unset_userdata('user_data');
		$this->index();
		redirect('users/Login');       
    }

 }