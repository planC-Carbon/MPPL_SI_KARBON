<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Anggota extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {	$this->load->view('templates/header');
	$this->load->view('templates/footer');
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     $this->load->view('anggota_view', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
 }
 function carbon()
 {	$this->load->view('templates/header');
	$this->load->view('templates/footer');
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     //$this->load->view('event_view', $data);
   
   $this->load->helper('html');
   $this->load->model('data_karbon_model');
   $data['query'] = $this->data_karbon_model->event_getall();
   $this->load->view('data_karbon_view',$data);
   }
 }
 
 function pohon()
 {	$this->load->view('templates/header');
	$this->load->view('templates/footer');
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     //$this->load->view('gallery_view', $data);
   
   $this->load->helper('html');
    $this->load->model('gallery_model');
    $data['query1'] = $this->gallery_model->get1($ID_Hewan="1");
    $data['query2'] = $this->gallery_model->get2($ID_Hewan="2");
    $data['query3'] = $this->gallery_model->get3($ID_Hewan="3");
    $data['query4'] = $this->gallery_model->get4($ID_Hewan="4");
    $this->load->view('gallery_view',$data);
   }
 }
 function logout()
 {	$this->load->view('templates/header');
	$this->load->view('templates/footer');
   $this->session->unset_userdata('logged_in');
   session_destroy();
   //redirect('home', 'refresh');
 }

}

?>
