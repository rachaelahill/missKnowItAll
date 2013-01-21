<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		//loads post model
		$this->load->model('post_model');
	}

//function runs main page
	public function index()
	{
	  //gets users' posts from model
	  $data = array();
	  if($query = $this->post_model->get_posts())
	  {
  	  $data['posts'] = $query;
	  }
	 
  	//loading main header view
		$this->load->view('header_view');
		
		//loading main blog view with users' posts
		$this->load->view('blog_view', $data);
	}

//function runs when user clicks on Ask Advice	
	public function user_posting()
	{
	  //loading main header view
  	$this->load->view('header_view');
  	
  	//loading user posting view
  	$this->load->view('posting_view');
	}

//function runs when user clicks on continue reading	
	public function post_detail()
	{
  	//loading main header view
  	$this->load->view('header_view');
  	
  	//loading post detail view
  	$this->load->view('postDetail_view');
	}
	
//function runs when user submits post
	public function create_post(){
	  $data = array(
	    'titleName' => $this->input->post('titleInpt'),
	    'postTxt' => $this->input->post('postInpt'),
	    'userSign' => $this->input->post('signInpt'),
	    'postDate' => time()
	  );
  	$this->post_model->insert_post($data);
  	$this->index();
	}		
}