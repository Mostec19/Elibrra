<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashBoard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('user_data')){
			redirect('sys_admin/login');
		}
		$this ->load->library('form_validation');

     
	}


	public function index()
	{
		
		$this->load->model('Dashboard_Model');
		$this->load->model('books_model');
		$result=$this->books_model->index();
		$data=array('allbooks'=>$result);
		// $this->load->view("back/books",$data);
        $this->load->view('sys_admin/dashboard',$data);
	}


// Start of Adding payments methods
// Loading add add_payment View
	public function add_book(){
		$this->load->model('books_model');
		$result=$this->books_model->index();
		$data=array('allbooks'=>$result);

		// $this->load->view("back/books",$data);
        $this->load->view('sys_admin/addbook');

	}

// Adding payments records to the system
	public function addbook(){

		$this->form_validation->set_rules('book_title', 'book_title','trim|required|min_length[12]|max_length[64]');
        $this->form_validation->set_rules('book_author', 'book_author','trim|required|min_length[4]|max_length[64]');
        $this->form_validation->set_rules('book_category', 'book_category', 'trim|required');
        $this->form_validation->set_rules('publisher_id', 'book_category', 'trim|required');
        $this->form_validation->set_rules('book_image', 'book_image', 'trim');
        $this->form_validation->set_rules('book', 'book', 'trim');
        $this->form_validation->set_rules('book_isbn', 'book_isbn', 'trim|required|min_length[4]|max_length[16]|is_unique[books.book_isbn]');
        $this->form_validation->set_rules('description', 'description', 'trim|max_length[256]');
     

        if ($this->form_validation->run() == FALSE) {
            $this->add_book();
        } else {

        $book_title = Null;
        $first_name = Null;
		$last_name = Null;
		$book_author = Null;
		$book_category = Null;
		$publisher_id = Null;
		$cover_path = Null;
		$book_path = Null;
		$book_isbn = Null;
		$description = Null;
		

		 $config_1=['allowed_types' => 'pdf',
				'upload_path' =>'./assets/books/',
				'encrypt_name' => true];
		$this->load->library('upload', $config_1);
		$this->form_validation->set_error_delimiters();
		$this->upload->do_upload('book');
		$book_info = $this->upload->data();
		$book_path = base_url("assets/books".'/'.$book_info['file_name']);

		extract($_POST);
		$param['book_title']=$book_title;
		$param['book_author']=$book_author;
		$param['book_category']=$book_category;
		$param['publisher_id']=$publisher_id;
		$param['book_isbn']=$book_isbn;
		$param['description']=$description;
		$param['book_image']=$cover_path;
		$param['book']=$book_path;


		if(isset($book_author)){
			$this->load->model('System');
			$check=$this->System->addbook($param);
			// $result=$this->System->check_exist_payment($param);
			// $data=array('index'=>$result);
		 //    print_r($data);
			$this->add_book();

			if($check==true)
			{
			  $this->session->set_flashdata('true', 'Book was added successfully');
			   redirect('systems/dashboard/book_view/'.$book_isbn);
			}
			else
			{
			  $this->session->set_flashdata('error', "There was a Problem adding the book");
			  redirect('systems/Dashboard/add_book');
			}
		}
          
  
        }
	}
	function book_view($x){
		$data['condition']=array('book_isbn'=>$x);
		$this->load->model('System');
		$result=$this->System->book_info($data);
		foreach($result as $re){
		$data=array('index'=>$re);
		$this->load->view('sys_admin/addcover',$data);
	}

	}
	function add_cover(){
		$this->form_validation->set_rules('book_title', 'book_title','trim|required|min_length[12]|max_length[64]');
        $this->form_validation->set_rules('book_author', 'book_author','trim|required|min_length[4]|max_length[64]');
        $this->form_validation->set_rules('book_category', 'book_category', 'trim|required');
        $this->form_validation->set_rules('publisher_id', 'book_category', 'trim|required');
        $this->form_validation->set_rules('book_image', 'book_image', 'trim');
        $this->form_validation->set_rules('book_isbn', 'book_isbn', 'trim|required|min_length[4]|max_length[16]');
        $this->form_validation->set_rules('description', 'description', 'trim|max_length[256]');
     

        if ($this->form_validation->run() == FALSE) {
            $this->add_cover();
        } else {
		$book_title = Null;
        $first_name = Null;
        $book_image = Null;
		$last_name = Null;
		$book_author = Null;
		$book_category = Null;
		$publisher_id = Null;
		$cover_path = Null;
		$book_isbn = Null;
		$description = Null;

		$config=['allowed_types' => 'jpg|png|jpeg',
				'upload_path' =>'./assets/book_covers/',
				'encrypt_name' => true];

		$this->load->library('upload', $config);
		$this->form_validation->set_error_delimiters();
		$this->upload->do_upload('book_image');
		$cover_info = $this->upload->data();
		print($cover_info);
		$cover_path = base_url("assets/bookcovers".'/'.$cover_info['file_name']);

		extract($_POST);
		$param['book_title']=$book_title;
		$param['book_author']=$book_author;
		$param['book_category']=$book_category;
		$param['publisher_id']=$publisher_id;
		$param['book_isbn']=$book_isbn;
		$param['description']=$description;
		$param['book_image']=$cover_path;
		
		if(isset($cover_path)){
			$this->load->model('System');
			$check=$this->System->add_cover($param);
			$this->book_view($param['book_isbn']);
		}
	}
}
// End of Adding payments methods


}