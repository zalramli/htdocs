<?php 
class Barang extends CI_Controller
{
    public function index()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/navbar');
        $this->load->view('admin/barang/dataBarang');
        $this->load->view('admin/footer');
    }
}
