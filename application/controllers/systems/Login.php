<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Login extends CI_Controller{
	public function __construct(){
		parent::__construct();
		// if($this->session->userdata()){

		// }
	}
	public function index(){
		$this->load->view('sys_admin/login');
	}

	function login(){
		$password = Null;
		$email = Null;
		extract($_POST);
		$param['password']=$password;
		$param['email']=$email;

		if(isset($email)){
			$this->load->model('System');
			$check=$this->System->login($param);
			$this->index();
			if($check==true)
			{
			  // $this->session->set_flashdata('true', 'write_the_message_you_want');
			  redirect('systems/Dashboard/');
			}
			else
			{
			  $this->session->set_flashdata('error', "Login Credentials Incorrect");
			  redirect('systems/Login');
			}
		
		}
	}
	function logout() {
		$this->session->unset_userdata('user_data');
		$this->index();
		redirect('systems/Login');
        
    }

}