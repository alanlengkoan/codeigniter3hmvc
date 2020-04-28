<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_supplier extends CI_Model
{
    public function get_all()
    {
        $result = $this->db->query("SELECT * FROM tb_supplier")->result();
        return $result;
    }

    public function get_some($id)
    {
        $result = $this->db->query("SELECT * FROM tb_supplier WHERE id = '$id'")->row();
        return $result;
    }
}