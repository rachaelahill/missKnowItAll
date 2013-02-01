<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		
		//loads admin model
		$this->load->model('admin_model');
		
		//loads post model
		$this->load->model('post_model');
	}

//function runs main page once admin is logged in
	public function index(){
	   //setting error page header to 404
	   $this->output->set_status_header('404');
	   
	  //setting session to variable 
	  $admin['logged_in'] = $this->session->userdata('logged_in');
	  
	  //if session is empty than error page will show main headers else it will show admin headers
    if(empty($admin['logged_in'])){ 
      //loading main header view
    	$this->load->view('header_view');
    	
    	//loading error 404 view
    	$this->load->view('error404_view');
    	
    	//loading footer view
  		$this->load->view('footer_view');
    }else{
      //loading admin header view
  	  $this->load->view('admin_header_view');
  	  
  	  //loading error 404 view
  	  $this->load->view('error404_view');
  	  
    	//loading footer view
  		$this->load->view('footer_view');
    }
	}
}