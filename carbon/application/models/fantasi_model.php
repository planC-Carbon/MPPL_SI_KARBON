<?php
class Fantasi_model extends CI_Model{
	
 	function __construct()
	{
  		parent::__construct();				
 	}
	
	function fantasi_getall()
	{
		$this->load->database();
		$query = $this->db->get('fantasi');
		return $query->result();
	}
	
	function get1($id_fantasi)
	{
		$this->load->database();
		$query1 = $this->db->get_where('fantasi',array('id_fantasi'=>$id_fantasi));
		return $query1->row_array();	
 	}
	
	function get2($id_fantasi)
	{
		$this->load->database();
		$query2 = $this->db->get_where('fantasi',array('id_fantasi'=>$id_fantasi));
		return $query2->row_array();	
 	}
	
	function get3($id_fantasi)
	{
		$this->load->database();
		$query3 = $this->db->get_where('fantasi',array('id_fantasi'=>$id_fantasi));
		return $query3->row_array();	
 	}
	
	function get4($id_fantasi)
	{
		$this->load->database();
		$query4 = $this->db->get_where('fantasi',array('id_fantasi'=>$id_fantasi));
		return $query4->row_array();	
 	}
}
?>