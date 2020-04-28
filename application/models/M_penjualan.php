<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_penjualan extends CI_Model
{
    public function get_all()
    {
        $result = $this->db->query("SELECT tb_penjualan.id, tb_penjualan.olahan, tb_penjualan.penjualan, tb_penjualan.tgl_jual, tb_produk.nm_produk FROM tb_penjualan LEFT JOIN tb_produk ON tb_penjualan.nm_produk = tb_produk.id")->result();
        return $result;
    }
}
