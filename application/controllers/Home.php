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
		$data['sesi']  = $this->session->userdata('sesi');
		if ($this->session->userdata('sesi')) {
			# code...
			$data['sesi']  = $this->session->userdata('sesi');
			$sesi = $data['sesi']['nip'];
			$data['pengajuan'] = $this->db->get_where('pengajuan_pensiun', ['nip' => $sesi])->row_array();
		}

		// $data['pengajuan'] = $this->pengajuan->getOneData(['nip' => $data['sesi']['nip']], 'pengajuan')->row_array();
		$data['title'] = "Dashboard";
		$this->load->view('templates_user/header', $data);
		$this->load->view('templates_user/navbar');
		$this->load->view('templates_user/content');
		$this->load->view('templates_user/footer');
	}

	function info ()
	{
		$data['sesi']  = $this->session->userdata('sesi');
		if ($this->session->userdata('sesi')) {
			# code...
			$data['sesi']  = $this->session->userdata('sesi');
			$sesi = $data['sesi']['nip'];
			$data['pengajuan'] = $this->db->get_where('pengajuan_pensiun', ['nip' => $sesi])->row_array();
		}

		// $data['pengajuan'] = $this->pengajuan->getOneData(['nip' => $data['sesi']['nip']], 'pengajuan')->row_array();
		$data['title'] = "Syarat pengajuan";
		$this->load->view('templates_user/header', $data);
		$this->load->view('templates_user/navbar');
		$this->load->view('templates_user/info');
		$this->load->view('templates_user/footer');
	}
}
