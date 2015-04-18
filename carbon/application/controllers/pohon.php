<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pohon extends CI_Controller  {
	function __construct(){
		parent::__construct();
			$this->load->view('templates/header');
			$this->load->view('templates/footer');
		$this->load->model("pohon_model"); //constructor yang dipanggil ketika memanggil products.php untuk melakukan pemanggilan pada model : products_model.php yang ada di folder models
	}

	public function index()
	{
			$this->load->view('templates/header');
	$this->load->view('templates/footer');
		//Function yang digunakan untuk menampilkan view products_view.php
		$data['listPohon'] = $this->pohon_model->getAllPohon(); //berisi dari return value pada function getAllProducts() di file models/products_model.php
		$this->load->view('input_pohon', $data); //menampilkan view 'products_view' dan juga passing data dengan nama $data(Bentuknya array) yang berisi 'listProducts'
	}

	public function addPohon()
	{
			$this->load->view('templates/header');
	$this->load->view('templates/footer');
		//Function yang dipanggil ketika ingin melakukan add produk kemudian menampilkan add_product_view
			$this->load->view('add_pohon_view');
	}

	public function addPohonDb()
	{
		//Function yang dipanggil ketika ingin memasukan produk ke dalam database
		$data = array(
				'nama_pohon' => $this->input->post('nama_pohon'),
				'letak_pohon' => $this->input->post('letak_pohon'),
				'berat_jenis' => $this->input->post('berat_jenis'),
				'deskripsi' => $this->input->post('deskripsi'),
				'foto_pohon' => $this->input->post('foto_pohon')
				);
		$this->pohon_model->addPohon($data); //passing variable $data ke products_model

		redirect('pohon'); //redirect page ke halaman utama controller products
	}
	public function updatePohon($id_pohon) //Apabila kita menambahkan parameter seperti ini, maka kita menggunakan method GET untuk mengirimkan parameter dari view ke controller
	{ 
		//Function yang dipanggil ketika ingin melakukan update produk kemudian menampilkan update_product_view
        $data['pohon'] = $this->pohon_model->getPohon($id_pohon); //Melakukan pemanggilan fungsi getProduct yang ada di dalam products_model untuk mendapatkan informasi / data mengenai produk berdasarkan productId yang dikirimkan
        	$this->load->view('templates/header');
	$this->load->view('templates/footer');
        $this->load->view('update_pohon_view', $data); //menampilkan view 'update_product_view' dan juga passing data dengan nama $data(Bentuknya array) yang berisi 'product'
	}

	public function updatePohonDb()
	{
		//Function yang dipanggil ketika ingin melakukan update terhadap produk yang ada di dalam database
        $data = array(
					'nama_pohon' => $this->input->post('nama_pohon'), //Didapatkan dari form yang disubmit pada file update_product_view.php
					'letak_pohon' => $this->input->post('letak_pohon'),
				'berat_jenis' => $this->input->post('berat_jenis'),
				'deskripsi' => $this->input->post('deskripsi'),
				'foto_pohon' => $this->input->post('foto_pohon')
				);
        $condition['id_pohon'] = $this->input->post('id_pohon'); //Digunakan untuk melakukan validasi terhadap produk mana yang akan diupdate nantinya
        
		$this->pohon_model->updatePohon($data, $condition); //passing variable $data ke products_model

		redirect('pohon'); //redirect page ke halaman utama controller products
	}

	public function deletePohonDb($id_pohon)
	{
		//Function yang dipanggil ketika ingin melakukan delete produk dari database
        $this->pohon_model->deletePohon($id_pohon); //Memanggil fungsi deleteProduct yang ada pada model products_model dan mengirimkan parameter yaitu productId yang akan di delete
        
        redirect('pohon'); //redirect page ke halaman utama controller products
	}
}

/* Location: ./application/controllers/pohon.php */