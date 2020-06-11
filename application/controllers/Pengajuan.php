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
		$join = $this->pengajuan->getOneData(['username' => $sesi['username']], 'pegawai')->row_array();
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
		$nip  = $join['nip'];
		$data['upload'] = $this->pengajuan->getOneData(['nip' => $nip], 'pengajuan')->row_array();

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

		$this->pengajuan->uploadData('pdf', 2048, 'upload_file');

		$nameGambar = ($_FILES['upload_file']['name']);
		$upload = [
			'tgl_pengajuan'	 	=> date('Y-m-d'),
			'nip'				=> $nip,
			'id_kategori'		=> 3,
			'id_admin'			=> 0,
			'upload_file'		=> $nameGambar,
			'surat_kematian'	=> 'null',
			'surat_janda_duda'	=> 'null',
			'surat_kuliah_anak'	=> 'null',
			'photo' 			=> $nameGambar,
			'status' 			=> 'process'
		];
		$this->pengajuan->insert_data($upload, 'pengajuan');

		$data['title'] = "Upload Pengajuan Permintaan Sendiri";
		$this->load->view('templates_user/header', $data);
		$this->load->view('templates_user/navbar', $data);
		$this->load->view('pengajuan/selesai', $data);
		$this->load->view('templates_user/footer');
	}

	public function success()
	{
		# code...
	}
}
