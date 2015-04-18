<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Verifypohon extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('pohon_model','',TRUE);
 }

 function index()
 {	$this->load->view('templates/header');
	$this->load->view('templates/footer');
	
   //This method will have the credentials validation
   $this->load->library('form_validation');

   $this->form_validation->set_rules('nama_pohon', 'Nama Pohon', 'trim|required|xss_clean');
   $this->form_validation->set_rules('letak_pohon', 'Letak Pohon', 'trim|required|xss_clean');
   $this->form_validation->set_rules('berat_jenis', 'Berat Jenis', 'trim|required|xss_clean');
   $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required|xss_clean');
   $this->form_validation->set_rules('foto_pohon', 'Foto Pohon', 'trim|xss_clean');

  if($this->form_validation->run() == FALSE)
   {
	   	$this->load->view('templates/header');
	$this->load->view('templates/footer');
     //Field validation failed.  User redirected to login page
     //$data = $this->registrasi_model->general();
   $this->load->view('input_pohon');
   }
   else
   {
     //Go to private area
   redirect('pohon_submit/submit', 'refresh');
   }
 }
}
?>