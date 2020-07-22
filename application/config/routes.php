<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['info'] = 'home/info';

// ADMIN
$route['admin'] = 'admin';
$route['adminLogin'] = 'admin/login';
$route['adminLogout'] = 'admin/logout';
$route['dashboard'] = 'admin/dashboard';
$route['data-pegawai'] = 'admin/data_pegawai';
$route['data-pengajuan-all'] = 'admin/data_pengajuan_all';
$route['list_jd'] = 'admin/janda_duda';
$route['list_bu'] = 'admin/batas_usia';
$route['list_ps'] = 'admin/permintaan_sendiri';
$route['cancel'] = 'admin/cancel';
$route['cetakDataPengajuan'] = 'admin/cetakDataPengajuan';


$route['register'] = 'auth/registrasi';
$route['login']    = 'auth';
$route['pengajuan'] = 'auth';

// JANDA DUDA
$route['janda_duda'] = 'pengajuan/janda_duda';
$route['upload_janda_duda'] = 'pengajuan/upload_janda_duda';
$route['upload_lanjut_pengajuan_janda'] = 'pengajuan/upload_lanjut_pengajuan_janda';

// BATAS USIA
$route['batas_usia'] = 'pengajuan/batas_usia';
$route['upload-batas-usia'] = 'pengajuan/upload_batas_usia';
$route['lanjutan_upload_batas_usia'] = 'pengajuan/upload_lanjutan_batas_usia';

// PERMINTAAN SENDIRI
$route['kemauan-sendiri'] = 'pengajuan/permintaan_sendiri';
$route['upload_permintaan_sendiri'] = 'pengajuan/upload_permintaan_sendiri';
$route['lanjutkan_upload'] = 'pengajuan/lanjutkan_upload';

// LIHAT PENGAJUAN
$route['lihat_pengajuan'] = 'pengajuan/lihat_pengajuan';


$route['upload_data'] = 'pengajuan/upload_permintaan_sendiri';
$route['lihat-pengajuan/(:any)'] = 'pengajuan/lihat_pengajuan/$1';
$route['logout'] = 'auth/logout';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
