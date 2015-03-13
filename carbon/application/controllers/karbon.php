<?php
class Karbon extends CI_Controller{

 	function __construct()
	{
		parent::__construct();
	}
	
 	function input()
	{
		$this->load->helper('form');
		$this->load->helper('html');
		$this->load->model('karbon_model');
		
		if($this->input->post('mysubmit'))
		{
			$this->karbon_model->entry_insert();
			$this->load->view('homea');
		}
		$data = $this->karbon_model->general();
  		$this->load->view('karbon_input',$data);
	}
}
?>