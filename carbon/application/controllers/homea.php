<?php

class Homea extends CI_Controller {
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{	$this->load->view('templates/header');
	$this->load->view('templates/footer');
		$this->load->view('homea');
	}
	
	
}
?>