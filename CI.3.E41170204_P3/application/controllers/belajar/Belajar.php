<?php 

class Belajar extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->helper('html');
		$this->load->model('m_data');
	}
	
	function user(){

	}
	public function index(){
		$data["user"]=$this->m_data->ambil_data()->result();
		$this->load->view('user/v_user.php', $data);
	}

	public function halo(){				
		$data = array(
			'judul' => "Cara Membuat View Pada CodeIgniter",
			'tutorial' => "CodeIgniter"
			);
		$this->load->view('ngoding/view_belajar', $data);
	}
}


?>