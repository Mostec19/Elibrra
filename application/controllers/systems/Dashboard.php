<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashBoard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('user_data')){
			redirect('systems/Login');
		}
		// Load Pagination library
        $this->load->library('pagination');
		$this ->load->library('form_validation');
       	$this->load->helper(array('form', 'url'));
       	// Load Pagination library
     
	}


	public function index()
	{
		
		// $this->load->model('System');
		// $result=$this->System->getData();
		// $data=array('allbooks'=>$result);
		// print_r($data);
		// // $this->load->view("back/books",$data);
  //       $this->load->view('sys_admin/dashboard',$data);
		    redirect('systems/Dashboard/loadRecord');

	}

// Start of Adding book methods
	public function add_book(){
		$this->load->model('books_model');
		$result=$this->books_model->index();
		$data=array('allbooks'=>$result);

		// $this->load->view("back/books",$data);
        $this->load->view('sys_admin/addbook');

	}

	public function add_admin(){
		// $this->load->model('books_model');
		// $result=$this->books_model->index();
		// $data=array('allbooks'=>$result);

		// $this->load->view("back/books",$data);
        $this->load->view('sys_admin/addAdmin');

	}

	public function addAdmin(){	
        $this->form_validation->set_rules('firstname', 'firstname', 'trim|required|min_length[3]|max_length[30]');
        $this->form_validation->set_rules('lastname', 'lastname', 'trim|required|min_length[3]|max_length[30]');
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[6]');
         $this->form_validation->set_rules('access_level', 'access_level', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[admins.email]');
       $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[password]');
       
        if ($this->form_validation->run() == FALSE) {
            $this->add_admin();
        } else {
        $firstname = Null;
		$lastname = Null;
		$email = Null;
		$password = Null;
		$school_id=Null;
		$status = Null;
		$password = Null;
		$access_level =Null;

		extract($_POST);
		$param['firstname']=$firstname;
		$param['lastname']=$lastname;
		$param['password']=$password;
		$param['email']=$email;
		$param['school_id']=$school_id;
		$param['password']=$password;
		$param['access_level']=$access_level;
		$param['status']=$status;


		if(isset($email)){
			$this->load->model('System');
			$check=$this->System->addAdmin($param);
			$this->add_admin();

			if($check==true)
			{
			  $this->session->set_flashdata('true', 'User was added successfully');
			   redirect('systems/Dashboard/add_admin');
			}
			else
			{
			  $this->session->set_flashdata('error', "There was a Problem adding the user");
			  redirect('systems/Dashboard/add_admin');
			}
		}
          
 
        }
    }


    public function add_user(){
		// $this->load->model('books_model');
		// $result=$this->books_model->index();
		// $data=array('allbooks'=>$result);

		    $this->load->model('User');
			$result=$this->User->index();
			foreach($result as $re){
          	$userdata['account_type'] = @$re['account_type'];
          	$school_id['school_id'] = @$re['school_id'];

          }
		    $userdata['account_type'] = @$re['account_type'];
		    $school_id['school_id'] = @$re['school_id'];

		// $this->load->view("back/books",$data);
        $this->load->view('sys_admin/adduser',$school_id);

	}

	public function adduser(){	
        $this->form_validation->set_rules('firstname', 'firstname', 'trim|required|min_length[3]|max_length[32]');
        $this->form_validation->set_rules('lastname', 'lastname', 'trim|required|min_length[3]|max_length[32]');
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[6]');
         $this->form_validation->set_rules('account_type', 'account_type', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required|is_unique[admins.email]');
       $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[password]');
       
        if ($this->form_validation->run() == FALSE) {
            $this->add_user();
        } else {
        $firstname = Null;
		$lastname = Null;
		$email = Null;
		$password = Null;
		$school_id=Null;
		$status = Null;
		$password = Null;
		$account_type =Null;

		extract($_POST);
		$param['firstname']=$firstname;
		$param['lastname']=$lastname;
		$param['password']=$password;
		$param['email']=$email;
		$param['school_id']=$school_id;
		$param['password']=$password;
		$param['account_type']=$account_type;
		$param['status']=$status;

		if(isset($email)){
			$this->load->model('System');
			$check=$this->System->adduser($param);
			$this->add_user();

			if($check==true)
			{
			  $this->session->set_flashdata('true', 'User was added successfully');
			   redirect('systems/Dashboard/add_user');
			}
			else
			{
			  $this->session->set_flashdata('error', "There was a Problem adding the user");
			  redirect('systems/Dashboard/add_user');
			}
		}
          
 
        }
    }

// users methods
 public function get_users($x){
	$this->load->model('User');
	$result=$this->User->get_users($x);
	// print_r($result);
	$data=array('userslist'=>$result);
	$this->load->view("sys_admin/getusers",$data);
 }

// Getting, searching, paginating, and displaying users 
public function userRecords($rowno=0){
	$this->load->model('User');
	$result=$this->User->index();
	foreach($result as $re){
    $userdata['account_type'] = @$re['account_type'];
    $school_id['school_id'] = @$re['school_id'];

    }
    $school_id['school_id'] = @$re['school_id'];
    foreach ($school_id as $obj) {
   		$obj; 
}

    // Search text
    $search_text = "";
    if($this->input->post('submit') != NULL ){
      $search_text = $this->input->post('search');
      $this->session->set_userdata(array("search"=>$search_text));
    }else{
      if($this->session->userdata('search') != NULL){
        $search_text = $this->session->userdata('search');
      }
    }

    // Row per page
    $rowperpage = 16;

    // Row position
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }
 
    // All records count
    $allcount = $this->User->getrecordCount($search_text);

    // Get records
    $users_record = $this->User->getuserData($rowno,$rowperpage,$search_text,$obj);
 
    // Pagination Configuration
    $config['base_url'] = base_url().'systems/Dashboard/userRecords';
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
    $this->load->view("sys_admin/getusers",$data+$school_id);

  }
  // end

 public function delete_user($id)
{	
	$result=$this->User->index();
	foreach($result as $re){
    $school_id['school_id'] = @$re['school_id'];
   $this->load->model('System');
}
   // Pass the $id to the row_delete() method
   $this->System->delete_record($id,'users');
   $this->session->set_flashdata('Success', "The user was removed Successfully");
   redirect('systems/Dashboard/get_users/'.$school_id); 
}
 // end  of user methods


// Adding uploading pdfs book with details to the system
	public function addbook(){
		$this->form_validation->set_rules('book_title', 'book_title','trim|required|min_length[12]|max_length[128]');
        $this->form_validation->set_rules('book_author', 'book_author','trim|required|min_length[4]|max_length[64]');
        $this->form_validation->set_rules('book_category', 'book_category', 'trim|required');
        $this->form_validation->set_rules('publisher_id', 'book_category', 'trim|required');
        $this->form_validation->set_rules('book_image', 'book_image', 'trim');
        $this->form_validation->set_rules('book', 'book', 'trim');
        $this->form_validation->set_rules('book_isbn', 'book_isbn', 'trim|required|min_length[4]|max_length[32]|is_unique[books.book_isbn]');
        $this->form_validation->set_rules('description', 'description', 'trim|max_length[512]');
     

        if ($this->form_validation->run() == FALSE) {
            $this->add_book();
        } else {

        $book_title = Null;
        $first_name = Null;
		$last_name = Null;
		$book_author = Null;
		$book_category = Null;
		$publisher_id = Null;
		$book_path = Null;
		$book_isbn = Null;
		$description = Null;
		
				$config['upload_path']          = './assets/books/';
                $config['allowed_types']        = 'gif|jpg|png|pdf';
                // $config['max_size']             = 100;
                $config['encrypt_name'] = true;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('book'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        // $this->load->view('upload_form', $error);
                        print_r($error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $info = $this->upload->data();
                        // $this->load->view('upload_success', $data);
                          // print_r($data);
                          // echo $book_path = base_url("assets/books".'/'.$data['file_name']);
                        $book_path = $info['file_name'];
                }

		extract($_POST);
		$param['book_title']=$book_title;
		$param['book_author']=$book_author;
		$param['book_category']=$book_category;
		$param['publisher_id']=$publisher_id;
		$param['book_isbn']=$book_isbn;
		$param['description']=$description;
		// $param['book_image']=$cover_path;
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
			  $this->session->set_flashdata('true', 'The Book was added successfully, Add the Book Cover');
			   redirect('systems/dashboard/book_view/'.$book_isbn);
			}
			else
			{
			  $this->session->set_flashdata('error', "There was a Problem adding the book");
			  // redirect('systems/Dashboard/add_book');
			}
		}
          
  
    	}
	}

// view book details after uploading book
	function book_view($x){
		$data['condition']=array('book_isbn'=>$x);
		$this->load->model('System');
		$result=$this->System->book_info($data);
		foreach($result as $re){
		$data=array('index'=>$re);
		$this->load->view('sys_admin/addcover',$data);
	}

	}
// add book cover after book after uploading
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

	
		$config['upload_path']  = './assets/bookcovers/';
        $config['allowed_types']        = 'gif|jpg|png|pdf';
                // $config['max_size']             = 100;
        $config['encrypt_name'] = true;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('book_image'))
        {
         $error = array('error' => $this->upload->display_errors());

                        // $this->load->view('upload_form', $error);
            print_r($error);
         }
        else
        {
        $data = array('upload_data' => $this->upload->data());
        $info = $this->upload->data();
        // $this->load->view('upload_success', $data);
        // print_r($data);
        $cover_path = base_url("assets/bookcovers".'/'.$info['file_name']);

        }


		extract($_POST);
		$param['book_title']=$book_title;
		$param['book_author']=$book_author;
		$param['book_category']=$book_category;
		$param['publisher_id']=$publisher_id;
		$param['book_isbn']=$book_isbn;
		$param['description']=$description;
		$param['book_image']=$cover_path;

		if(isset($book_isbn)){
			$this->load->model('System');
			$check=$this->System->add_cover($param);
			// $result=$this->System->check_exist_payment($param);
			// $data=array('index'=>$result);
		 //    print_r($data);
			$this->add_book();

			if($check==true)
			{
			  $this->session->set_flashdata('true', 'Book Cover was added successfully');
			   redirect('systems/dashboard/book_view/'.$book_isbn);
			}
			else
			{
			  $this->session->set_flashdata('error', "There was a Problem adding the book cover");
			  redirect('systems/Dashboard/add_book'.$book_isbn);
			}
		}
	}
}

public function book_details($x){
	$data['condition']=array('book_isbn'=>$x);
		$this->load->model('System');
		$result=$this->System->book_info($data);
		foreach($result as $re){
		$data=array('index'=>$re);
		$this->load->view('sys_admin/edit_book_details',$data);
	}
}

public function edit_book_details(){
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

	
		$config['upload_path']  = './assets/bookcovers/';
        $config['allowed_types']        = 'gif|jpg|png|pdf';
                // $config['max_size']             = 100;
        $config['encrypt_name'] = true;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('book_image'))
        {
         $error = array('error' => $this->upload->display_errors());

            // $this->load->view('upload_form', $error);
         	$this->session->set_flashdata('true', $error);

         }
        else
        {
        $data = array('upload_data' => $this->upload->data());
        $info = $this->upload->data();
        // $this->load->view('upload_success', $data);
        // print_r($data);
        $cover_path = base_url("assets/bookcovers".'/'.$info['file_name']);

        }

		extract($_POST);
		$param['book_title']=$book_title;
		$param['book_author']=$book_author;
		$param['book_category']=$book_category;
		$param['publisher_id']=$publisher_id;
		$param['book_isbn']=$book_isbn;
		$param['description']=$description;
		$param['book_image']=$cover_path;

		if(isset($book_isbn)){
			$this->load->model('System');
			$check=$this->System->update_book($param);
			
			if($check==true)
			{
			  $this->session->set_flashdata('true', 'Book Cover was added successfully');
			   redirect('systems/dashboard/book_details/'.$book_isbn);
			}
			else
			{
			  $this->session->set_flashdata('error', "There was a Problem adding the book cover");
			  redirect('systems/Dashboard/book_details'.$book_isbn);
			}
		}
	}
}

// deleting book details from the database
function delete_book($id)
{
   $this->load->model('System');
   // Pass the $id to the row_delete() method
   $this->System->delete_row($id,'books');
   $this->session->set_flashdata('Success', "The book was Deleted Successfully");
   redirect('systems/Dashboard'); 
}
// End 


// Getting, searching, paginating, and displaying books 
public function loadRecord($rowno=0){
	$this->load->model('System');

    // Search text
    $search_text = "";
    if($this->input->post('submit') != NULL ){
      $search_text = $this->input->post('search');
      $this->session->set_userdata(array("search"=>$search_text));
    }else{
      if($this->session->userdata('search') != NULL){
        $search_text = $this->session->userdata('search');
      }
    }

    // Row per page
    $rowperpage = 16;

    // Row position
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }
 
    // All records count
    $allcount = $this->System->getrecordCount($search_text);

    // Get records
    $users_record = $this->System->getData($rowno,$rowperpage,$search_text);
 
    // Pagination Configuration
    $config['base_url'] = base_url().'systems/Dashboard/loadRecord';
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
    $this->load->view('sys_admin/dashboard', $data);
 
  }
  // end


}