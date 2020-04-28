<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
	{
        parent::__construct();
        // untuk mengecek status login
        checking_session($this->session->userdata('username'));
	}

    public function index()
    {
        $this->load->view('admin/dashboard');
    }

}
