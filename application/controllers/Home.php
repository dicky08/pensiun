<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pengajuan_model', 'pengajuan');
	}

	public function index()
	{
		$sesi = $this->session->userdata('sesi');
		$join = $this->pengajuan->getOneData(['username' => $sesi['username']], 'pegawai')->row_array();
		$nip  = $join['nip'];
		$data['upload'] = $this->pengajuan->getOneData(['nip' => $nip], 'pengajuan')->row_array();
		$data['title'] = "Dashboard";
		$this->load->view('templates_user/header', $data);
		$this->load->view('templates_user/navbar');
		$this->load->view('templates_user/content');
		$this->load->view('templates_user/footer');
	}
}
