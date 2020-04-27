 
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Register_Model extends CI_Model {
 public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->database();
        $this->load->model('Users_model');
    }

    function index()
    {
        // set form validation rules
        $this->form_validation->set_rules('username', 'Username', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
        $this->form_validation->set_rules('mobile', 'Mobile Number', 'trim|required|alpha|min_length[10]|max_length[30]|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        //$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required');

        // submit
        if ($this->form_validation->run() == FALSE)
        {
            // fails
            $this->load->view('register');
        }
        else
        {
            //insert user details into db
            $data = array(
                'name' => $this->input->post('username'),
                'mobile' => $this->input->post('mobile'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            );

            if ($this->Users_model->insert_user($data))
            {
               
                 $this->load->view('login');
            }
            else
            {
                // error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
                redirect('Register/index');
            }
        }
    }
}
?>