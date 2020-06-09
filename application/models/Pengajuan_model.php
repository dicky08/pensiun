<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan_model extends CI_Model
{
	function getAll($table)
	{
		return $this->db->get($table);
	}
	function getOneData($data, $table)
	{
		return $this->db->get_where($table, $data);
	}
	function insert_data($data, $table)
	{
		return $this->db->insert($table, $data);
	}

	function uploadData($ekstensiPdf, $sizePdf, $nameUpload)
	{

		$config = [
			'upload_path'          => './assets/img_pengajuan/permintaan_sendiri',
			'allowed_types'        => $ekstensiPdf,
			'max_size'             => $sizePdf,
		];
		// $config = [
		// 	'upload_path'          => './assets/img_pengajuan/permintaan_sendiri',
		// 	'allowed_types'        => $ekstensiJpg,
		// 	'max_size'             => $sizeJpg,
		// ];

		$this->load->library('upload', $config);
		if ($this->upload->do_upload($nameUpload)) {
			$img = $this->upload->data();

			return $img;
			// $this->pengajuan->insert_data($namaGambar, 'pengajuan');
		} else {
			// EROR Upload
			$error = $this->upload->display_errors();
			$this->session->set_flashdata('msgEror', '<div class="alert alert-danger" role="alert">' . $error . '</div>');
			redirect('permintaan_sendiri');
		}
	}
}
