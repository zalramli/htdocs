<?php 

class Admin extends CI_Controller
{
    public function index()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/navbar');
        $this->load->view('admin/content');
        $this->load->view('admin/footer');
    }
    public function tampil()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/navbar');
        $this->load->view('admin/asd');
        $this->load->view('admin/footer');
    }
}
