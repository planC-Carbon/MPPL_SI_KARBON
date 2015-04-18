<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller  {
	function __construct(){
		parent::__construct();
		$this->load->model("user_model"); //constructor yang dipanggil ketika memanggil products.php untuk melakukan pemanggilan pada model : products_model.php yang ada di folder models
	}

	public function index()
	{
			$this->load->view('templates/header');
	$this->load->view('templates/footer');
		//Function yang digunakan untuk menampilkan view products_view.php
		$data['listAnggota'] = $this->user_model->getAllAnggota(); //berisi dari return value pada function getAllProducts() di file models/products_model.php
		$this->load->view('anggota_view', $data); //menampilkan view 'products_view' dan juga passing data dengan nama $data(Bentuknya array) yang berisi 'listProducts'
	}
	
}

/* Location: ./application/controllers/pohon.php */