<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Community extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('homepage/community');
        $this->load->view('template/foot');
        $this->load->view('template/footer');
    }
}
