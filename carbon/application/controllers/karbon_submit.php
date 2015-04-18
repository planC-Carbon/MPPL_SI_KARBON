<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Karbon_submit extends CI_Controller{

 	function __construct()
	{
		parent::__construct();
	}
	
	function submit()
	{	$this->load->view('templates/header');
	$this->load->view('templates/footer');
		$this->load->helper('form');
		$this->load->helper('html');
		$this->load->model('karbon_model');
		
		if($this->input->post('mysubmit'))
		{
			$this->karbon_model->rumus();	
			$this->karbon_model->entry_insert();	
		}
	}
}
?>