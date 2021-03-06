
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Users_model extends CI_Model {
// declare private variable
  private $_userID;
  private $_name;
  private $_userName;
  private $_email;
  private $_password;
  private $_status;
  
  public function setUserID($userID) {
    $this->_userID = $userID;
  }  
  public function setEmail($email) {
    $this->_email = $email;
  }
  public function setPassword($password) {
    $this->_password = $password;
  }       
 
  public function getUserInfo() {
    $this->db->select(array('u.user_id', 'u.name', 'u.email'));
    $this->db->from('user as u');
    $this->db->where('u.user_id', $this->_userID);
    $query = $this->db->get();
    return $query->row_array();
  } 
  function login() {
    $this -> db -> select('user_id, name, email');
    $this -> db -> from('user');
    $this -> db -> where('email', $this->_email);
    $this -> db -> where('password', $this->_password);
    $this -> db -> limit(1);
    $query = $this -> db -> get();
    if($query -> num_rows() == 1) {
      return $query->result();
    } else {
      return false;
    }
  }

public function register_user($user){
$this->db->insert('user', $user);
 
}
 
public function login_user(){
 //$email,$pass
  $this->db->select('*');
  $this->db->from('user');
 // $this->db->where('user_email',$email);
 // $this->db->where('user_password',$pass);
 
  if($query=$this->db->get())
  {
      return $query->result_array();
  }
  else{
    return false;
  }
 
 
}
public function email_check($email){
  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('email',$email);
  $query=$this->db->get();
  if($query->num_rows()>0){
    return false;
  }else{
    return true;
  }
 
}

}
?>