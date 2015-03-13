<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Verifykarbon extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('karbon_model','',TRUE);
 }

 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');
		
	 $this->form_validation->set_rules('form_input($ftinggi_pohon)', 'Tinggi Pohon', 'required');
   $this->form_validation->set_rules('form_input($fdiameter_pohon)', 'Diameter Pohon', 'required');
   $this->form_validation->set_rules('form_input($fsudut)', 'Sudut', 'required');
   $this->form_validation->set_rules('form_input($fjarak_pengamat)', 'Jarak Pengamat', 'required');
   $this->form_validation->set_rules('form_input($ftinggi_pengamat)', 'Tinggi Pengamat', 'required');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     //$data = $this->registrasi_model->general();
	 $this->load->view('karbon_input');
   }
   else
   {
     //Go to private area
	 redirect('karbon_submit/submit', 'refresh');
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