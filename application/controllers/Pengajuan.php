<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan extends CI_Controller
{
	protected $sesi;
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pengajuan_model', 'pengajuan');
		$this->sesi = $this->session->userdata('sesi');
	}
	public function janda_duda()
	{
		$sesi = $this->sesi;
		$join = $this->pengajuan->getOneData(['nip' => $sesi['nip']], 'pegawai')->row_array();
		$data['title'] = "Upload Pengajuan Janda/Duda";
		$this->load->view('templates_user/header', $data);
		$this->load->view('templates_user/navbar', $data);
		$this->load->view('pengajuan/janda_duda', $data);
		$this->load->view('templates_user/footer');
	}
	public function batas_usia()
	{
		$data['title'] = "Upload Pengajuan Janda/Duda";
		$this->load->view('templates_user/header', $data);
		$this->load->view('templates_user/navbar', $data);
		$this->load->view('pengajuan/batas_usia', $data);
		$this->load->view('templates_user/footer');
	}
	public function permintaan_sendiri()
	{
		$sesi = $this->sesi;
		$join = $this->pengajuan->getOneData(['username' => $sesi['username']], 'pegawai')->row_array();
		$data['title'] = "Upload Pengajuan Permintaan Sendiri";
		$this->load->view('templates_user/header', $data);
		$this->load->view('templates_user/navbar', $data);
		$this->load->view('pengajuan/permintaan_sendiri', $data);
		$this->load->view('templates_user/footer');
	}
	public function upload_permintaan_sendiri()
	{
		$sesi = $this->sesi;
		$join = $this->pengajuan->getOneData(['username' => $sesi['username']], 'pegawai')->row_array();
		$nip = $join['nip'];
		$this->pengajuan->uploadData('pdf', 1024, 'upload_file');
		$nameGambar = ($_FILES['upload_file']['name']);
		$upload = [
			'tgl_pengajuan' => time(),
			'nip'			=> $nip,
			'id_kategori'	=> 3,
			'photo' 		=> $nameGambar,
			'status' 		=> 'process'
		];
		var_dump($upload);


		$data['title'] = "Upload Pengajuan Permintaan Sendiri";
		$this->load->view('templates_user/header', $data);
		$this->load->view('templates_user/navbar', $data);
		$this->load->view('pengajuan/selesai', $data);
		$this->load->view('templates_user/footer');
	}
}
