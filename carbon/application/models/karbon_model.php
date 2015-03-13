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
			  'hasil_perhitungan' =>$this->input->post('hasil_perhitungan'),
			  'nia' =>$this->input->post('nia'),
			  'id_pohon' =>$this->input->post('id_pohon'),
			  'status' =>$this->input->post('status'),
			  'tinggi_bebas_cabang' =>$this->input->post('tinggi_bebas_cabang'),
	        );
		$this->db->insert('data_karbon',$data);
	}
	
	function reservasi_getall()
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
		$karbon = $this->db->get('pohon');
		$hasil = array();
		foreach($karbon->result() as $row)
		{
			$hasil[$row->id_pohon] = $row->nama_pohon;
		}
		return $hasil;
     }
	
 	function general(){
		$data['fid_karbon']['value'] = 0;
		
		$data['id_karbon'] = 'ID Karbon';
		$data['tinggi_pohon'] = 'Tinggi Pohon';
		$data['diameter_pohon'] = 'Diameter Pohon';
		$data['sudut'] = 'Sudut';
		$data['jarak_pengamat'] = 'Jarak Pengamat';
		$data['tinggi_pengamat'] = 'Tinggi Pengamat';
		$data['id_pohon'] = $this->karbon_model->get_dropdown_list();
		
		$data['fid_karbon'] = array('name'=>'id_karbon','size'=>20);
		$data['ftinggi_pohon'] = array('name'=>'tinggi_pohon','size'=>20);
		$data['fdiameter_pohon']	= array('name'=>'diameter_pohon','size'=>20);
		$data['fsudut']	= array('name'=>'sudut','size'=>20);
		$data['fjarak_pengamat']	= array('name'=>'jarak_pengamat','size'=>20);
		$data['ftinggi_pengamat']	= array('name'=>'tinggi_pengamat','size'=>20);

		
  		return $data;	
 	}
}
?>
