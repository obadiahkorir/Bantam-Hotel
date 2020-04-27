<?php
class Customers extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url'); 
	    $this->load->library('form_validation');    
        $this->load->helper('form');
		$this->load->database();
		$this->load->model('Customer_model');
	}
function index() {
//Including validation library
$this->load->library('form_validation');

$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

//Validating Name Field
$this->form_validation->set_rules('first_name', 'First Name', 'required|min_length[5]|max_length[15]');
//Validating Name Field
$this->form_validation->set_rules('last_name', 'Last Name', 'required|min_length[5]|max_length[15]');

//Validating Email Field
$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

//Validating Mobile no. Field
$this->form_validation->set_rules('phone_number', 'Mobile No.', 'required|regex_match[/^[0-9]{10}$/]');

//Validating Address Field
//$this->form_validation->set_rules('daddress', 'Address', 'required|min_length[10]|max_length[50]');
if ($this->form_validation->run() == FALSE) {
$this->load->view('addCustomer');
}
else {
//Setting values for tabel columns
$data = array(
'First_Name' => $this->input->post('first_name'),
'Last_Name' => $this->input->post('last_name'),
'Email' => $this->input->post('email'),
'Phone_Number' => $this->input->post('phone_number'),
'Address' => $this->input->post('address'),
'DOB' => $this->input->post('dob')
);
//Transfering data to Model
$this->Customer_model->form_insert($data);
$data['message'] = 'Customer with the Give Details has been Registered Successfully';
//Loading View
$this->load->view('addCustomer', $data);
}

}
public function DisplayCustomers()
	{
	$result['data']=$this->Customer_model->displayrecords();
	$this->load->view('allCustomers',$result);
	}
}