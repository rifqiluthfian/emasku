<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_produk extends CI_Model {

	public function tambah_produk($dataProduk)
	{
        $data = array('id' => $dataProduk['id'],'nama_produk' => $dataProduk['nama_produk'],'harga' => $dataProduk['harga'],'foto' => $dataProduk['foto']);
        $this->db->insert('produk',$data);
	}
}