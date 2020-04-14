<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
	public function addCustomers()
	{
		$this->load->view('addCustomer');
	}
	public function allRooms()
	{
		$this->load->view('allRooms');
	}
	public function addRooms()
	{
		$this->load->view('addRooms');
	}
	public function allStaff()
	{
		$this->load->view('allStaff');
	}
	public function addStaff()
	{
		$this->load->view('addStaff');
	}
	public function allEmployees()
	{
		$this->load->view('allEmployees');
	}
	public function allLeaves()
	{
		$this->load->view('allLeaves');
	}
}