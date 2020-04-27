<?php 
class Rooms extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url'); 
	    $this->load->library('form_validation');    
        $this->load->helper('form');
		$this->load->database();
		$this->load->model('Rooms_model');
	}
function index() {
//Including validation library
$this->load->library('form_validation');

$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

//Validating Name Field
$this->form_validation->set_rules('room_name', 'Room Name', 'required|min_length[5]|max_length[15]');
//Validating Name Field
$this->form_validation->set_rules('room_type', 'Room Type', 'required|min_length[5]|max_length[15]');

//Validating Email Field
$this->form_validation->set_rules('room_capacity', 'Room Capacity','required');

//Valdiating Room Cost
$this->form_validation->set_rules('rent', 'Room Cost','required');


//Validating Mobile no. Field
$this->form_validation->set_rules('room_no', 'Room Number', 'required');

//Validating Address Field
//$this->form_validation->set_rules('daddress', 'Address', 'required|min_length[10]|max_length[50]');
if ($this->form_validation->run() == FALSE) {
$this->load->view('addRooms');
}
else {
//Setting values for tabel columns
$data = array(
'Room_Name' => $this->input->post('room_name'),
'Room_Capacity' => $this->input->post('room_capacity'),
'Room_No' => $this->input->post('room_no'),
'Room_Type' => $this->input->post('room_type'),
'Rent' => $this->input->post('rent')
);

//Transfering data to Model
$this->Rooms_model->form_insert($data);
$data['message'] = 'Room Details has been Registered Successfully';
//Loading View
$this->load->view('addRooms', $data);
}

}
public function DisplayRooms()
	{
	$result['data']=$this->Rooms_model->displayrecords();
	$this->load->view('allRooms',$result);
	}
}