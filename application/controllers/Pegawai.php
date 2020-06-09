<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
	protected $sesi;
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pengajuan_model', 'pengajuan');
		$this->sesi = $this->session->userdata('sesi');
	}
	public function index()
	{
		$sesi = $this->sesi;
		$join = $this->pengajuan->getOneData(['username' => $sesi['username']], 'pegawai')->row_array();
		$tglPegawai = strtotime($join['tgl_lahir']);
		$tgl_lahir  = date('Y-n-d', $tglPegawai);
		$enamBulan  = date('Y-n-d', strtotime('-180 days', strtotime($tgl_lahir)));
		$tglSekarang = date('Y-n-d');

		$pecahEnamBulan   = explode('-', $enamBulan);
		$pecahBulanSekarang = explode('-', $tglSekarang);
		$limaBulan		  = $pecahEnamBulan[1] + 1;
		$strLima		  = (string) $limaBulan;


		if ($pecahBulanSekarang[1] == $pecahEnamBulan[1] || $pecahBulanSekarang[1] == $strLima) {
			// JIKA HARI INI SAMA DENGAN BATAS PENGAJUAN
			$data['pesan'] = "ok";
		} else {
			$data['pesan'] = "gagal";
		}

		$data['title'] = "Pengajuan Pensiun";
		$this->load->view('templates_user/header', $data);
		$this->load->view('templates_user/navbar', $data);
		$this->load->view('pegawai/index', $data);
		$this->load->view('templates_user/footer');
	}
}
