<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
	}
		
	public function index()
	{
  	//loading main header view
		$this->load->view('header_view');
		
		//loading main blog view
		$this->load->view('blog_view');
	}
}