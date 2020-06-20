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

	public function index()
	{
		redirect('pegawai');
	}
	public function janda_duda()
	{
		$sesi = $this->sesi;
		$data['sesi'] = $sesi;
		$join = $this->pengajuan->getOneData(['username' => $sesi['username']], 'pegawai')->row_array();
		$data['title'] = "Upload Pengajuan Janda/Duda";
		$this->load->view('templates_user/header', $data);
		$this->load->view('templates_user/navbar', $data);
		$this->load->view('pengajuan/janda_duda', $data);
		$this->load->view('templates_user/footer');
	}

	public function upload_janda_duda()
	{
		$sesi = $this->sesi;
		$data['sesi'] = $sesi;

		$gbr = $this->pengajuan->uploadFIle('upload_file', 'janda_duda', "./assets/img-pengajuan/janda_duda/");
		$upload = [
			'tgl_pengajuan'	 		=> date('Y-m-d'),
			'nip'					=> $sesi['nip'],
			'id_kategori'			=> 1,
			'id_admin'				=> 0,
			'photo'					=> $gbr[0],
			'karpeg'				=> $gbr[1],
			'sk_cpns'				=> $gbr[2],
			'sk_pns'				=> $gbr[3],
			'sk_pangkat_terakhir' 	=> $gbr[4],
			'kenaikan_gaji_terakhir' => $gbr[5],
			'jabatan_terakhir' 		=> $gbr[6],
			'sk_terakhir' 			=> $gbr[7]
		];
		$this->pengajuan->insert_data($upload, 'pengajuan_pensiun');
		$this->session->set_flashdata('msgOke', '<div class="alert alert-success" role="alert">Upload berhasil. </div>');

		$sesi = $this->sesi;
		$data['sesi'] = $sesi;
		$nip = $this->pengajuan->getOneData(['nip' => $sesi['nip']], 'pengajuan_pensiun')->row_array();
		$data['nip'] = $nip;

		$data['title'] = "Upload Pengajuan ";
		$this->load->view('templates_user/header', $data);
		$this->load->view('templates_user/navbar', $data);
		$this->load->view('pengajuan/lanjut_pengajuan_janda_duda', $data);
		$this->load->view('templates_user/footer');
	}

	public function view_lanjutan_pengajuan_janda_duda()
	{
		$sesi = $this->sesi;
		$data['sesi'] = $sesi;
		$nip = $this->pengajuan->getOneData(['nip' => $sesi['nip']], 'pengajuan_pensiun')->row_array();
		$data['nip'] = $nip;

		$data['title'] = "Upload Pengajuan Janda Duda";
		$this->load->view('templates_user/header', $data);
		$this->load->view('templates_user/navbar', $data);
		$this->load->view('pengajuan/lanjut_pengajuan_janda_duda', $data);
		$this->load->view('templates_user/footer');
	}

	public function upload_lanjut_pengajuan_janda()
	{
		$sesi = $this->sesi;
		$data['sesi'] = $sesi;

		$gbr = $this->pengajuan->uploadFIle('upload_file', 'view_lanjutan_pengajuan_janda_duda', "./assets/img-pengajuan/janda_duda/");

		$nip = $this->input->post('nip');
		$where = ['nip' => $nip];
		$uploadLanjutan = [
			'sasaran_kinerja'	=> $gbr[0],
			'ktp'				=> $gbr[1],
			'surat_nikah'		=> $gbr[2],
			'kartu_keluarga'	=> $gbr[3],
			'akta_kelahiran' 	=> $gbr[4],
			'surat_kuliah_anak' => $gbr[5],
			'surat_kematian' 	=> $gbr[6],
			'surat_janda_duda' 	=> $gbr[7],
			'status' 			=> 'proccess'
		];
		$this->pengajuan->update_data($where, $uploadLanjutan, 'pengajuan_pensiun');
		$this->session->set_flashdata('msgOke', '<div class="alert alert-success" role="alert">Upload berhasil. Tahp selanjutnya tinggal menunggu konfirmasi dari admin &#177; selama 5 bulan terhitung mulai dari tanggal pengajuan sekarang! </div>');

		redirect('lihat_pengajuan');
	}

	public function batas_usia()
	{
		$sesi = $this->sesi;
		$data['sesi'] = $sesi;
		$data['title'] = "Upload Pengajuan Batas Usia";
		$this->load->view('templates_user/header', $data);
		$this->load->view('templates_user/navbar', $data);
		$this->load->view('pengajuan/batas_usia', $data);
		$this->load->view('templates_user/footer');
	}

	public function upload_batas_usia()
	{
		$sesi = $this->sesi;
		$data['sesi'] = $sesi;

		$gbr = $this->pengajuan->uploadFIle('upload_file', 'batas_usia', "./assets/img-pengajuan/batas_usia/");
		$upload = [
			'tgl_pengajuan'	 		=> date('Y-m-d'),
			'nip'					=> $sesi['nip'],
			'id_kategori'			=> 2,
			'id_admin'				=> 0,
			'photo'					=> $gbr[0],
			'karpeg'				=> $gbr[1],
			'sk_cpns'				=> $gbr[2],
			'sk_pns'				=> $gbr[3],
			'sk_pangkat_terakhir' 	=> $gbr[4],
			'kenaikan_gaji_terakhir' => $gbr[5],
			'jabatan_terakhir' 		=> $gbr[6],
			'sk_terakhir' 			=> $gbr[7]
		];
		$this->pengajuan->insert_data($upload, 'pengajuan_pensiun');
		$this->session->set_flashdata('msgOke', '<div class="alert alert-success" role="alert">Upload berhasil. </div>');
		redirect('pengajuan/view_lanjutan_batas_usia');
	}

	public function view_lanjutan_batas_usia()
	{
		$sesi = $this->sesi;
		$data['sesi'] = $sesi;
		$nip = $this->pengajuan->getOneData(['nip' => $sesi['nip']], 'pengajuan_pensiun')->row_array();
		$data['nip'] = $nip;

		$data['title'] = "Upload Lanjutan Batas Usia";
		$this->load->view('templates_user/header', $data);
		$this->load->view('templates_user/navbar', $data);
		$this->load->view('pengajuan/view_lanjutan_batas_usia', $data);
		$this->load->view('templates_user/footer');
	}

	public function upload_lanjutan_batas_usia()
	{
		$sesi = $this->sesi;
		$data['sesi'] = $sesi;

		$gbr = $this->pengajuan->uploadFIle('upload_file', 'view_lanjutan_batas_usia', "./assets/img-pengajuan/batas_usia/");

		$nip = $this->input->post('nip');
		$where = ['nip' => $nip];
		$uploadLanjutan = [
			'sasaran_kinerja'	=> $gbr[0],
			'ktp'				=> $gbr[1],
			'surat_nikah'		=> $gbr[2],
			'kartu_keluarga'	=> $gbr[3],
			'akta_kelahiran' 	=> $gbr[4],
			'surat_kuliah_anak' => $gbr[5],
			'surat_kematian' 	=> $gbr[6],
			'surat_janda_duda' 	=> $gbr[7],
			'status' 			=> 'proccess'
		];
		$this->pengajuan->update_data($where, $uploadLanjutan, 'pengajuan_pensiun');
		$this->session->set_flashdata('msgOke', '<div class="alert alert-success" role="alert">Upload berhasil. Tahp selanjutnya tinggal menunggu konfirmasi dari admin &#177; selama 5 bulan terhitung mulai dari tanggal pengajuan sekarang! </div>');
		redirect('pengajuan/lihat_pengajuan');
	}
	public function permintaan_sendiri()
	{
		$sesi = $this->sesi;
		$data['sesi'] = $sesi;

		$data['title'] = "Upload Pengajuan Permintaan Sendiri";
		$this->load->view('templates_user/header', $data);
		$this->load->view('templates_user/navbar', $data);
		$this->load->view('pengajuan/permintaan_sendiri', $data);
		$this->load->view('templates_user/footer');
	}

	public function upload_permintaan_sendiri()
	{
		$sesi = $this->sesi;
		$data['sesi'] = $sesi;

		$gbr = $this->pengajuan->uploadFIle('upload_file', 'permintaan_sendiri', "./assets/img-pengajuan/permintaan-sendiri/");
		$upload = [
			'tgl_pengajuan'	 		=> date('Y-m-d'),
			'nip'					=> $sesi['nip'],
			'id_kategori'			=> 3,
			'id_admin'				=> 0,
			'photo'					=> $gbr[0],
			'karpeg'				=> $gbr[1],
			'sk_cpns'				=> $gbr[2],
			'sk_pns'				=> $gbr[3],
			'sk_pangkat_terakhir' 	=> $gbr[4],
			'kenaikan_gaji_terakhir' => $gbr[5],
			'jabatan_terakhir' 		=> $gbr[6],
			'sk_terakhir' 			=> $gbr[7]
		];
		$this->pengajuan->insert_data($upload, 'pengajuan_pensiun');
		$this->session->set_flashdata('msgOke', '<div class="alert alert-success" role="alert">Upload berhasil. </div>');
		redirect('pengajuan/upload_lanjutan');
	}

	public function upload_lanjutan()
	{
		$sesi = $this->sesi;
		$data['sesi'] = $sesi;
		$nip = $this->pengajuan->getOneData(['nip' => $sesi['nip']], 'pengajuan_pensiun')->row_array();
		$data['nip'] = $nip;

		$data['title'] = "Upload Pengajuan Permintaan Sendiri";
		$this->load->view('templates_user/header', $data);
		$this->load->view('templates_user/navbar', $data);
		$this->load->view('pengajuan/lanjutkan_pengajuan', $data);
		$this->load->view('templates_user/footer');
	}
	public function lanjutkan_upload()
	{
		$sesi = $this->sesi;
		$data['sesi'] = $sesi;

		$gbr = $this->pengajuan->uploadFIle('upload_file', 'upload_lanjutan', "./assets/img-pengajuan/permintaan-sendiri/");

		$nip = $this->input->post('nip');
		$where = ['nip' => $nip];
		$uploadLanjutan = [
			'sasaran_kinerja'	=> $gbr[0],
			'ktp'				=> $gbr[1],
			'surat_nikah'		=> $gbr[2],
			'kartu_keluarga'	=> $gbr[3],
			'akta_kelahiran' 	=> $gbr[4],
			'surat_kuliah_anak' => 'null',
			'surat_kematian' 	=> 'null',
			'surat_janda_duda' 	=> 'null',
			'status' 			=> 'proccess'
		];
		$this->pengajuan->update_data($where, $uploadLanjutan, 'pengajuan_pensiun');
		$this->session->set_flashdata('msgOke', '<div class="alert alert-success" role="alert">Upload berhasil. Tahp selanjutnya tinggal menunggu konfirmasi dari admin &#177; selama 5 bulan terhitung mulai dari tanggal pengajuan sekarang! </div>');
		redirect('pengajuan/lihat_pengajuan');
	}
	public function lihat_pengajuan()
	{
		$sesi = $this->sesi;
		$data['sesi'] = $sesi;
		$data['pengajuan'] = $this->pengajuan->getOneData(['nip' => $sesi['nip']], 'pengajuan_pensiun')->row_array();
		$pengajuan = $data['pengajuan'];

		$joinKategori = $this->pengajuan->joinKategori($sesi['nip'])->row_array();
		$data['kategori'] 				= $joinKategori;
		$data['tglPengajuan'] 			= $joinKategori['tgl_pengajuan'];
		$data['nip'] 					= $joinKategori['nip'];
		$data['idKategori'] 			= $joinKategori['id_kategori'];
		$data['nama'] 					= $sesi['nama'];
		$data['kategori'] 				= $joinKategori['nama_kategori'];
		$data['photo'] 					= $joinKategori['photo'];
		$data['karpeg'] 				= $joinKategori['karpeg'];
		$data['sk_cpns'] 				= $joinKategori['sk_cpns'];
		$data['sk_pns'] 				= $joinKategori['sk_pns'];
		$data['sk_pangkat_terakhir']	= $joinKategori['sk_pangkat_terakhir'];
		$data['kenaikan_gaji_terakhir'] = $joinKategori['kenaikan_gaji_terakhir'];
		$data['jabatan_terakhir'] 		= $joinKategori['jabatan_terakhir'];
		$data['sk_terakhir'] 			= $joinKategori['sk_terakhir'];
		$data['sasaran_kinerja'] 		= $joinKategori['sasaran_kinerja'];
		$data['ktp'] 					= $joinKategori['ktp'];
		$data['surat_nikah'] 			= $joinKategori['surat_nikah'];
		$data['kartu_keluarga'] 		= $joinKategori['kartu_keluarga'];
		$data['akta_kelahiran'] 		= $joinKategori['akta_kelahiran'];

		$data['urlImage'] = '';
		if ($data['idKategori'] == 1) {
			$data['urlImage'] = 'assets/img-pengajuan/janda_duda/';
		} elseif ($data['idKategori'] == 2) {
			$data['urlImage'] = 'assets/img-pengajuan/batas_usia/';
		} else {
			$data['urlImage'] = 'assets/img-pengajuan/permintaan-sendiri/';
		}

		if (!isset($joinKategori)) {
			# code...
			redirect('pegawai');
		}
		$data['title'] = "Hasil Pengajuan";
		$this->load->view('templates_user/header', $data);
		$this->load->view('templates_user/navbar', $data);
		$this->load->view('pengajuan/lihat_pengajuan', $data);
		$this->load->view('templates_user/footer');
	}

	public function cetakSKPensiun()
	{
		$mpdf = new \Mpdf\Mpdf();


		$mpdf->WriteHTML('Hello World');


		$mpdf->Output('test.pdf', 'I');
	}
}
