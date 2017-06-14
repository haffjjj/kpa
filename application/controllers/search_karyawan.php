<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_karyawan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model("m_karyawan");
		$this->load->model("Model_login");
		$this->load->helper("url_helper");
		if($this->session->userdata('level') <> '0')
		{
			redirect('login');
		}
	}
	public function index()
	{
		$d['username'] = $this->session->userdata('username');
		$d['position'] = 'karyawan';/* haffjjjj */
		$this->load->view('/kpa/dashboard/karyawan/v_search',$d);
	}
}
