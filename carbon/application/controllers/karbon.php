<!--?php
class Karbon extends CI_Controller{

 	function __construct()
	{
		parent::__construct();
		$this->load->helper(array ('url','form'));
	}
	
 	function input()
	{	$this->load->view('templates/header');
	$this->load->view('templates/footer');
		$this->load->helper('form');
		$this->load->helper('html');
		$this->load->model('karbon_model');
		$data['query'] = $this->karbon_model->data_karbon_getall();
		/*if($this->input->post('mysubmit'))
		{
			$this->karbon_model->entry_insert();
			//$this->rumus();
			$this->load->view('homea');
		}
		$data = $this->karbon_model->general();
  		$this->load->view('karbon_input',$data);*/
	}
	/*function rumus()
	{	$this->load->view('templates/header');
	$this->load->view('templates/footer');
		
		$data['diameter_pohon']=(float)$this->input->post('diameter_pohon');
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
		}
	}*/
}
?>