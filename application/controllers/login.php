<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
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
	
	public function admin_login(){
  	$query = $this->admin_model->check_login();
  	
  	if($query)
  	{
    	$data = array(
    	  'username' => $this->input->post('username'),
    	  'is_logged_in' => true
    	);
    	$this->session->set_userdata($data);
    	redirect('admin/');
  	}else{
    	$this->index();
  	}
	}
	
	public function signup(){
	 $this->load->view('admin_header_view');
	 $this->load->view('signup');
	 $this->load->view('footer_view');
	}
	
	public function create_admin(){
  	if($this->admin_model->add_admin())
  	{
  	  redirect('admin/');
    }else{
      $this->signup();
    }
  	
	}
	
}