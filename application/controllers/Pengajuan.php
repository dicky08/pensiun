<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pengajuan_model', 'pengajuan');
	}
	public function index()
	{
		$data['title'] = "Upload Pengajuan";
		$this->load->view('templates_user/header', $data);
		$this->load->view('templates_user/navbar', $data);
		$this->load->view('pengajuan/index', $data);
		$this->load->view('templates_user/footer');
	}
}
