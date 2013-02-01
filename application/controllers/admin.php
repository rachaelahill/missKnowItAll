<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		
		//runs the check session function
		$this->check_session();
		
		//loads admin model
		$this->load->model('admin_model');
		
		//loads post model
		$this->load->model('post_model');
	}

//function runs main page once admin is logged in
	public function index(){
	  
	  //gets user's post detail from post model
	  if($query = $this->admin_model->get_unanswered_posts())
	  {
  	  $data['posts'] = $query;
	  }
	  	  
	  //loading admin header view
	  $this->load->view('admin_header_view');
	  
	  //loading admin login view
	  $this->load->view('admin_dashboard_view', $data);
	  
  	//loading footer view
		$this->load->view('footer_view');
	}
	
//function runs when answered link is clicked
	public function answered_posts(){
	  //gets user's post detail from post model
	  if($query = $this->admin_model->get_answered_posts())
	  {
  	  $data['posts'] = $query;
	  }
	  	  
	  //loading admin header view
	  $this->load->view('admin_header_view');
	  
	  //loading admin login view
	  $this->load->view('admin_dashboard_view', $data);
	  
  	//loading footer view
		$this->load->view('footer_view');
	}
	
//function runs when admin submits response
	public function create_resp(){
	  $data = array(
	    'respTxt' => $this->input->post('postInpt'),
	    'userId' => $this->input->post('userId'),
	    'respDate' => time()
	  );
	  
	  //sending array to admin model to insert resp function
  	$this->admin_model->insert_resp($data);
  	
  	//runs controller index
  	$this->index();
	}

//function runs when admin clicks on edit resp
	public function edit_resp(){
	  $data = array(
	   'respTxt' => $this->input->post('postInpt'),
	   'respDate' => time()
	  );
	  
	  //sending array to admin model into update admin resp function
  	$this->admin_model->update_admin_resp($data);
  	
  	//runs answered posts function
  	$this->answered_posts();
	}		
	
//function runs when admin clicks on remove post 	
	public function delete_post(){
	
	  //loading admin model to run delete unanswered post function 
  	$this->admin_model->delete_unanswered_post();
  	
  	//runs admin index
  	$this->index();
	}	
	
//function runs when admin click log out	
	public function log_out(){
	  //removes session once admin clicks log out
  	$this->session->sess_destroy();
  	
  	//sends admin back to login form
  	redirect('login/');
	}
	
//function runs beginning of controller before index function to check if session exists	
	public function check_session(){
  	//setting variable to session userdata
	  $admin['logged_in'] = $this->session->userdata('logged_in');
	  
	  //if session is empty admin will be redirected back to login form
	  if(empty($admin['logged_in'])){
  	  redirect('login/');
	  }
	}
}