<?php
	//File products_model.php
	class Pohon_model extends CI_Model  {
		function __construct() { parent::__construct(); } function getAllPohon() {
		//select semua data yang ada pada table msProduct $this--->db->select("*");
		$this->db->from("pohon");

		return $this->db->get();
	}

	function getPohon($id)
	{
		//select produk berdasarkan id yang dimiliki	
        $this->db->where('id_pohon', $id); //Akan melakukan select terhadap row yang memiliki productId sesuai dengan productId yang telah dipilih
        $this->db->select("*");
        $this->db->from("pohon");
        
        return $this->db->get();
	}

	function addPohon($data)
	{
		//untuk insert data ke database
		$this->db->insert('pohon', $data);
	}

	function updatePohon($data, $condition)
	{
		//update produk
        $this->db->where($condition); //Hanya akan melakukan update sesuai dengan condition yang sudah ditentukan
        $this->db->update('pohon', $data); //Melakukan update terhadap table msProduct sesuai dengan data yang telah diterima dari controller
	}

	function deletePohon($id_pohon)
	{
		//delete produk berdasarkan id
        $this->db->where('id_pohon', $id_pohon);
        $this->db->delete('pohon');
	}
}