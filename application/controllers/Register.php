<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
  public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Users_model');
        $this->load->library('session');
        $this->load->library('form_validation');
  }
  // 
  // Dashboard
  public function index()
  {
   $this->load->view('register');
      
  }
   public function register_user(){
      $user=array(
      'user_name'=>$this->input->post('user_name'),
      'email'=>$this->input->post('email'),
      'password'=>md5($this->input->post('password')),
      'mobile'=>$this->input->post('mobile')
        );
        print_r($user);
 
$email_check=$this->Users_model->email_check($user['email']);
if($email_check){
  $this->Users_model->register_user($user);
  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
  redirect('Users/login');
 
}
else{
 
  $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
  redirect('Users');
 
 
}
 
}
 
public function login_view(){
 
$this->load->view("login");
 
}
function login_user(){ 
  $user_login=array(
  'user_email'=>$this->input->post('user_email'),
  'user_password'=>md5($this->input->post('user_password'))
 
    ); 
//$user_login['user_email'],$user_login['user_password']
    $data['users']=$this->user_model->login_user();
    //  if($data)
      //{
      
        $this->session->set_userdata('user_id',$data['users'][0]['user_id']);
        $this->session->set_userdata('user_email',$data['users'][0]['user_email']);
        $this->session->set_userdata('user_name',$data['users'][0]['user_name']);
        $this->session->set_userdata('user_age',$data['users'][0]['user_age']);
        $this->session->set_userdata('user_mobile',$data['users'][0]['user_mobile']);
    echo $this->session->set_userdata('user_id'); 
        $this->load->view('user_profile.php',$data);
 
    //  }
    //  else{
     //   $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
     //   $this->load->view("login.php");
 
     // }
 
 
}
 
function user_profile(){
 
$this->load->view('user_profile.php');
 
}
public function user_logout(){
  $this->session->sess_destroy();
  redirect('login', 'refresh');
}
 
}
 
?>