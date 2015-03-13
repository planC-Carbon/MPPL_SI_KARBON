<?php
class Event extends CI_Controller{

 	function __construct()
	{
		parent::__construct();
	}
	
 	function main()
	{
		$this->load->library('table');
		$this->load->helper('html');
		$this->load->model('event_model');
		$data['query'] = $this->event_model->reservasi_getall();
  		$this->load->view('event_main',$data);
 	}
}
?>