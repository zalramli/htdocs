<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ngoding extends CI_Controller {
	
	function index(){
		$this->load->library('malas');
		$this->malas->nama_saya();
                echo "<br/>";
                $this->malas->nama_kamu("Andi");
	}

}