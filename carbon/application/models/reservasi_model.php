<?php
class Reservasi_model extends CI_Model{
	
 	function __construct()
	{
  		parent::__construct();
  		//$this->load->helper('url');				
 	}
	
	function entry_insert()
	{
		$this->load->database();
		$data = array(
	          'Kode_Reservasi'=>$this->input->post('Kode_Reservasi'),
			  'ID_Anggota'=>$this->input->post('ID_Anggota'),
			  'Tgl_Pesan'=>$this->input->post('Tgl_Pesan'),
			  'Tgl_Reservasi'=>$this->input->post('Tgl_Reservasi'),
			  'Jumlah_Tiket'=>$this->input->post('Jumlah_Tiket'),
	        );
		$this->db->insert('reservasi',$data);
	}
	
	function reservasi_getall()
	{
		$this->load->database();
		$query = $this->db->get('reservasi');
		return $query->result();
	}
	
	function get($Kode_Reservasi)
	{
		$this->load->database();
		$query = $this->db->get_where('reservasi',array('Kode_Reservasi'=>$Kode_Reservasi));
		return $query->row_array();
	}
	
	function get_dropdown_list()
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
     }
	
 	function general(){
		$data['fKode_Reservasi']['value'] = 0;
		
		$data['Kode_Reservasi'] = 'Kode Reservasi';
		$data['ID_Anggota'] = 'ID Anggota';
		$data['isiID'] = $this->reservasi_model->get_dropdown_list();
		$data['Nama_Anggota'] = 'Nama Anggota';
		$data['Tgl_Pesan'] = 'Tgl Pesan';
		$data['Tgl_Reservasi'] = 'Tgl Reservasi';
		$data['Jumlah_Tiket'] = 'Jumlah Tiket';
		
		$data['forminput'] = 'Form Input';
		$data['formupdate'] = 'Form Edit';
		$data['fID_Anggota'] = array('name'=>'ID_Anggota','size'=>15);
		$data['fTgl_Pesan'] = array('name'=>'Tgl_Pesan','value'=>date("Y-m-d"),'size'=>10);
		$data['fTgl_Reservasi'] = array('name'=>'Tgl_Reservasi','type'=>'date','size'=>10);
		$data['fJumlah_Tiket']	= array('name'=>'Jumlah_Tiket','size'=>10);
		
  		return $data;	
 	}
}
?>