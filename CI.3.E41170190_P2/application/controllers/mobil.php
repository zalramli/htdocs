<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Mobil extends CI_Controller {
	
	public function warna(){		
		echo "Segmen 1 adalah =" . $this->uri->segment('1') . "<br/>";
		echo "Segmen 2 adalah =" . $this->uri->segment('2') . "<br/>";
		echo "Segmen 3 adalah =" . $this->uri->segment('3') . "<br/>";
		echo "Segmen 4 adalah =" . $this->uri->segment('4') . "<br/>";
		echo "Segmen 5 adalah =" . $this->uri->segment('5') . "<br/>";
	}
 
}
?>