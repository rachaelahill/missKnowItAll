<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('post_model');
	}

//function runs main page
	public function index()
	{
  	//loading main header view
		$this->load->view('header_view');
		
		//loading main blog view
		$this->load->view('blog_view');
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