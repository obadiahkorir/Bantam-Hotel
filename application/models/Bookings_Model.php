<?php
class Bookings_model extends CI_Model 
{
	/*Insert*/
	function saverecords($first_name,$last_name,$email)
	{

	$query="insert into bookings values('','$first_name','$last_name','$email')";
	$this->db->query($query);
	}
	  /*View*/
	function display_records()
	{
	$query=$this->db->query("select * from bookings");
	return $query->result();
	}
	function displayrecordsById($id)
	{
	$query=$this->db->query("select * from bookings where bookingsid='".$id."'");
	return $query->result();
	}
	/*Update*/
	function update_records($first_name,$last_name,$email,$bookingsid)
	{
	$query=$this->db->query("update bookings SET first_name='$first_name',last_name='$last_name',email='$email' where bookingsid='$bookingsid");
	}
}