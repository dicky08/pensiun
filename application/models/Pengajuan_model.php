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
}
