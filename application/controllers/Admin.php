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
		$data['list_jd'] = $this->pengajuan->joinPengajuanPegawaiKategori()->result_array();
		$psanda = $data['list_jd'];
		foreach ($psanda as $ps) {
			$idKategori = $ps['id_kategori'];
			if ($idKategori == 1) {
				$data['kategori'] 				= $ps['nama_kategori'];
				$data['tglPengajuan'] 			= $ps['tgl_pengajuan'];
				$data['tgl_lahir'] 				= $ps['tgl_lahir'];
				$data['nip'] 					= $ps['nip'];
				$data['idKategori'] 			= $ps['id_kategori'];
				$data['nama'] 					= $ps['nama'];
				$data['kategori'] 				= $ps['nama_kategori'];
				$data['photo'] 					= $ps['photo'];
				$data['karpeg'] 				= $ps['karpeg'];
				$data['sk_cpns'] 				= $ps['sk_cpns'];
				$data['sk_pns'] 				= $ps['sk_pns'];
				$data['sk_pangkat_terakhir']	= $ps['sk_pangkat_terakhir'];
				$data['kenaikan_gaji_terakhir'] = $ps['kenaikan_gaji_terakhir'];
				$data['jabatan_terakhir'] 		= $ps['jabatan_terakhir'];
				$data['sk_terakhir'] 			= $ps['sk_terakhir'];
				$data['sasaran_kinerja'] 		= $ps['sasaran_kinerja'];
				$data['ktp'] 					= $ps['ktp'];
				$data['surat_nikah'] 			= $ps['surat_nikah'];
				$data['kartu_keluarga'] 		= $ps['kartu_keluarga'];
				$data['akta_kelahiran'] 		= $ps['akta_kelahiran'];
				$data['surat_kuliah_anak'] 		= $ps['surat_kuliah_anak'];
				$data['surat_kuliah_anak'] 		= $ps['surat_kuliah_anak'];
				$data['surat_kematian'] 		= $ps['surat_kematian'];
				$data['surat_janda_duda'] 		= $ps['surat_janda_duda'];
				$data['status'] 				= $ps['status'];
			}
		}
		$data['urlImage'] = '';
		if ($data['idKategori'] == 1) {
			$data['urlImage'] = 'assets/img-pengajuan/janda_duda/';
		}
		$data['table'] = "Table Janda Duda";
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
		$data['perm_sendiri'] = $this->pengajuan->joinPengajuanPegawaiKategori()->result_array();
		$perm_sendiri = $data['perm_sendiri'];
		foreach ($perm_sendiri as $ps) {
			$idKategori = $ps['id_kategori'];
			if ($idKategori == 3) {
				$data['kategori'] 				= $ps['nama_kategori'];
				$data['tglPengajuan'] 			= $ps['tgl_pengajuan'];
				$data['tgl_lahir'] 				= $ps['tgl_lahir'];
				$data['nip'] 					= $ps['nip'];
				$data['idKategori'] 			= $ps['id_kategori'];
				$data['nama'] 					= $ps['nama'];
				$data['kategori'] 				= $ps['nama_kategori'];
				$data['photo'] 					= $ps['photo'];
				$data['karpeg'] 				= $ps['karpeg'];
				$data['sk_cpns'] 				= $ps['sk_cpns'];
				$data['sk_pns'] 				= $ps['sk_pns'];
				$data['sk_pangkat_terakhir']	= $ps['sk_pangkat_terakhir'];
				$data['kenaikan_gaji_terakhir'] = $ps['kenaikan_gaji_terakhir'];
				$data['jabatan_terakhir'] 		= $ps['jabatan_terakhir'];
				$data['sk_terakhir'] 			= $ps['sk_terakhir'];
				$data['sasaran_kinerja'] 		= $ps['sasaran_kinerja'];
				$data['ktp'] 					= $ps['ktp'];
				$data['surat_nikah'] 			= $ps['surat_nikah'];
				$data['kartu_keluarga'] 		= $ps['kartu_keluarga'];
				$data['akta_kelahiran'] 		= $ps['akta_kelahiran'];
				$data['surat_kuliah_anak'] 		= $ps['surat_kuliah_anak'];
				$data['surat_kuliah_anak'] 		= $ps['surat_kuliah_anak'];
				$data['surat_kematian'] 		= $ps['surat_kematian'];
				$data['surat_janda_duda'] 		= $ps['surat_janda_duda'];
				$data['status'] 				= $ps['status'];
			}
		}
		$data['urlImage'] = '';
		if ($data['idKategori'] == 3) {
			$data['urlImage'] = 'assets/img-pengajuan/permintaan-sendiri/';
		}
		$data['table'] = "Table Permintaan Sendiri";
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
	public function cetakDataPengajuan()
	{
		$mpdf = new \Mpdf\Mpdf();


		$data['data_pengajuan_all'] = $this->pengajuan->joinPengajuanPegawaiKategori()->result_array();

		$data['table'] = "Data Pengajuan Pensiun";
		$data['title'] = "Data Pengajuan Pensiun";

		$data['judul'] = "Data Pengajuan Pensiun";
		$mpdf->addPage('P');
		$html = $this->load->view('admin/cetakDataPengajuan', $data, TRUE);
		$mpdf->WriteHtml($html);
		$mpdf->Output();
	}
	public function logout()
	{
		session_destroy();
		redirect('admin');
	}
}
