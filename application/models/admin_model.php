<?php class admin_model extends CI_Model{

  public function __construct(){
    parent::__construct();
  }  
  
//function checks if admin is in db   
  public function check_login()
  {
    $this->db->where('username', $this->input->post('username'));
    $this->db->where('pass', md5($this->input->post('pass')));
    $query = $this->db->get('adminLogin');
    
    if($query->num_rows == 1)
    {
      return true;
    }
  }
  
//function adds a new admin into db  
  public function add_admin(){
    $data = array(
      'username' => $this->input->post('username'),
      'pass' => md5($this->input->post('pass'))
    );
    
    $query = $this->db->insert('adminLogin', $data);
    return $query;
  }
  
//function gets users posts from db where response is yes
  public function get_unanswered_posts(){
    $this->db->where('response', 'no')
    ->order_by('postDate', 'desc');
    $query = $this->db->get('userPosts');
    return $query->result();
  }
  
//function gets users posts from db where response is yes
  public function get_answered_posts(){
    $this->db->where('response', 'yes')
    ->order_by('postDate', 'desc');
    $query = $this->db->get('userPosts');
    return $query->result();
  }
  
//function gets a user's post by ID when clicked on by admin
  public function get_admin_response(){
     $this->db->join('userPosts', 'adminPosts.userId = userPosts.id')
     ->where('userPosts.id', $this->uri->segment(3));
     $query = $this->db->get('adminPosts');
     return $query->result();
  } 
}