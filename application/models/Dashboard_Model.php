<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function index(){
    	return $this->session->all_userdata();
    	
    }

    function get_users($param){
		$query=$this->db->get_where('admins',$param['condition']);
		return $query->result();
	}

	function check_exist_payment($param){
		$condition=array('payment_type'=>$param['type_of_payment'],'semester_and_year'=>$param['year_and_semester'],'student_number'=>$param['student_number']);
		$query=$this->db->get_where('student_payment_information',$condition);
		if ($query->num_rows() > 0 ) {
			return $query->result();
		}else{
			echo "No record";
		}
		

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


// adding payment information method
	 function addpayment($param){
	 	$student_name = $param['first_name'].' '.$param['last_name'];
	 	if ($param['expected_amount'] > $param['amount_paid'])
			$balance = $param['expected_amount']-$param['amount_paid'];
		else
			$balance ='0.00';

		$fields=array(
			'student_name'=>$student_name,
			'student_number'=>$param['student_number'],
			'amount_paid'=>$param['amount_paid'],
			'description'=>$param['description'],
			'total_amount' =>$param['expected_amount'],
			'payment_percentage '=>$param['pecentage'],
			'payment_type'=>$param['type_of_payment'],
			'bank_slip_url'=>$param['bank_slip'],
			'balance'=>$balance,
			'semester_and_year'=>$param['year_and_semester'],
			'refrence_number'=>$param['refrence_number'],
			'time'=>time(),
			'date'=>$param['date']
			// 'addby'=>$param['addby'],
			// 'status'=>$param['status']
		);
		$this->db->insert('student_payment_information',$fields);
		return true;
	}
	// end of adding payment information


// adding courses method
	function addcourse($param){
			$fields=array(
				'team_or_semester_and_year'=>$param['year_and_semester'],
				'course_code'=>$param['course_code'],
				'program'=>$param['program'],
				'course_name'=>$param['course_name'],
				'date'=>date("Y-m-d H:i:s")
				// 'school_id'=>$param['school_id'],
				// 'addby'=>$param['addby'],;
			);
			$this->db->insert('courses',$fields);
			return true;
		}
// end of adding courses


	// adding adding news and notices method
		function addnews($param){
			$fields=array(
				'title'=>$param['title'],
				'notice_body'=>$param['body'],
				'file'=>$param['file'],
				'date'=>date("Y-m-d H:i:s"),
				'time'=>time()
				// 'school_id'=>$param['school_id'],
				// 'addby'=>$param['addby'],;
			);
			$this->db->insert('notice_and_news',$fields);
			return true;
		}


// adding programs method
		function addprogram($param){
			$fields=array(
				
				'program_name'=>$param['program_name'],
				'school'=>$param['school'],
				'date'=>date("Y-m-d H:i:s")
				// 'school_id'=>$param['school_id'],
				// 'addby'=>$param['addby'],;
			);
			$this->db->insert('programs',$fields);
			return true;
		}
		// end of adding programs method


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


	// adding student_information method
	function add_student($param){
		$password = password_hash('password', PASSWORD_DEFAULT);
		$fullname = $param['firstname'].' '.$param['lastname'];
		$fields=array(
			'fullname'=>$fullname,
			'email'=>$param['email'],
			'password'=>$password,
			'school_id'=>$param['school_id'],
			'student_number'=>$param['student_number'],
			'program'=>$param['program'],
			'school_id'=>$param['school_id'],
			'phone_number'=>$param['phone_number'],
			'nrc_passport_drivers_licence'=>$param['nrc'],
			'added_date'=>date("Y-m-d H:i:s"),
			// 'addby'=>$param['addby'],;
			'status'=>$param['status'],
			'date_of_Entry'=>$param['date_of_Entry'],
			'gender'=>$param['gender'],
			'residential_address'=>$param['residential_address'],
			'expected_year_of_graduation'=>$param['expected_year_of_graduation']

		);
		$sql=$this->db->insert('student_information',$fields);
		
	}

	// end adding student_information method

}