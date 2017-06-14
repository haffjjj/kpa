<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model("m_admin");
		$this->load->model("Model_login");
		$this->load->helper("url_helper");
		if($this->session->userdata('level') <> '1')
		{
			redirect('login');
		}
	}

	public function index(){
		$d['title'] = 'Login';
		$d['judul'] = 'Masukkan Username dan Password';
		$d['username'] = $this->session->userdata('username');
		$d['page'] = 'admin';
		$d['user'] = $this->m_admin->getData_user();
		$d['group'] = $this->m_admin->getData_group();
		$d['project'] = $this->m_admin->getData_project();
		$this->load->view('/kpa/dashboard/admin/v_dashboard', $d);
	}

/* Group */
	public function create_group(){
		$op = $this->input->post('op');
		$id_group = $this->input->post('id_group');
		$nama_group = $this->input->post('nama_group');
		$nama_bidang = $this->input->post('nama_bidang');
		$data = array(
			'id_group' => "",
			'nama_group' => $nama_group,
			'nama_bidang' => $nama_bidang,
			);
		$data_update = array(
			'nama_group' => $nama_group,
			'nama_bidang' => $nama_bidang,
			);
		if($op=="tambah"){
			$this->m_admin->create_group($data);
		}
		else{
			$this->m_admin->update_group($id_group,$data_update);
		}
		redirect('admin');
	}

	public function modal_edit_group(){
		$id_group = $this->input->post('id_group');
		$d['group'] = $this->m_admin->editData_group($id_group);
		$this->load->view('/kpa/dashboard/admin/v_modal_edit_group',$d);
	}


/* User */
	public function create_user(){
		$op = $this->input->post('op');
		$nik = $this->input->post('nik');
		$member_group = $this->input->post('member_group');
		$level = $this->input->post('level');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$pass_encrypt = md5($password);
		$data = array(
			'nik' => $nik,
			'level' => $level,
			'username' => $username,
			'password' => $pass_encrypt,
			'id_group' => $member_group,
			);
		$data_update = array(
			'username' => $username,
			'level' => $level,
			);

		if($op=="tambah"){
			$this->m_admin->create_user($data);
		}
		else{
			$this->m_admin->update_user($nik,$data_update);
		}
		redirect('admin');
	}
	public function modal_edit_user(){
		$nik = $this->input->post('nik');
		$d['user'] = $this->m_admin->editData_user($nik);
		$this->load->view('/kpa/dashboard/admin/v_modal_edit_user',$d);
	}

	public function delete_user($nik){
		$this->m_admin->delete_user($nik);
		redirect('admin');
	}

/* Project */
	public function create_project(){
		$op = $this->input->post('op');
		$id_project = $this->input->post('id_project');
		$nama_project = $this->input->post('nama_project');
		$jenis_anggaran = $this->input->post('jenis_anggaran');
		$data = array(
			'id_group' => "",
			'nama_project' => $nama_project,
			'jenis_anggaran' => $jenis_anggaran,
			);
		$data_update = array(
			'nama_project' => $nama_project,
			'jenis_anggaran' => $jenis_anggaran,
			);
		if($op=="tambah"){
			$this->m_admin->create_project($data);
		}
		else{
			$this->m_admin->update_project($id_project,$data_update);
		}
		redirect('admin');
	}
	public function modal_edit_project(){
		$id_project = $this->input->post('id_project');
		$d['project'] = $this->m_admin->editData_project($id_project);
		$this->load->view('/kpa/dashboard/admin/v_modal_edit_project',$d);
	}

/* Anggaran */
	public function input_anggaran(){
		$op = $this->input->post('op');
		$id_project = $this->input->post('project');
		$bulan = $this->input->post('bulan');
		$jumlah = $this->input->post('jumlah');
		$triwulan = $this->input->post('triwulan');
		$tahun = $this->input->post('tahun');
		$data = array(
			'id_project' => $id_project,
			'bulan' => $bulan,
			'jumlah' => $jumlah,
			'triwulan' => $triwulan,
			'tahun' => $tahun,
			);
		if ($op == "tambah") {
			$this->m_admin->input_anggaran($data);
		}
		else{
			$this->m_admin->update_anggaran($id_project,$bulan,$jumlah,$tahun);
		}
		redirect('admin');
	}
	public function ajax_triwulan_anggaran(){
		$triwulan = $this->input->post('triwulan_anggaran');
		if ($triwulan == 1) {
			echo "<option value='1'>1</option>
			<option value='2'>2</option>
			<option value='3'>3</option>";
		}
		elseif ($triwulan == 2) {
			echo "<option value='4'>4</option>
			<option value='5'>5</option>
			<option value='6'>6</option>";
		}
		elseif ($triwulan == 3) {
			echo "<option value='7'>7</option>
			<option value='8'>8</option>
			<option value='9'>9</option>";
		}
		elseif ($triwulan == 4){
			echo "<option value='10'>10</option>
			<option value='11'>11</option>
			<option value='12'>12</option>";
		}
	}
	public function ajax_anggaran(){
		$id_project = $this->input->post('data_anggaran');
		$d['anggaran'] = $this->m_admin->getData_anggaran($id_project);
		$this->load->view('/kpa/dashboard/admin/v_ajax_anggaran',$d);
	}
	public function modal_edit_anggaran(){
		$id_project = $this->input->post('id_project');
		$bulan = $this->input->post('bulan');
		$d['anggaran'] = $this->m_admin->editData_anggaran($id_project,$bulan);
		$this->load->view('/kpa/dashboard/admin/v_modal_edit_anggaran',$d);
	}
	public function delete_anggaran($id_project,$bulan){
		$this->m_admin->delete_anggaran($id_project,$bulan);
		redirect('admin');
	}
}

/* haffjjjj */