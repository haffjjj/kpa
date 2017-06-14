<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sekretaris extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('level') <> '2')
		{
			redirect('login');
		}
	}

	public function index(){
		$d['title'] = 'Login';
		$d['judul'] = 'Masukkan Username dan Password';
		$d['username']/* haffjjjj */ = $this->session->userdata('username');
		$d['page'] = 'sekretaris';
		$this->load->view('logout', $d);
	}
}