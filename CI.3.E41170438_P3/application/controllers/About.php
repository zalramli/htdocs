<?php

class About extends CI_Controller
{
    public function index()
    {
        $this->load->view('about');
    }
    public function profile()
    {
        $this->load->view('about/profile');
    }
}
