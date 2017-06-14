<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_login extends CI_Model{
	function cek($nik, $password){
		$this->db->where('nik', $nik);
		$this->db->where('password', $password);
		return $this->db->get('tbl_m_user');
	}
}
?>