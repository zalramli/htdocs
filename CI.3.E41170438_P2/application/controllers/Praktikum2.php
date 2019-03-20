<?php 
class Praktikum2 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('download');
        $this->load->library('malasngoding');
    }
    public function index()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/navbar');
        $this->load->view('praktikum/praktikum2');
        $this->load->view('admin/footer');
    }
    public function aksi()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('konfir_email', 'Konfirmasi Email', 'required');

        if ($this->form_validation->run() != false) {
            echo "Form validation oke";
        } else {
            $this->load->view('admin/header');
            $this->load->view('admin/navbar');
            $this->load->view('praktikum/praktikum2');
            $this->load->view('admin/footer');
        }
    }
    public function lakukan_download()
    {
        $isi = 'Here is some text!';
        $nama_file = 'Hasil Download.txt';
        force_download($nama_file, $isi);
    }
}
