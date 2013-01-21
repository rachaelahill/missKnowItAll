<?php class post_model extends CI_Model{

  public function __construct(){
    parent::__construct();
  }  
  
  public function insert_post($data){
  	$this->db->insert('userPosts', $data);
  	return;
	}
}