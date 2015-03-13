<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Verifyregistrasi extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('registrasi_model','',TRUE);
 }

 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');
		
		$this->form_validation->set_rules('form_input($fnia)', 'Nomor Induk Anggota', 'required');
   $this->form_validation->set_rules('form_input($fnama)', 'Nama', 'required');
   $this->form_validation->set_rules('form_input($femail)', 'Email', 'required');
   $this->form_validation->set_rules('form_input($fusername)', 'Username', 'required');
   $this->form_validation->set_rules('form_input($fpassword)', 'password', 'required');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     //$data = $this->registrasi_model->general();
	// $this->load->view('registrasi_input');
   }
   else
   {
     //Go to private area
	 redirect('registrasi_submit/submit', 'refresh');
   }

 }

 /*function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');

   //query the database
   $result = $this->user->login($username, $password);

   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'ID_Anggota' => $row->ID_Anggota,
         'username' => $row->username
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }*/
}
?>