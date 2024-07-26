<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->model('MSudi');
	}

	public function index()
	{
		$data['content']='Beranda';
		$this->load->view('welcome_message',$data);
	}

	public function admin()
	{ 
		$data['DataToko'] = $this->MSudi->GetData('tbl_buku');
		$data['DataTokoPenerbit'] = $this->MSudi->GetData('penerbit');
		$data['content']='toko/VAdmin';
		$this->load->view('welcome_message',$data);
	}

	public function pengadaan() {
        // Load model dan data
        $this->load->model('MSudi');
        $data['DataPengadaan'] = $this->MSudi->get_pengadaan();

        // Tampilkan view dengan data
		$data['content']='toko/VPengadaan';
        $this->load->view('welcome_message', $data);
    }

	public function home()
	{
		$cari=$this->input->post('cari');
		$data['GetDataCariBuku'] = $this->MSudi->GetCariBuku($cari);
		$data['content']='toko/VHome';
		$this->load->view('welcome_message',$data);
	}



	public function AdminInsert()
	{
		$add['id_buku'] = $this->input->post('id_buku');
		$add['kategori'] = $this->input->post('kategori');
		$add['nama_buku'] = $this->input->post('nama_buku');
		$add['harga'] = $this->input->post('harga');
		$add['stok'] = $this->input->post('stok');
		$add['penerbit'] = $this->input->post('penerbit');
			
		$this->MSudi->AddData('tbl_buku', $add);

		redirect(site_url('Welcome/admin'));
	}

	public function AdminDelete()
	{
		$id_buku = $this->uri->segment(3);
		$this->MSudi->DeleteData('tbl_buku','id_buku', $id_buku);
		redirect(site_url('Welcome/admin'));

	}
	
	public function AdminUpdate()
	{
		$id_buku = $this->input->post('id_buku');
		$update['kategori'] = $this->input->post('kategori');
		$update['nama_buku'] = $this->input->post('nama_buku');
		$update['harga'] = $this->input->post('harga');
		$update['stok'] = $this->input->post('stok');
		$update['penerbit'] = $this->input->post('penerbit');

		$this->MSudi->UpdateData('tbl_buku','id_buku', $id_buku, $update);

		redirect(site_url('Welcome/admin'));
	}

	public function penerbit()
	{ 
		$data['DataTokoPenerbit'] = $this->MSudi->GetData('penerbit');
		$data['content']='toko/VPenerbit';
		$this->load->view('welcome_message',$data);
	}

	public function PenerbitInsert()
	{
		$add['id_penerbit'] = $this->input->post('id_penerbit');
		$add['nama'] = $this->input->post('nama');
		$add['alamat'] = $this->input->post('alamat');
		$add['kota'] = $this->input->post('kota');
		$add['telepon'] = $this->input->post('telepon');
		
			
		$this->MSudi->AddData('penerbit', $add);

		redirect(site_url('Welcome/penerbit'));
	}

	public function PenerbitDelete()
	{
		$id_penerbit = $this->uri->segment(3);
		$this->MSudi->DeleteData('penerbit','id_penerbit', $id_penerbit);
		redirect(site_url('Welcome/penerbit'));

	}
	
	public function PenerbitUpdate()
	{
		$id_penerbit = $this->input->post('id_penerbit');
		$update['nama'] = $this->input->post('nama');
		$update['alamat'] = $this->input->post('alamat');
		$update['kota'] = $this->input->post('kota');
		$update['telepon'] = $this->input->post('telepon');

		$this->MSudi->UpdateData('penerbit','id_penerbit', $id_penerbit, $update);

		redirect(site_url('Welcome/penerbit'));
	}


}
