<?php
class Customer_model extends CI_Model 
{
function __construct() {
parent::__construct();
}
function form_insert($data){
// Inserting in Table(students) of Database(college)
$this->db->insert('customers', $data);
 }
 function displayrecords()
	{
	$query=$this->db->query("select * from customers");
	return $query->result();
	}
 }
?>