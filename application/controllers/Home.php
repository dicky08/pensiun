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
<<<<<<< HEAD
		$sesi = $this->session->userdata('sesi');
		var_dump($sesi);
		$join = $this->pengajuan->getOneData(['username' => $sesi['username']], 'pegawai')->row_array();
		$nip  = $join['nip'];
		var_dump($nip);
		$data['upload'] = $this->pengajuan->getAll('pengajuan')->result_array();
=======
		$data['sesi']  = $this->session->userdata('sesi');
		if ($this->session->userdata('sesi')) {
			# code...
			$data['sesi']  = $this->session->userdata('sesi');
			$sesi = $data['sesi']['nip'];
			$data['pengajuan'] = $this->db->get_where('pengajuan', ['nip' => $sesi])->row_array();
		}



		// $data['pengajuan'] = $this->pengajuan->getOneData(['nip' => $data['sesi']['nip']], 'pengajuan')->row_array();
>>>>>>> 759f57f57a2f164de87a1929ecfda2a905da1229
		$data['title'] = "Dashboard";
		$this->load->view('templates_user/header', $data);
		$this->load->view('templates_user/navbar');
		$this->load->view('templates_user/content');
		$this->load->view('templates_user/footer');
	}
}
