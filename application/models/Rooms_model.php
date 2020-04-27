<?php
class Rooms_model extends CI_Model 
{
function __construct() {

	parent::__construct();
	
}
function form_insert($data){

$this->db->insert('rooms', $data);
 }
 function displayrecords()
	{
	$query=$this->db->query("select * from rooms");
	return $query->result();
	}
 }
?>
}