<?php class admin_model extends CI_Model{

  public function __construct(){
    parent::__construct();
  }  
  
//function checks if admin is in db   
  public function check_login()
  {
    $salt = 'codeMonkey';
    
    $this->db->where('username', $this->input->post('username'));
    $this->db->where('pass', md5($salt.$this->input->post('pass')));
    $query = $this->db->get('adminLogin');
    
    if($query->num_rows == 1)
    {
      return true;
    }
  }

//function checks if response exists n db     
   public function check_response()
  {
    $this->db->where('respTxt', $this->input->post('postInpt'));
    $query = $this->db->get('adminPosts');
    
    if($query->num_rows == 1)
    {
      return true;
    }
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
  
//function inserts admin's response into db and updates users' response column to yes  
  public function insert_resp($data){
  	$this->db->insert('adminPosts', $data);
  	$this->db->where('userPosts.id', $this->input->post('userId'));
  	$respCol = array(
  	  'response' => 'yes',
  	);
  	$this->db->update('userPosts', $respCol);
  	return;
	}

//function runs when admin click submit btn on edit resp form	
	public function update_admin_resp($data){
  	$this->db->where('adminPosts.userId', $this->input->post('userId'));
    $this->db->update('adminPosts', $data);
    return;
	}
	
//function deletes users' unanswered post from db by id
  public function delete_unanswered_post(){
    $this->db->where('userPosts.id', $this->uri->segment(3));
    $this->db->delete('userPosts');
  }

}