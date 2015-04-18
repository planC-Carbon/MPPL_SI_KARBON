<?php
class Karbon_model extends CI_Model{
	
 	function __construct()
	{
  		parent::__construct();
  		//$this->load->helper('url');				
 	}
	
	function entry_insert()
	{
		$this->load->database();
		$data = array(
			  'id_karbon'=>$this->input->post('id_karbon'),
			  'tinggi_pohon'=>$this->input->post('tinggi_pohon'),
			  'diameter_pohon'=>$this->input->post('diameter_pohon'),
			  'sudut'=>$this->input->post('sudut'),
			  'jarak_pengamat'=>$this->input->post('jarak_pengamat'),
			  'tinggi_pengamat'=>$this->input->post('tinggi_pengamat'),    
			  'id_pohon' =>$this->input->post('id_pohon'),
			  'berat_jenis' =>$this->input->post('berat_jenis'),
	        );
		$this->db->insert('data_karbon',$data);
	}
	function rumus()
	{
		$q = $this->db->query("select distinct data_karbon.id_karbon,data_karbon.tinggi_pohon, data_karbon.diameter_pohon, data_karbon.sudut, data_karbon.jarak_pengamat, data_karbon.tinggi_pengamat, data_karbon.id_pohon, data_karbon.berat_jenis, 0.048*pow(data_karbon.diameter_pohon,2.68) as hasil from data_karbon, pohon ");
		return $q;

		

		/*$data['diameter_pohon']=$this->input->post('diameter_pohon');
		$data['id_pohon']=$this->input->post('id_pohon');
		if($data['id_pohon']=='1')
		{
			$data['hasil_perhitungan']=0.48*pow($data['diameter_pohon'],2.68);
			$this->load->view('karbon_input',$data);
		}
		else if($data['id_pohon']=='2')
		{
			$data['hasil_perhitungan']=0.153*pow($data['diameter_pohon'],2.39);
			$this->load->view('karbon_input',$data);
		}
		else if($data['id_pohon']=='3')
		{
			$data['hasil_perhitungan']=0.027*pow($data['diameter_pohon'],2.23);
			$this->load->view('karbon_input',$data);
		}
		else if($data['id_pohon']=='4')
		{
			$data['hasil_perhitungan']=0.0000478*pow($data['diameter_pohon'],2.76);
			$this->load->view('karbon_input',$data);
		}
		else if($data['id_pohon']=='5')
		{
			$data['hasil_perhitungan']=419-16.9*$data['diameter_pohon']+0.322*pow($data['diameter_pohon'],2);
			$this->load->view('karbon_input',$data);
		}
		else if($data['id_pohon']=='6')
		{
			$data['hasil_perhitungan']=pow(0.000093,2.51);
			$this->load->view('karbon_input',$data);
		}
		else if($data['id_pohon']=='7')
		{
			$data['hasil_perhitungan']=pow(0.000093,2.51);
			$this->load->view('karbon_input',$data);
		}*/
	}
	
	function data_karbon_getall()
	{
		$this->load->database();
		$query = $this->db->get('data_karbon');
		return $query->result();
	}
	
	function get($id_karbon)
	{
		$this->load->database();
		$query = $this->db->get_where('data_karbon',array('id_karbon'=>$id_karbon));
		return $query->row_array();
	}
	
	function get_dropdown_list()
	{
		$this->load->database();
		$this->db->select('id_pohon');
		$this->db->select('nama_pohon');
		$wit = $this->db->get('pohon');
		$hasil = array();
		foreach($wit->result() as $row)
		{
			$hasil[$row->id_pohon] = $row->nama_pohon;
		}
		return $hasil;
     }
	
 	function general()
 	{
		$data['fid_karbon']['value'] = 0;
		$data['id_karbon'] = 'ID Karbon';
		$data['tinggi_pohon'] = 'Tinggi Pohon';
		$data['diameter_pohon'] = 'Diameter Pohon';
		$data['sudut'] = 'Sudut';
		$data['jarak_pengamat'] = 'Jarak Pengamat';
		$data['tinggi_pengamat'] = 'Tinggi Pengamat';
		$data['id_pohon'] = 'ID Pohon';
		$data['isiID']=$this->karbon_model->get_dropdown_list();
		$data['nama_pohon'] = 'Nama Pohon';
		
		//$data['fid_karbon'] = array('name'=>'id_karbon','size'=>20);
		$data['fid_pohon'] = array('name'=>'id_pohon','size'=>20);
		$data['ftinggi_pohon'] = array('name'=>'tinggi_pohon','size'=>20);
		$data['fdiameter_pohon']	= array('name'=>'diameter_pohon','size'=>20);
		$data['fsudut']	= array('name'=>'sudut','size'=>20);
		$data['fjarak_pengamat']	= array('name'=>'jarak_pengamat','size'=>20);
		$data['ftinggi_pengamat']	= array('name'=>'tinggi_pengamat','size'=>20);

		
  		return $data;	
 	}
 		function getAllKarbon() {
		//select semua data yang ada pada table msProduct $this--->db->select("*");
		$this->db->from("data_karbon");

		return $this->db->get();
		}

	function getKarbon($id)
	{
		//select produk berdasarkan id yang dimiliki	
        $this->db->where('id_karbon', $id); //Akan melakukan select terhadap row yang memiliki productId sesuai dengan productId yang telah dipilih
        $this->db->select("*");
        $this->db->from("data_karbon");
        
        return $this->db->get();
	}
}
?>
