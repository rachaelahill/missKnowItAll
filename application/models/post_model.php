<?php class post_model extends CI_Model{

  public function __construct(){
    parent::__construct();
  }  
  
  public function insert_user_post(){
  	$data = $_POST;
  	$data['postDate'] = time();
  	$this->db->insert('userPosts', $data);
	}
}