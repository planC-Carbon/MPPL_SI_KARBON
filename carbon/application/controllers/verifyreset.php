<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyReset extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('akun_user_update','',TRUE);
   $this->load->model('akun_user_update_2','',TRUE);
 }

 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');

   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|callback_check_database');
    if($this->form_validation->run() == TRUE)
    {
      $password1 = $this->input->post('password1');
     // echo $password1;
      $password2 = $this->input->post('confirmpassword');
     // echo $password2;
      if($password1  == $password2 )
      {
     //Go to private area
        redirect('login', 'refresh');
      }
      else
        {
     //Field validation failed.  User redirected to login page
       $this->load->view('reset_password_view');
      $this->form_validation->set_message('index','Passsword Not Match');
       return false;
        
        }
    }
    else
    {
     //Field validation failed.  User redirected to login page
      $this->load->view('reset_password_view');

    }
 }
 

 function check_database($email)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');

   //query the database
   $result = $this->akun_user_update->reset($username, $email);

   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'nia' => $row->nia,
         'username' => $row->username,
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or email');
     return false;
   }
 }
}
?>