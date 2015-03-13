<?php
class Event_model extends CI_Model{
	
 	function __construct()
	{
  		parent::__construct();				
 	}
	
	function event_getall()
	{
		$this->load->database();
		$query = $this->db->get('event');
		return $query->result();
	}
}
?>