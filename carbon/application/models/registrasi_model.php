<?php
class Registrasi_model extends CI_Model{
	
 	function __construct()
	{
  		parent::__construct();
  		$this->load->helper('url');				
 	}
	
	function entry_insert()
	{
		$this->load->database();
		$data = array(
			  'nia'=>$this->input->post('nia'),
			  'nama'=>$this->input->post('nama'),
			  'email'=>$this->input->post('email'),
			  'username'=>$this->input->post('username'),
			  'password'=>$this->input->post('password'),
			  'role'=>$this->input->post('role'),
	        );
		$this->db->insert('akun_user',$data);
	}
	
	/*function member_getall()
	{
		$this->load->database();
		$query = $this->db->get('member');
		return $query->result();
	}*/
	
	/*function get($nia)
	{
		$this->load->database();
		$query = $this->db->get_where('akun_user',array('nia'=>$nia));
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
		$data['nia'] = 'Nomor Induk Anggota';
		$data['nama'] = 'Nama';
		$data['email'] = 'Email';
		$data['username'] = 'Username';
		$data['password'] = 'Password';
		$data['role'] = 'Role';

		//$data['forminput'] = 'Form Input';
		//$data['formupdate'] = 'Form Edit';
		//$data['fID_Anggota'] = array('name'=>'ID_Anggota','size'=>15);
		$data['fnia'] = array('name'=>'nia','size'=>40);
		
		$data['fnama'] = array('name'=>'nama','size'=>40);
		$data['femail']	= array('name'=>'email','size'=>40);
		$data['fusername']	= array('name'=>'username','size'=>40);
		$data['fpassword']	= array('type'=>'password' ,'name'=>'password','size'=>40);
		
  		return $data;	
 	}
}
?>