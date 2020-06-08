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
		$join = $this->pengajuan->getOneData(['nip' => $sesi['nip']], 'pegawai')->row_array();

		$data['title'] = "Upload Pengajuan Permintaan Sendiri";
		$this->load->view('templates_user/header', $data);
		$this->load->view('templates_user/navbar', $data);
		$this->load->view('pengajuan/permintaan_sendiri', $data);
		$this->load->view('templates_user/footer');
	}
	public function upload_permintaan_sendiri()
	{
		$sesi = $this->sesi;
		$join = $this->pengajuan->getOneData(['nip' => $sesi['nip']], 'pegawai')->row_array();
		// var_dump($name);
		$config['upload_path']          = './assets/img_pengajuan/permintaan_sendiri';
		$config['allowed_types']        = 'pdf';
		$config['max_size']             = 2048;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('upload_file')) {
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
			// $this->load->view('upload_form', $error);
		} else {
			$data = array('upload_data' => $this->upload->data());

			var_dump($data);
		}


		$data['title'] = "Upload Pengajuan Permintaan Sendiri";
		$this->load->view('templates_user/header', $data);
		$this->load->view('templates_user/navbar', $data);
		$this->load->view('pengajuan/selesai', $data);
		$this->load->view('templates_user/footer');
	}
}
