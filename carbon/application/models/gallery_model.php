<?php
class Gallery_model extends CI_Model{
	
 	function __construct()
	{
  		parent::__construct();				
 	}
	
	function gallery_getall()
	{
		$this->load->database();
		$query = $this->db->get('hewan');
		return $query->result();
	}
	
	function get1($ID_Hewan)
	{
		$this->load->database();
		$query1 = $this->db->get_where('hewan',array('ID_Hewan'=>$ID_Hewan));
		return $query1->row_array();	
 	}
	
	function get2($ID_Hewan)
	{
		$this->load->database();
		$query2 = $this->db->get_where('hewan',array('ID_Hewan'=>$ID_Hewan));
		return $query2->row_array();	
 	}
	
	function get3($ID_Hewan)
	{
		$this->load->database();
		$query3 = $this->db->get_where('hewan',array('ID_Hewan'=>$ID_Hewan));
		return $query3->row_array();	
 	}
	
	function get4($ID_Hewan)
	{
		$this->load->database();
		$query4 = $this->db->get_where('hewan',array('ID_Hewan'=>$ID_Hewan));
		return $query4->row_array();	
 	}
}
?>