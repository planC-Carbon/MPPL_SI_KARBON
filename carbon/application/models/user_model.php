<?php
	//File products_model.php
	class User_model extends CI_Model  {
		function __construct() 
		{ 
			parent::__construct(); 
		} 
		function getAllAnggota() {
		//select semua data yang ada pada table msProduct $this--->db->select("*");
		$this->db->from("akun_user");

		return $this->db->get();
		}

	function getAnggota($id)
	{
		//select produk berdasarkan id yang dimiliki	
        $this->db->where('nia', $id); //Akan melakukan select terhadap row yang memiliki productId sesuai dengan productId yang telah dipilih
        $this->db->select("*");
        $this->db->from("akun_user");
        
        return $this->db->get();
	}
}