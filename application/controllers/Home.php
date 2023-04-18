<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['produk'] = $this->Data_produk->HasilData();
		$this->load->view('dashboard/layout/head');
		$this->load->view('dashboard/layout/header');
		$this->load->view('dashboard/index', $data);
		$this->load->view('dashboard/layout/foot');
	}
}
