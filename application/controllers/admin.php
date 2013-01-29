<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		
		//loads admin model
		$this->load->model('admin_model');
		
		//loads post model
		$this->load->model('post_model');
	}

//function runs once admin is logged in
	public function index(){
	  //setting variable to session userdata
	  $admin['logged_in'] = $this->session->userdata('logged_in');
	  
	  //if session is empty admin will be redirected back to login form
	  if(empty($admin['logged_in'])){
  	  redirect('login/');
	  }
	  
	  if($query = $this->post_model->get_posts())
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
	
//function runs when admin clicks on continue reading	
	public function post_response()
	{
	  //gets users' posts from model
	  $data = array();
	  if($query = $this->admin_model->get_single_post())
	  {
  	  $data['posts'] = $query;
	  }
	  
  	//loading admin header view
  	$this->load->view('admin_header_view');
  	
  	//loading admin response view
  	$this->load->view('admin_response_view', $data);
  	
  	//loading footer view
		$this->load->view('footer_view');
	}
	
//function runs when admin click log out	
	public function log_out(){
	  //removes session once admin clicks log out
  	$this->session->sess_destroy();
  	
  	//sends admin back to login form
  	redirect('login/');
	}
}