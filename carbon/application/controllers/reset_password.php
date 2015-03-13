<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reset_password extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {
   $this->load->helper(array('form'));
   $this->load->view('reset_password_view');
	$this->load->model('registrasi_model');
	if($this->input->post('mysubmit'))
		{
			$this->registrasi_model->entry_update();
		}
 }

}

?>
