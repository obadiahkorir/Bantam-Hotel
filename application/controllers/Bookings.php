<?php 
class Bookings extends CI_Controller 
{
	public function __construct()
	{
	/*call CodeIgniter's default Constructor*/
	parent::__construct();
	
	/*load database libray manually*/
	$this->load->database();
	
	/*load Model*/
	$this->load->model('Bookings_model');
	}
        /*Insert*/
	public function Bookings()
	{
		/*load registration view form*/
		$this->load->view('addBooking');
	
		/*Check submit button */
		if($this->input->post('savebookings'))
		{
		$first_name=$this->input->post('first_name');
		$last_name=$this->input->post('last_name');
		$email=$this->input->post('email');
		$this->Bookings_model->saverecords($first_name,$last_name,$email);	
		echo "Records Saved Successfully";
		//Loading View
       //  $this->load->view('allBooking','refresh');
		}
	}
	 /*Display Data*/
	public function DisplayData()
	{
	$result['data']=$this->Bookings_model->display_records();
	$this->load->view('allBooking',$result);
	}
	 /*	Updata Data*/
   public function UpdateData()
	{
	$id=$this->input->get('bookingsid');
	$result['data']=$this->Bookings_model->displayrecordsById($id);
	$this->load->view('updateBookings',$result);
	
		if($this->input->post('updatebookings'))
		{
		$first_name=$this->input->post('first_name');
		$last_name=$this->input->post('last_name');
		$email=$this->input->post('email');
		$this->Bookings_model->update_records($first_name,$last_name,$email,$id);
		echo "Data updated successfully !";
	}
}
}
?>