<?php class post_model extends CI_Model{

  public function __construct(){
    parent::__construct();
  }  

//function gets users posts from db  
  public function get_posts(){
    $query = $this->db->get('userPosts');
    return $query->result();
  }
 
//function inserts users' post into db  
  public function insert_post($data){
  	$this->db->insert('userPosts', $data);
  	return;
	}
}