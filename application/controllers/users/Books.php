<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('books_model');
		$this->load->model('System');
		if(!$this->session->userdata('user_data')){
			redirect('users/Login');
		}

        $this->load->library('pagination');
	}

	function index()
	{

	   // $this->load->view("user",$data);
	  redirect('systems/Dashboard/loadRecord');
	}

	function home(){
		$this->load->view("front/index");
	}

	function books(){
		// $this->load->model('books_model');
		// $result=$this->books_model->index();
		// $data=array('allbooks'=>$result);
		// $this->load->view("back/books",$data);
		redirect('users/Books/loadRecord');

	}

	function Open_book($x){
		$data['index']=array('id'=>$x);
		$this->load->model('books_model');
		// $result=$this->user_model->view_user($data);
		// $data=array('index');
		$this->load->view('back/open_book',$data);
	}

	function insert(){
		$name = Null;
		$email = Null;
		$password = Null;
		extract($_POST);
		$param['user_name']=$name;
		$param['user_password']=$password;
		$param['user_email']=$email;

		if(isset($name)){
			$this->load->model('user_model');
			$result=$this->user_model->insert($param);
			$this->index();
		}

	}

	public function loadRecord($rowno=0){
    // Search text
    $search_text = "";
    if($this->input->post('submit') != NULL ){
      $search_text = $this->input->post('search');
      $this->session->set_userdata(array("search"=>$search_text));
    }else{
      if($this->session->userdata('search') != NULL){
        $search_text = $this->session->userdata('search');
      }else{

      }
    }

    // Row per page
    $rowperpage = 12;

    // Row position
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }

    $this->load->model('System');
     $this->load->model('User');
			$result=$this->User->index();
			foreach($result as $re){
          	$userdata['account_type'] = @$re['account_type'];
          	$school_id['school_id'] = @$re['school_id'];

          }
		    $userdata['account_type'] = @$re['account_type'];
		    $school_id['school_id'] = @$re['school_id'];

    // All records count
    $allcount = $this->System->getrecordCount($search_text);

    // Get records
    $users_record = $this->System->getData($rowno,$rowperpage,$search_text);
 
    // Pagination Configuration
    $config['base_url'] = base_url().'users/Books/loadRecord';
    $config['use_page_numbers'] = TRUE;
    $config['total_rows'] = $allcount;
    $config['per_page'] = $rowperpage;

    // Initialize
    $this->pagination->initialize($config);
 
    $data['pagination'] = $this->pagination->create_links();
    $data['result'] = $users_record;
    $data['row'] = $rowno;
    $data['search'] = $search_text;

    // Load view
    // $this->load->view('sys_admin/dashboard');
    $this->load->view('back/books',$data+$userdata+$school_id);
 
  }

  public function getcategory($cat,$rowno=0){
	
	$search_text = $cat;
    
    // Row per page
    $rowperpage = 12;

    // Row position
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }

    $this->load->model('System');
     $this->load->model('User');
			$result=$this->User->index();
			foreach($result as $re){
          	$userdata['account_type'] = @$re['account_type'];
          	$school_id['school_id'] = @$re['school_id'];

          }
		    $userdata['account_type'] = @$re['account_type'];
		    $school_id['school_id'] = @$re['school_id'];

    // All records count
    $allcount = $this->System->getrecordCount($search_text);

    // Get records
    $users_record = $this->System->getData($rowno,$rowperpage,$search_text);
 
    // Pagination Configuration
    $config['base_url'] = base_url().'users/Books/loadRecord';
    $config['use_page_numbers'] = TRUE;
    $config['total_rows'] = $allcount;
    $config['per_page'] = $rowperpage;

    // Initialize
    $this->pagination->initialize($config);
 
    $data['pagination'] = $this->pagination->create_links();
    $data['result'] = $users_record;
    $data['row'] = $rowno;
    $data['search'] = $search_text;

    // Load view
    // $this->load->view('sys_admin/dashboard');
    $this->load->view('back/books',$data+$userdata+$school_id);
 
  }


}
