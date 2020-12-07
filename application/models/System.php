<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class System extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function index(){
    	return $this->session->all_userdata();
    	
    }

    public function login($param){
		$condition=array('email'=>$param['email']);
		$query=$this->db->get_where('admins',$condition);
		$row = $query->row();
		if($row){
			$session_data =array(
			'id' =>$row->id,
			'email'=>$row->email,
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
		$query=$this->db->get_where('admins',$param['condition']);
		return $query->result();
	}

	function delete_record($id,$table)
{
   $this->db->where('id', $id);
   $this->db->delete($table); 
}


// add user information method
    function addAdmin($param){
    	$password = password_hash($param['password'], PASSWORD_DEFAULT);
		$fields=array(
			'firstname'=>$param['firstname'],
			'lastname'=>$param['lastname'],
			'email'=>$param['email'],
			'password'=>$password,
			'access_level'=>$param['access_level'],
			'status'=>$param['status']
		);
		$this->db->insert(' admins',$fields);
		return true;
	}
	// end of add user information

	// add user information method
    function adduser($param){
    	$password = password_hash($param['password'], PASSWORD_DEFAULT);

    	if ($param['school_id'] == Null) {
    		$school_id = $this->generateCode(16);
    	}else{
    		$school_id = $param['school_id'];
    	}

		$fields=array(
			'first_name'=>$param['firstname'],
			'last_name'=>$param['lastname'],
			'email'=>$param['email'],
			'password'=>$password,
			'account_type'=>$param['account_type'],
			'status'=>$param['status'],
			'school_id'=> $school_id
		);
		$this->db->insert('users',$fields);
		return true;
	}

public function generateCode($limit){
    $code = '';
    for($i = 0; $i < $limit; $i++) { $code .= mt_rand(0, 9); }
    return $code;
    }


// adding payment information method
	 function addbook($param){
		$fields=array(
			'book_isbn'=>$param['book_isbn'],
			'book_title'=>$param['book_title'],
			'book_descr'=>$param['description'],
			'book_author' =>$param['book_author'],
			'book_category'=>$param['book_category'],
			// 'book_image'=>$param['book_image'],
			'book_url'=>$param['book'],
			'publisherid'=>$param['publisher_id']
		);
		$this->db->insert('books',$fields);
		return true;
	}

    function book_info($param){
		$query=$this->db->get_where('books',$param['condition']);
		return $query->result_array();
	}

	function add_cover($param){
		$fields = array(
			'book_image'=>$param['book_image']
		 );

		$condition=array('book_isbn'=>$param['book_isbn']);
		$query=$this->db->get_where('books',$condition);
		$result=$query->result_array();

		if(!empty($result)){
			$this->db->where($condition);
			$this->db->update('books',$fields);
		}
			return true;
	}

function update_book($param){
	$fields = array(
			'book_image'=>$param['book_image'],
			'book_title'=>$param['book_title'],
			'book_descr'=>$param['description'],
			'book_author' =>$param['book_author'],
			'book_category'=>$param['book_category'],
			// 'book_url'=>$param['book_image'],
			'publisherid'=>$param['publisher_id']

		 );

		$condition=array('book_isbn'=>$param['book_isbn']);
		$query=$this->db->get_where('books',$condition);
		$result=$query->result_array();

		if(!empty($result)){
			$this->db->where($condition);
			$this->db->update('books',$fields);
		}
			return true;
}


 // delete records
function delete_row($id,$table)
{
   $this->db->where('book_isbn', $id);
   $this->db->delete($table); 
}

	
	// end of adding payment information



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

// Fetch records
  public function getData($rowno,$rowperpage,$search="") {
 
    $this->db->select('*');
    $this->db->from('books');

    if($search != ''){
      $this->db->like('book_title', $search);
      $this->db->or_like('book_category', $search);
      $this->db->or_like('book_descr', $search);
    }

    $this->db->limit($rowperpage, $rowno); 
    $query = $this->db->get();
 
    return $query->result_array();
  }

  // Select total records
  public function getrecordCount($search = '') {

    $this->db->select('count(*) as allcount');
    $this->db->from('books');
 
    if($search != ''){
      $this->db->like('book_title', $search);
      $this->db->or_like('book_descr', $search);
    }

    $query = $this->db->get();
    $result = $query->result_array();
 
    return $result[0]['allcount'];
  }

}