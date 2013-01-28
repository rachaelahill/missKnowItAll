<?php class admin_model extends CI_Model{

  public function __construct(){
    parent::__construct();
  }  
  
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
  
  public function add_admin(){
    $data = array(
      'username' => $this->input->post('username'),
      'pass' => md5($this->input->post('pass'))
    );
    
    $query = $this->db->insert('adminLogin', $data);
    return $query;
  }

}