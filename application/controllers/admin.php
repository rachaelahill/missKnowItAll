<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		//loads admin model
		$this->load->model('admin_model');
	}
	
	public function index(){
	  //loading admin header view
	  $this->load->view('admin_header_view');
	  
	  //loading admin login view
	  $this->load->view('admin_login_view');
	  
  	//loading footer view
		$this->load->view('footer_view');
	}
	
	public function admin_dashboard(){
  	//loading admin header view
	  $this->load->view('admin_header_view');
	  
	  //loading admin dashboard view
	  $this->load->view('admin_dashboard_view');
	  
	  //loading footer view
		$this->load->view('footer_view');
	}

}