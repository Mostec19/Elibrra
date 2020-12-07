<?php
Class Admin extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	// function index(){
	// }


	public function login($param){
		$condition=array('school_email'=>$param['email']);
		$query=$this->db->get_where('sys_accounts',$condition);
		$row = $query->row();
		if($row){
			$session_data =array(
			'id' =>$row->id,
			'school_id'=>$row->school_id,
			'school_name'=>$row->school_name,
			'school_email'=>$row->school_email,
		);

			if(password_verify($param['password'], $row->password)){
						$this->session->set_userdata('admin',$session_data);
						return true;

			}else{
				return false;
			}

		}

	}

}