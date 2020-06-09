<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pengajuan_model', 'pengajuan');
	}
	public function index()
	{
		$valid = Validasi::validate();
		$this->form_validation->set_rules('nip', 'NIP', 'required|trim', $valid);
		$this->form_validation->set_rules('password', 'Password', 'required|trim', $valid);

		if ($this->form_validation->run() == false) {
			# code...
			$data['title'] = "Login";
			$this->load->view('templates_user/header', $data);
			$this->load->view('templates_user/navbar', $data);
			$this->load->view('auth/login');
			$this->load->view('templates_user/footer');
		} else {
			$nip  = $this->input->post('nip');
			$pass = $this->input->post('password');
			$database = $this->pengajuan->getOneData(['nip' => $nip], 'pegawai')->row_array();
			if ($database) {
				if ($pass === $database['tgl_lahir']) {
					$dataSession = [
						'nip' => $nip
					];
					$this->session->set_userdata('sesi', $dataSession);
					echo "<script>alert('Login berhasil. Silahkan pilih jenis pensiun!')</script>";
					redirect('pegawai', 'refresh');
				} else {
					echo "<script>alert('NIP atau Password salah!')</script>";
					redirect('auth', 'refresh');
					exit;
				}
			} else {
				echo "<script>alert('NIP belum terdaftar!')</script>";
				redirect('auth', 'refresh');
				exit;
			}
		}
	}

	public function registrasi()
	{
		$valid = Validasi::validate();
		$this->form_validation->set_rules('nip', 'NIP', 'required|trim', $valid);
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim', $valid);
		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[pegawai.username]', $valid);
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', $valid);
		$this->form_validation->set_rules('password2', 'Password2', 'required|trim', $valid);

		if ($this->form_validation->run() == false) {
			# code...
			$data['title'] = "Registrasi";
			$this->load->view('templates_user/header', $data);
			$this->load->view('templates_user/navbar', $data);
			$this->load->view('auth/register');
			$this->load->view('templates_user/footer');
		} else {
		}
	}

	public function logout()
	{
		session_destroy();
		redirect('home');
	}
}
