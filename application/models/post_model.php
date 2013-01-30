<?php class post_model extends CI_Model{

  public function __construct(){
    parent::__construct();
  }  

//function gets users posts from db where response is yes
  public function get_posts(){
    $this->db->where('response', 'yes')
    ->order_by('postDate', 'desc');
    $query = $this->db->get('userPosts');
    return $query->result();
  }

//function gets post clicked on by ID
  public function get_single_post(){
    $this->db->where('id', $this->uri->segment(3));
    $query = $this->db->get('userPosts');
    return $query->result();
  }  
 
//function inserts users' post into db  
  public function insert_post($data){
  	$this->db->insert('userPosts', $data);
  	return;
	}
}