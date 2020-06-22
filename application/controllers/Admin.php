<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pengajuan_model', 'pengajuan');
	}

	public function index()
	{
		$data['title'] = "Login";
		// $this->load->view('template_admin/header', $data);
		// $this->load->view('template_admin/navbar', $data);
		// $this->load->view('template_admin/sidebar', $data);
		$this->load->view('admin/login', $data);
		// $this->load->view('template_admin/footer');
	}


	public function dashboard()
	{
		$data['title'] = "Dashboard";
		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/navbar', $data);
		$this->load->view('template_admin/sidebar', $data);
		$this->load->view('admin/dashboard', $data);
		$this->load->view('template_admin/footer');
	}

	public function data_pegawai()
	{
		$data['data_pegawai'] = $this->pengajuan->getAll('pegawai')->result_array();
		$data['title'] = "Data Pegawai";
		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/navbar', $data);
		$this->load->view('template_admin/sidebar', $data);
		$this->load->view('admin/data_pegawai', $data);
		$this->load->view('template_admin/footer');
	}
	public function data_pengajuan_all()
	{
		$data['data_pengajuan_all'] = $this->pengajuan->joinPengajuanPegawaiKategori()->result_array();
		// $urlImage = 'assets/img-pengajuan/janda_duda/';
		// var_dump($this->uri->segment($urlImage));
		// die;

		$data['table'] = "Table Pengajuan";
		$data['title'] = "Data All Pengajuan";
		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/navbar', $data);
		$this->load->view('template_admin/sidebar', $data);
		$this->load->view('admin/data_pengajuan_all', $data);
		$this->load->view('template_admin/footer');
	}
	public function janda_duda()
	{
		$data['data_pegawai'] = $this->pengajuan->getAll('pegawai')->result_array();
		$data['title'] = "Janda/Duda";
		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/navbar', $data);
		$this->load->view('template_admin/sidebar', $data);
		$this->load->view('admin/janda_duda', $data);
		$this->load->view('template_admin/footer');
	}
	public function batas_usia()
	{
		$data['data_pegawai'] = $this->pengajuan->getAll('pegawai')->result_array();
		$data['title'] = "Batas Usia";
		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/navbar', $data);
		$this->load->view('template_admin/sidebar', $data);
		$this->load->view('admin/batas_usia', $data);
		$this->load->view('template_admin/footer');
	}
	public function permintaan_sendiri()
	{
		$data['data_pegawai'] = $this->pengajuan->getAll('pegawai')->result_array();
		$data['title'] = "Permintaan Sendiri";
		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/navbar', $data);
		$this->load->view('template_admin/sidebar', $data);
		$this->load->view('admin/perm_sendiri', $data);
		$this->load->view('template_admin/footer');
	}
	public function getNip()
	{
		$nip = ['nip' => $_POST['nip']];
		echo json_encode($this->pengajuan->getOneData($nip, 'pengajuan_pensiun')->row_array());
	}
	public function login()
	{
		$valid = Validasi::validate();
		$this->form_validation->set_rules('username', 'Username', 'required|trim', $valid);
		$this->form_validation->set_rules('password', 'Password', 'required|trim', $valid);

		if ($this->form_validation->run() == false) {
			# code...
			$data['title'] = "Login";
			$this->load->view('admin/login');
		} else {
			$username  = $this->input->post('username');
			$pass 	   = $this->input->post('password');
			$database = $this->pengajuan->getOneData(['username' => $username], 'admin')->row_array();


			if ($database) {
				if (md5($pass, $database['password'])) {


					echo "<script>alert('Login berhasil!')</script>";
					redirect('admin/dashboard', 'refresh');
				} else {
					$this->session->set_flashdata('msgError', '<div class="alert alert-danger"role="alert">Username atau Password salah!</div>');
					redirect('admin', 'refresh');
					exit;
				}
			} else {
				$this->session->set_flashdata('msgError', '<div class="alert alert-danger"role="alert">Username belum terdaftar! Silahkan melakukan pendaftaran terlebih dahulu untuk mengajukan pensiun!. <a href="' . base_url() . 'register' . '"> Login </a></div>');
				redirect('admin', 'refresh');
				exit;
			}
		}
	}
	public function logout()
	{
		session_destroy();
		redirect('admin');
	}
}
