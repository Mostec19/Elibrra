<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function index(){
    	return $this->session->all_userdata();
    	
    }

    public function login($param){
		$condition=array('email'=>$param['email']);
		$query=$this->db->get_where('users',$condition);
		$row = $query->row();
		if($row){
			$session_data =array(
			'id' =>$row->id,
			'email'=>$row->email,
			'account_type'=>$row->account_type,
			'school_id'=>$row->school_id

		);

			if(password_verify($param['password'], $row->password)){
						$this->session->set_userdata('user_data',$session_data);
						return true;

			}else{
				return false;
			}

		}

	}

    function get_users($param){
		$condition=array('school_id'=>$param);
		$query=$this->db->get_where('users',$condition);
		
		return $query;
	}

	// Fetch records
  public function getuserData($rowno,$rowperpage,$search="",$school_id) {
 
    // $this->db->select('*');
    // $this->db->from('users');
    $condition=array('school_id'=>$school_id);

    if($search != ''){
      $this->db->like('first_name', $search);
      $this->db->or_like('email', $search);
      $this->db->or_like('last_name', $search);
    }

    $this->db->limit($rowperpage, $rowno); 
    // $query = $this->db->get();
    $query=$this->db->get_where('users',$condition);

 
    return $query->result_array();
  }

  // Select total records
  public function getrecordCount($search = '') {

    $this->db->select('count(*) as allcount');
    $this->db->from('users');
 
    if($search != ''){
      $this->db->like('first_name', $search);
      $this->db->or_like('email', $search);
      $this->db->or_like('last_name', $search);
    }

    $query = $this->db->get();
    $result = $query->result_array();
 
    return $result[0]['allcount'];
  }

// add user information method
    function adduser($param){
    	$password = password_hash($param['password'], PASSWORD_DEFAULT);
		$fields=array(
			'firstname'=>$param['firstname'],
			'lastname'=>$param['lastname'],
			'email'=>$param['email'],
			'password'=>$password,
			'school_id'=>$param['school_id'],
			'department'=>$param['department'],
			'access_level'=>$param['access_level'],
			'added_date'=>date("Y-m-d H:i:s"),
			// 'addby'=>$param['addby'],;
			'status'=>$param['status']
		);
		$this->db->insert('Admins',$fields);
		return true;
	}
	// end of add user information

	function update_status($param){
		$fields = array(
			'status'=>$param['status']
		 );
		$condition=array('id'=>$param['id']);
		$query=$this->db->get_where('admins',$condition);
		$result=$query->result_array();

		if(!empty($result)){
			$data = array(
			'status'=>$param['status']);			
			$this->db->set('status',$param['status'],false);
			$this->db->where('id',$param['id']);
			$this->db->update('admins',$data);
		}

	}

}