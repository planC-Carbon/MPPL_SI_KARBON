<?php
class Registrasi extends CI_Controller{

 	function __construct()
	{
		parent::__construct();
	}
	
 	function input()
	{	$this->load->view('templates/header');
	$this->load->view('templates/footer');
		$this->load->helper('form');
		$this->load->helper('html');
		$this->load->model('registrasi_model');
		
		if($this->input->post('mysubmit'))
		{
				$this->load->view('templates/header');
	$this->load->view('templates/footer');
			$this->registrasi_model->entry_insert();
			$this->load->view('homea');
		}
		$data = $this->registrasi_model->general();
  		$this->load->view('registrasi_input',$data);
	}
}
?>