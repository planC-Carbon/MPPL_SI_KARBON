<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

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
     $this->load->view('home_view', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
 }
 function pohon()
 {	$this->load->view('templates/header');
	$this->load->view('templates/footer');
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     //$this->load->view('event_view', $data);
   
   $this->load->helper('html');
   $this->load->model('pohon_model');
   $data['listPohon'] = $this->pohon_model->getAllPohon(); //berisi dari return value pada function getAllProducts() di file models/products_model.php
    $this->load->view('input_pohon', $data); //menampilkan view 'products_view' dan juga passing data dengan nama $data(Bentuknya array) yang berisi 'listProducts'
   }
 }
 function user()
 {	$this->load->view('templates/header');
	$this->load->view('templates/footer');
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     //$this->load->view('event_view', $data);
   
   $this->load->helper('html');
   $this->load->model('user_model');
   $data['listAnggota'] = $this->user_model->getAllAnggota(); //berisi dari return value pada function getAllProducts() di file models/products_model.php
    $this->load->view('anggota_view', $data); //menampilkan view 'products_view' dan juga passing data dengan nama $data(Bentuknya array) yang berisi 'listProducts'
   }
 }
 function input_data()
 {	$this->load->view('templates/header');
	$this->load->view('templates/footer');
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     //$this->load->view('event_view', $data);
   
   $this->load->helper('html');
   $this->load->model('pohon_model');
   $data['inputDataPohon'] = $this->pohon_model->getAllData(); //berisi dari return value pada function getAllProducts() di file models/products_model.php
    $this->load->view('input_data', $data); //menampilkan view 'products_view' dan juga passing data dengan nama $data(Bentuknya array) yang berisi 'listProducts'
   }
 }
 function karbon_submit()
 {	$this->load->view('templates/header');
	$this->load->view('templates/footer');
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     //$this->load->view('event_view', $data);
   
   $this->load->helper('html');
   $this->load->model('karbon_model');
   $data['listKarbon'] = $this->karbon_model->rumus(); //berisi dari return value pada function getAllProducts() di file models/products_model.php
    $this->load->view('karbon_view', $data); //menampilkan view 'products_view' dan juga passing data dengan nama $data(Bentuknya array) yang berisi 'listProducts'
   }
 }
  function karbon()
 {	$this->load->view('templates/header');
	$this->load->view('templates/footer');
   
   $this->load->helper('form');
   $this->load->helper('html');
   $this->load->model('karbon_model');
   
   if($this->input->post('mysubmit'))
    {
     $this->karbon_model->entry_insert();
     redirect('home/karbon_submit', 'refresh');
    }
  $data = $this->karbon_model->general(); 
  $this->load->view('karbon_input',$data);

}
 
 /*function karbon()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
   
   $this->load->helper('html');
   $this->load->model('karbon_model');
   $data['entry_insert'] = $this->karbon_model->getAllData(); //berisi dari return value pada function getAllProducts() di file models/products_model.php
    $this->load->view('karbon_input', $data); //menampilkan view 'products_view' dan juga passing data dengan nama $data(Bentuknya array) yang berisi 'listProducts'
   }
 }*/
 function logout()
 {
	 	$this->load->view('templates/header');
	$this->load->view('templates/footer');
   $this->session->unset_userdata('logged_in');
   session_destroy();
   //redirect('home', 'refresh');
 }

}

?>
