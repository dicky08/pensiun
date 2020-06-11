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
		$data['sesi'] = $this->session->userdata('sesi');
		$valid = Validasi::validate();
		$this->form_validation->set_rules('username', 'Username', 'required|trim', $valid);
		$this->form_validation->set_rules('password', 'Password', 'required|trim', $valid);

		if ($this->form_validation->run() == false) {
			# code...
			$data['title'] = "Login";
			$this->load->view('templates_user/header', $data);
			$this->load->view('templates_user/navbar', $data);
			$this->load->view('auth/login');
			$this->load->view('templates_user/footer');
		} else {
			$username  = $this->input->post('username');
			$pass 	   = $this->input->post('password');
			$database = $this->pengajuan->getOneData(['username' => $username], 'pegawai')->row_array();

			if ($database) {
				if (password_verify($pass, $database['password'])) {

					$dataSession = [
						'nip' 		=> $database['nip'],
						'username'  => $username
					];
					$this->session->set_userdata('sesi', $dataSession);
					echo "<script>alert('Login berhasil. Silahkan pilih jenis pensiun!')</script>";
					redirect('pegawai', 'refresh');
				} else {
					$this->session->set_flashdata('msgError', '<div class="alert alert-danger"role="alert">Username atau Password salah!</div>');
					redirect('auth');
					exit;
				}
			} else {
				$this->session->set_flashdata('msgError', '<div class="alert alert-danger"role="alert">Username belum terdaftar! Silahkan melakukan pendaftaran terlebih dahulu untuk mengajukan pensiun!. <a href="' . base_url() . 'register' . '"> Login </a></div>');
				redirect('auth', 'refresh');
				exit;
			}
		}
	}

	public function registrasi()
	{
		$data['sesi'] = $this->session->userdata('sesi');
		$valid = Validasi::validate();
		$this->form_validation->set_rules('nip', 'NIP', 'required|trim|min_length[18]|is_unique[pegawai.nip]', $valid, TRUE);
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim', $valid);
		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[pegawai.username]', $valid, TRUE);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]', $valid, TRUE);
		$this->form_validation->set_rules('password2', 'Password2', 'required|trim|matches[password1]', $valid, TRUE);

		if ($this->form_validation->run() == false) {
			# code...
			$data['title'] = "Registrasi";
			$this->load->view('templates_user/header', $data);
			$this->load->view('templates_user/navbar', $data);
			$this->load->view('auth/register');
			$this->load->view('templates_user/footer');
		} else {
			$nip 	  = $this->input->post('nip');
			$nama 	  = $this->input->post('nama');
			$tgLahir 	  = $this->input->post('tgl_lahir');
			$username = $this->input->post('username');
			$password = $this->input->post('password1');

			$simpanPegawai = [
				'nip'		=> htmlspecialchars(strip_tags($nip)),
				'nama'		=> htmlspecialchars(strip_tags($nama)),
				'username'	=> htmlspecialchars(strip_tags($username)),
				'password'	=> password_hash($password, PASSWORD_DEFAULT),
				'tgl_lahir'	=> htmlspecialchars(strip_tags($tgLahir))
			];
			// Simpan data
			$this->pengajuan->insert_data($simpanPegawai, 'pegawai');

			$this->session->set_flashdata('msgSukses', '<div class="alert alert-success"role="alert">Selamat! Pendaftaran berhasil. Silankan Login. <a href="' . base_url() . 'login' . '"> Login </a></div>');
			redirect('register');
		}
	}

	public function logout()
	{
		session_destroy();
		redirect('home');
	}
}
