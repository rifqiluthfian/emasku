<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_produk extends CI_Model {

	public function HasilData()
	{
		return $this->db->get('produk')->result_array();
	}
}