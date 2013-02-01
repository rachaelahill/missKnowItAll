<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		
		//loads post model
		$this->load->model('post_model');
		
		//loads admin model
		$this->load->model('admin_model');
	}

//function runs main page
	public function index()
	{
	  //gets users' posts from model
	  if($query = $this->post_model->get_posts())
	  {
  	  $data['posts'] = $query;
	  }
	 
  	//loading main header view
		$this->load->view('header_view');
		
		//loading main blog view with users' posts
		$this->load->view('blog_view', $data);
		
		//loading footer view
		$this->load->view('footer_view');
	}

//function runs when user clicks on Ask Advice	
	public function user_posting()
	{
	  //loading main header view
  	$this->load->view('header_view');
  	
  	//loading user posting view
  	$this->load->view('posting_view');
  	
  	//loading footer view
		$this->load->view('footer_view');
	}

//function runs when user clicks on continue reading	
	public function post_detail()
	{
	  //gets users' posts from model
	  if($query = $this->post_model->get_single_post())
	  {
  	  $data['posts'] = $query;
	  }
	  
	  //gets admin's response from admin model
	  if($query = $this->admin_model->get_admin_response())
	  {
  	  $data['response'] = $query;
	  }
	  
	  //setting session to varibale admin
	  $admin['logged_in'] = $this->session->userdata('logged_in');
	  
	  //if admin is not logged in it will load main user header, else it will load admin header
	  if(empty($admin['logged_in'])){
	  
    	//loading main header view
    	$this->load->view('header_view');
    	
    }else{
    
      //loading admin header view
      $this->load->view('admin_header_view');
    }
  	
  	//loading post detail view
  	$this->load->view('postDetail_view', $data);
  	
  	//loading footer view
		$this->load->view('footer_view');
	}
	
//function runs when user submits post
	public function create_post(){
	  $data = array(
	    'titleName' => $this->input->post('titleInpt'),
	    'postTxt' => $this->input->post('postInpt'),
	    'userSign' => $this->input->post('signInpt'),
	    'postDate' => time()
	  );
	  
	  //if users' input fields has text model function will run else send 404 error
	  if($this->input->post('titleInpt') != '' && $this->input->post('postInpt') != '' && $this->input->post('signInpt') != '')
	  {
  	  //sending array to post model to insert post function
    	$this->post_model->insert_post($data);
    	
    	//runs controller index
    	$this->index();
	  }else{
	    //runs error controller
  	  redirect('error/');
	  }
	}
}