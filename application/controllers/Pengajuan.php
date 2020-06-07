<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pengajuan_model', 'pengajuan');
	}
	public function janda_duda()
	{
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
}
