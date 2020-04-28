<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pembelian extends CI_Model
{
    public function get_all()
    {
        $result = $this->db->query("SELECT tb_produk.nm_produk, tb_supplier.nm_supplier, tb_pembelian.id, tb_pembelian.ukuran, tb_pembelian.brt_awal, tb_pembelian.brt_kosong, tb_pembelian.brt_bersih, tb_pembelian.time FROM tb_pembelian LEFT JOIN tb_produk ON tb_pembelian.nm_produk = tb_produk.id LEFT JOIN tb_supplier ON tb_pembelian.nm_supplier = tb_supplier.id")->result();
        return $result;
    }
}
