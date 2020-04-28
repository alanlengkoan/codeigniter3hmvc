<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

        public function __construct()
	{
                parent::__construct();
                // untuk mengecek role user
                checking_role_session($this->session->userdata('role'));
	}

        public function index()
	{
                $this->load->view('home/home');
        }
        
        public function visimisi()
	{
                echo "visi & misi";
        }

        public function profil()
	{
                echo "profil";
        }

        public function contact()
	{
                echo "contact";
        }
}
