<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

		public function __construct(){
        parent::__construct();
  		$this->load->helper('url');
  	 	$this->load->model('user_model');
        $this->load->library('session');
}
	public function index()
	{
		$this->load->view('dashboard');
	}
	public function allBookings()
	{
		$this->load->view('allBooking');
	}
	public function addBookings()
	{
		$this->load->view('addBooking');
	}
   public function allCustomers()
	{
		$this->load->view('allCustomers');
	}
}