<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan extends CI_Controller
{
	protected $sesi;
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pengajuan_model', 'pengajuan');
		$this->sesi = $this->session->userdata('sesi');
	}
	public function janda_duda()
	{
		$sesi = $this->sesi;
		$join = $this->pengajuan->getOneData(['nip' => $sesi['nip']], 'pegawai')->row_array();
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
	public function permintaan_sendiri()
	{
		$sesi = $this->sesi;
		$join = $this->pengajuan->getOneData(['username' => $sesi['username']], 'pegawai')->row_array();
		$nip  = $join['nip'];
		$data['upload'] = $this->pengajuan->getOneData(['nip' => $nip], 'pengajuan')->row_array();
		// $a = Validasi::validate();
		// $this->form_validation->set_rules('upload_file', 'photo', 'required', $a);
		// $this->form_validation->set_rules('coba', 'photo', 'required', $a);
		// $this->form_validation->set_rules('photo', 'photo', 'required', $a);

		// if ($this->form_validation->run() == false) {
		# code...
		$data['title'] = "Upload Pengajuan Permintaan Sendiri";
		$this->load->view('templates_user/header', $data);
		$this->load->view('templates_user/navbar', $data);
		$this->load->view('pengajuan/permintaan_sendiri', $data);
		$this->load->view('templates_user/footer');
		// }
	}
	public function upload_permintaan_sendiri()
	{
		$sesi = $this->sesi;
		$data['sesi'] = $sesi;
		$join = $this->pengajuan->getOneData(['username' => $sesi['username']], 'pegawai')->row_array();
		$nip = $join['nip'];

		$this->pengajuan->uploadData('pdf', 2048, 'upload_file');
		// $this->pengajuan->uploadData('pdf', 2048, 'photo');

		$nameGambar = ($_FILES['upload_file']['name']);
		// $photo = ($_FILES['[photo]']['name']);
		var_dump($nameGambar);
		$upload = [
			'tgl_pengajuan'	 	=> date('Y-m-d'),
			'nip'				=> $nip,
			'id_kategori'		=> 3,
			'id_admin'			=> 0,
			'upload_file'		=> $nameGambar,
			'surat_kematian'	=> 'null',
			'surat_janda_duda'	=> 'null',
			'surat_kuliah_anak'	=> 'null',
			'photo' 			=> $nameGambar,
			'status' 			=> 'process'
		];
		var_dump($upload);
		// $this->pengajuan->insert_data($upload, 'pengajuan');
		$data['title'] = "Upload Pengajuan Permintaan Sendiri";
		$this->load->view('templates_user/header', $data);
		$this->load->view('templates_user/navbar', $data);
		$this->load->view('pengajuan/selesai', $data);
		$this->load->view('templates_user/footer');
	}

	public function lihat_pengajuan()
	{
		$sesi = $this->sesi;
		$data['sesi'] = $sesi;
		$data['pengajuan'] = $this->pengajuan->getOneData(['nip' => $sesi['nip']], 'pengajuan')->row_array();
		$pengajuan = $data['pengajuan'];
		$joinKategori = $this->pengajuan->joinKategori($sesi['nip'])->row_array();
		$data['tglPengajuan'] = $joinKategori['tgl_pengajuan'];
		$data['nip'] = $joinKategori['nip'];
		$data['kategori'] = $joinKategori['nama_kategori'];
		if (!isset($pengajuan['nip'])) {
		}

		$data['title'] = "Hasil Pengajuan";
		$this->load->view('templates_user/header', $data);
		$this->load->view('templates_user/navbar', $data);
		$this->load->view('pengajuan/lihat_pengajuan', $data);
		$this->load->view('templates_user/footer');
	}

	public function ajax_upload()
	{


		$config = [
			'upload_path'          => './assets/img_pengajuan/permintaan_sendiri',
			'allowed_types'        => 'pdf',
			'max_size'             => 1024
		];
		$this->load->library('upload', $config);
		for ($i = 1; $i <= 2; $i++) {

			if (!empty($_FILES['upload' . $i]['name'])) {
				if (!$this->upload->do_upload('upload' . $i)) {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('msgEror', '<div class="alert alert-danger" role="alert">' . $error . '</div>');
					redirect('permintaan_sendiri');
				} else {
					$data = $this->upload->data();
				}
			}
		}
		echo "OKE";
	}
}
