<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_produk extends CI_Model
{
    public function get_all()
    {
        $result = $this->db->query("SELECT * FROM tb_produk")->result();
        return $result;
    }

    public function get_some($id)
    {
        $result = $this->db->query("SELECT * FROM tb_produk WHERE id = '$id'")->row();
        return $result;
    }
}