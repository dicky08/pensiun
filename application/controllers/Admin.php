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
}
