<?php
	class Myassests extends CI_Controller
	{
		function index()
		{
			$this->load->helper('url');
			$this->load->view('templates/header');
			$this->load->view('content/content');
			$this->load->view('templates/footer');
		}j
	}
?>