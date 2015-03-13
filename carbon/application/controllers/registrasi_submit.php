<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registrasi_submit extends CI_Controller{

 	function __construct()
	{
		parent::__construct();
	}
	
	function submit()
	{
		$this->load->helper('form');
		$this->load->helper('html');
		$this->load->model('registrasi_model');
		
		if($this->input->post('mysubmit'))
		{
			$this->registrasi_model->entry_insert();	
		}
	}
}
?>