<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Maintenance extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('maintenance/index');
        $this->load->view('template/footer');
    }
}