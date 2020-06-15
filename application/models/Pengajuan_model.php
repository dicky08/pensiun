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

	function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	public function uploadFile($name, $url, $path)
	{
		if (!file_exists($path))
			mkdir($path);

		$jumlah = count($_FILES[$name]['name']);
		if ($jumlah > 0) {
			# code...
			# code...
			$gambar = [];
			for ($i = 0; $i < $jumlah; $i++) {
				$file_name = $_FILES[$name]['name'][$i];
				$size = $_FILES[$name]['size'][$i];
				$tmp = $_FILES[$name]['tmp_name'][$i];
				$error = $_FILES[$name]['error'][$i];

				$gambar[$i] = $file_name;

				$ektensi = ['jpg', 'jpeg', 'png'];
				$pecah = explode(".", $gambar[$i]);
				$eks = strtolower(end($pecah));

				if (!in_array($eks, $ektensi)) {
					# code...
					$eror = "Format upload tidak sesuai!";
					$this->session->set_flashdata('msgEror', '<div class="alert alert-danger" role="alert">' . $eror . '</div>');
					redirect('pengajuan/' . $url);
				}
				if ($size > 1000000) {
					# code...
					$eror = "Upload melebihi batas ukuran!";
					$this->session->set_flashdata('msgEror', '<div class="alert alert-danger" role="alert">' . $eror . '</div>');
					redirect('pengajuan/' . $url);
				}
				$namaBaru = uniqid();
				$pech = explode(".", $gambar[$i]);
				$ekstensi = end($pech);
				$gbr[$i] = $namaBaru . ".$ekstensi";
				move_uploaded_file($tmp, $path . $namaBaru . ".$ekstensi");
			}

			$data = [
				$gbr[0],
				$gbr[1],
				$gbr[2],
				$gbr[3],
				$gbr[4],
				$gbr[5],
				$gbr[6],
				$gbr[7]
			];
			return $data;
		}
	}
	function uploadFIleLanjutan($name, $url, $path)
	{
		if (!file_exists($path))
			mkdir($path);

		$jumlah = count($_FILES[$name]['name']);
		if ($jumlah > 0) {
			# code...
			# code...
			$gambar = [];
			for ($i = 0; $i < $jumlah; $i++) {
				$file_name = $_FILES[$name]['name'][$i];
				$size = $_FILES[$name]['size'][$i];
				$tmp = $_FILES[$name]['tmp_name'][$i];
				$error = $_FILES[$name]['error'][$i];

				$gambar[$i] = $file_name;


				if ($error == 4) {
					# code...
					$eror = "File tidak boleh kosong!";
					$this->session->set_flashdata('msgEror', '<div class="alert alert-danger" role="alert">' . $eror . '</div>');
					redirect('pengajuan/' . $url);
				}
				$ektensi = ['jpg', 'jpeg', 'png'];
				$pecah = explode(".", $gambar[$i]);
				$eks = strtolower(end($pecah));

				if (!in_array($eks, $ektensi)) {
					# code...
					$eror = "Format upload tidak sesuai!";
					$this->session->set_flashdata('msgEror', '<div class="alert alert-danger" role="alert">' . $eror . '</div>');
					redirect('pengajuan/' . $url);
				}
				if ($size > 1000000) {
					# code...
					$eror = "Upload melebihi batas ukuran!";
					$this->session->set_flashdata('msgEror', '<div class="alert alert-danger" role="alert">' . $eror . '</div>');
					redirect('pengajuan/' . $url);
				}
				$namaBaru = uniqid();
				$pech = explode(".", $gambar[$i]);
				$ekstensi = end($pech);
				$gbr[$i] = $namaBaru . ".$ekstensi";
				move_uploaded_file($tmp, $path . $namaBaru . ".$ekstensi");
			}

			$data = [
				$gbr[0],
				$gbr[1],
				$gbr[2],
				$gbr[3],
				$gbr[4],
				$gbr[5],
				$gbr[6],
				$gbr[7]
			];
			return $data;
		}
	}






	function joinKategori($nip)
	{
		$this->db->SELECT('pengajuan_pensiun.*,kategori.id_kategori as id,kategori.nama_kategori,pegawai.*')
			->FROM('pengajuan_pensiun')
			->JOIN('pegawai', "pengajuan_pensiun.nip=pegawai.nip")
			->JOIN('kategori', 'kategori.id_kategori=pengajuan_pensiun.id_kategori')
			->WHERE("pengajuan_pensiun.nip", $nip);
		return $this->db->get();
	}
}
