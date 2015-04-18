<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('akun_user','',TRUE);
 }

 function index()
 {
	 	$this->load->view('templates/header');
	$this->load->view('templates/footer');
   //This method will have the credentials validation
   $this->load->library('form_validation');

   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
   $this->form_validation->set_rules('role', 'Role', 'trim|required|xss_clean');
   if($this->form_validation->run() == TRUE)
    {
      $role = $this->input->post('role');
      //echo $role;
      if($role == 'admin' )
      {
     //Go to private area
        redirect('home/index', 'refresh');
      }
      else
        {
     //Field validation failed.  User redirected to login page
       redirect('home_anggota/index', 'refresh');       
        }
    }
    else
    {
			$this->load->view('templates/header');
	$this->load->view('templates/footer');
     //Field validation failed.  User redirected to login page
      $this->load->view('login_view');
    }

 }

 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');
   $role= $this->input->post('role');

   //query the database
   $result = $this->akun_user->login($username, $password,$role);

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
     $this->form_validation->set_message('check_database', 'Invalid username/password/jabatan');
     return false;
   }
 }
}
?>