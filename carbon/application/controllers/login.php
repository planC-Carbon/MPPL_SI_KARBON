<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {	$this->load->view('templates/header');
	$this->load->view('templates/footer');
   $this->load->helper(array('form'));
   $this->load->view('login_view');
 }

}

?>
