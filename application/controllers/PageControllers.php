<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageControllers extends CI_Controller {

    function __construct()	
    {
	parent::__construct();
    $this->load->model('m_produk');
    }


	public function index()
	{
		$this->load->view('index');
	}
    public function reseller()
	{
		$this->load->view('dashboard/layout/head');
		$this->load->view('dashboard/layout/header');
		$this->load->view('dashboard/reseller');
		$this->load->view('dashboard/layout/foot');
	}
	public function detail()
	{
		echo "Tai";
	}
    public function adminProduk()
	{
		$this->load->view('dashboard/layout/head');
		$this->load->view('dashboard/layout/header');
		$this->load->view('admin/admin-produk');
		$this->load->view('dashboard/layout/foot');
	}
    public function tambahProduk()
	{
		$this->m_produk->tambah_produk($this->input->post());
        redirect(base_url().'admin-produk');
	}
        
    public function produk()
	{
		echo "Tair";
        // $data = $this ->db->query ("select * from produk")->result();
        // foreach($data as $rs){
        //     echo $rs->nama_produk." ".$rs->harga."".$rs->foto."<br>";
        // }
	}
}
