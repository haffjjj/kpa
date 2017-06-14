<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller{
	public function index(){
		$d['title'] = 'Login';
		$d['judul'] = 'Masukkan Username dan Password';
		if($this->session->userdata('level') == '0')
		{
			redirect('karyawan');
		}
		elseif ($this->session->userdata('level') == '1') 
		{
			redirect('admin');
		}
		elseif ($this->session->userdata('level') == '2') 
		{
			redirect('sekertaris');
		}
		$this->load->view('/kpa/login/v_login', $d);
	}

	function log_in()
	{
		$nik = $this->input->post('nik');
		$password = $this->input->post('password');
		$where = array(
			'nik' => $nik,
			'password' => $password,
			);
		$temp=md5($password);
		/* haffjjjj */
		$cek = $this->model_login->cek($nik, $temp);
		if($cek->num_rows() == 1)
		{
			foreach($cek->result() as $data){
				$sess_data['nik'] = $data->nik;
				$sess_data['username'] = $data->username;
				$sess_data['level'] = $data->level;
				$this->session->set_userdata($sess_data);
			}

			if($this->session->userdata('level') == '1')
			{
				redirect('admin');
			}
			if($this->session->userdata('level') == '2')
			{
				redirect('sekretaris');
			}
			elseif($this->session->userdata('level') == '0')
			{
				redirect('search_karyawan');
			}
		}
		else
		{
			$this->session->set_flashdata('pesan', 'Maaf, kombinasi username dengan password salah.');
			redirect('login');
		}
	}

	function sign_out()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
