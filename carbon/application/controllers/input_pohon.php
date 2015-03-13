<?php
class Input_pohon extends CI_Controller{

 	function __construct()
	{
		parent::__construct();
	}
	
 	function input()
	{
		$this->load->helper('form');
		$this->load->helper('html');
		$this->load->model('pohon_model');
		
		if($this->input->post('mysubmit'))
		{
			$this->pohon_model->entry_insert();
			$this->load->view('homea');
		}
		$data = $this->pohon_model->general();
  		$this->load->view('pohon_input',$data);
	}
}
?>