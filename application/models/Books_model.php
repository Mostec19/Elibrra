<?php
Class Books_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	function index(){
		return $this->db->get('books');
	}
	
}