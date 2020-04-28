<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model {

	public function get_all()
	{
                // memangil data dengan menggunakan SQL
                $result = $this->db->query("SELECT * FROM tb_users")->result();
                return $result;
        }
        
        public function get_some($id)
        {
                // memangil beberapa data dengan menggunakan SQL
                $result = $this->db->query("SELECT * FROM tb_users WHERE id = '$id'")->row();
                return $result;
        }
}
