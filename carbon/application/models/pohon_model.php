<?php
class Pohon_model extends CI_Model{
	
 	function __construct()
	{
  		parent::__construct();
  		$this->load->helper('url');				
 	}
	
	function entry_insert()
	{
		$this->load->database();
		$data = array(
			  'nama_pohon'=>$this->input->post('nama_pohon'),
			  'letak_pohon'=>$this->input->post('letak_pohon'),
			  'berat_jenis'=>$this->input->post('berat_jenis'),
			  'deskripsi'=>$this->input->post('deskripsi'),
			  'foto_pohon'=>$this->input->post('foto_pohon'),
	        );
		$this->db->insert('pohon',$data);
	}
	
	/*function member_getall()
	{
		$this->load->database();
		$query = $this->db->get('member');
		return $query->result();
	}*/
	
	function get($id_pohon)
	{
		$this->load->database();
		$query = $this->db->get_where('pohon',array('id_pohon'=>$id_pohon));
		return $query->row_array();
	}
	
	/*function get_dropdown_list()
	{
		$this->load->database();
		$this->db->select('ID_Anggota');
		$this->db->select('Nama_Anggota');
		$anggota = $this->db->get('member');
		$hasil = array();
		foreach($anggota->result() as $row)
		{
			$hasil[$row->ID_Anggota] = $row->Nama_Anggota;
		}
		return $hasil;
     }*/
	
 	function general(){
  		//$this->load->library('MyMenuReservasi');
  		//$menu = new MyMenuReservasi;
		//$data['base'] = $this->config->item('base_url');
		//$data['css'] = $this->config->item('css');
  		//$data['menu'] = $menu->show_menu();
  		//$data['webtitle']	= 'Reservasi Tiket Online';
  		//$data['websubtitle']= 'Kebun Binatang Surabaya';
  		/*$data['webfooter']	= 'copyright 
by Julia Safitri kelompok saveKBS';*/
		
		//$data['fKode_Reservasi']['value'] = 0;
		
		//$data['Kode_Reservasi'] = 'Kode Reservasi';
		//$data['ID_Anggota']['value'] = 0;
		//$data['isiID'] = $this->reservasi_model->get_dropdown_list();
		//$data['id_pohon'] = 'Nomor Induk Anggota';
		$data['nama_pohon'] = 'Nama Pohon';
		$data['letak_pohon'] = 'Letak Pohon';
		$data['berat_jenis'] = 'Berat Jenis';
		$data['deskripsi'] = 'Deskripsi';
		$data['foto_pohon'] = 'Foto Pohon';

		//$data['forminput'] = 'Form Input';
		//$data['formupdate'] = 'Form Edit';
		//$data['fID_Anggota'] = array('name'=>'ID_Anggota','size'=>15);
		
		$data['fnama_pohon'] = array('name'=>'nama_pohon','size'=>40);
		$data['fletak_pohon']	= array('name'=>'letak_pohon','size'=>40);
		$data['fberat_jenis']	= array('name'=>'berat_jenis','size'=>40);
		$data['fdeskripsi']	= array('name'=>'deskripsi','size'=>40);
		$data['ffile']	= array('type'=>'file','name'=>'file');
		
  		return $data;	
 	}
}
?>