<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan extends CI_Controller{
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

	public function index(){
		$input_project = "";
		$input_triwulan = 1;
		$input_tahun = 2017;
		$input_anggaran = "";
		$input_jenis_kegiatan = "";

		$d['in_project'] = "";
		$d['in_tw'] = "";
		$d['in_tahun'] = "";
		$d['in_anggaran'] = "";
		$d['in_jenis_kegiatan'] = "";

		$d['title'] = 'Login';
		$d['judul'] = 'Masukkan Username dan Password';
		$d['username'] = $this->session->userdata('username');
		$d['level'] = 'Karyawan';
		$this->load->view('/kpa/dashboard/karyawan/v_dashboard',$d);

		$get_project = $this->m_karyawan->getData_project($input_project,$input_anggaran);
/* haffjjj */
		$triwulan = 1;
		$tahun = date('Y');
		$no = 1;
		foreach ($get_project as $row_project){

			$id_project = $row_project['id_project'];
			$get_total_anggaran = $this->m_karyawan->getData_total_anggaran($id_project,$triwulan,$tahun);
			$get_total_penyerapan = $this->m_karyawan->getData_total_penyerapan($id_project,$triwulan,$tahun);
			$get_penyerapan = $this->m_karyawan->getData_penyerapan($id_project,$triwulan,$tahun,$input_jenis_kegiatan);

			foreach ($get_total_anggaran as $row_anggaran){ $total_anggaran = $row_anggaran['totalanggaran'];}
			foreach ($get_total_penyerapan as $row_penyerapan){ $total_penyerapan = $row_penyerapan['totalpenyerapan'];}


			$g['get_project'] = $row_project;
			$g['total_anggaran'] = $total_anggaran;
			$g['total_penyerapan'] = $total_penyerapan;
			$g['triwulan'] = $triwulan;
			$g['tahun'] = $tahun;
			$this->load->view('/kpa/dashboard/karyawan/v_dashboard-table-tw-tahun',$g);
			$this->load->view('/kpa/dashboard/karyawan/v_dashboard-table',$g);

			foreach ($get_penyerapan as $row_penyerapan){
				$g['get_penyerapan'] = $row_penyerapan;
				$g['no'] = $no++;
				$this->load->view('/kpa/dashboard/karyawan/v_dashboard-table-table',$g);
			}

			$this->load->view('/kpa/dashboard/karyawan/v_dashboard-table-footer');
		}
		$this->load->view('/kpa/dashboard/karyawan/v_dashboard-footer');
	}

	public function search(){
		$in_project = $this->input->post('project');
		$in_tw = $this->input->post('tw');
		$in_tahun = $this->input->post('tahun');
		$in_anggaran = $this->input->post('anggaran');
		$in_jenis_kegiatan = $this->input->post('jenis-kegiatan');

		if ($in_project <> "") {
			$input_project = "where nama_project = '$in_project'";
			$eks = "and";
		}
		else{
			$input_project = "";
			$eks = "where";
		}

		if ($in_tw <> "") {
			$input_triwulan = $in_tw;
		}
		else{
			$input_triwulan = 1;
		}

		if ($in_tahun <> "") {
			$input_tahun = $in_tahun;
		}
		else{
			$input_tahun = date('Y');
		}

		if ($in_anggaran <> "") {
			$input_anggaran = "$eks jenis_anggaran = '$in_anggaran'";
		}
		else{
			$input_anggaran = "";
		}

		if ($in_jenis_kegiatan <> "") {
			$input_jenis_kegiatan = "and jenis_kegiatan = '$in_jenis_kegiatan'";
		}
		else{
			$input_jenis_kegiatan = "";
		}

		$d['in_project'] = $in_project;
		$d['in_tw'] = $in_tw;
		$d['in_tahun'] = $in_tahun;
		$d['in_anggaran'] = $in_anggaran;
		$d['in_jenis_kegiatan'] = $in_jenis_kegiatan;

		$d['title'] = 'Login';
		$d['judul'] = 'Masukkan Username dan Password';
		$d['username'] = $this->session->userdata('username');
		$d['level'] = 'Karyawan';
		$this->load->view('/kpa/dashboard/karyawan/v_dashboard',$d);

		$get_project = $this->m_karyawan->getData_project($input_project,$input_anggaran);

		$triwulan = $input_triwulan;
		$tahun = $input_tahun;
		$no = 1;
		foreach ($get_project as $row_project){

			$id_project = $row_project['id_project'];
			$get_total_anggaran = $this->m_karyawan->getData_total_anggaran($id_project,$triwulan,$tahun);
			$get_total_penyerapan = $this->m_karyawan->getData_total_penyerapan($id_project,$triwulan,$tahun);
			$get_penyerapan = $this->m_karyawan->getData_penyerapan($id_project,$triwulan,$tahun,$input_jenis_kegiatan);

			foreach ($get_total_anggaran as $row_anggaran){ $total_anggaran = $row_anggaran['totalanggaran'];}
			foreach ($get_total_penyerapan as $row_penyerapan){ $total_penyerapan = $row_penyerapan['totalpenyerapan'];}

			$g['get_project'] = $row_project;
			$g['total_anggaran'] = $total_anggaran;
			$g['total_penyerapan'] = $total_penyerapan;
			$g['triwulan'] = $triwulan;
			$g['tahun'] = $tahun;
			$this->load->view('/kpa/dashboard/karyawan/v_dashboard-table-tw-tahun',$g);
			$this->load->view('/kpa/dashboard/karyawan/v_dashboard-table',$g);

			foreach ($get_penyerapan as $row_penyerapan){
				$g['get_penyerapan'] = $row_penyerapan;
				$g['no'] = $no++;
				$this->load->view('/kpa/dashboard/karyawan/v_dashboard-table-table',$g);
			}

			$this->load->view('/kpa/dashboard/karyawan/v_dashboard-table-footer');
		}
		$this->load->view('/kpa/dashboard/karyawan/v_dashboard-footer');
	}

	public function ajax_project(){
		$input_anggaran = "";
		$input_jenis_kegiatan = "";
		$input_project = $this->input->post('id_project');
		if ($input_project <> "") {
			$input_project = "where id_project = '$input_project'";
		}
		$triwulan = $this->input->post('triwulan');
		$tahun = $this->input->post('tahun');
		$get_project = $this->m_karyawan->getData_project($input_project,$input_anggaran);
		$no = 1;
		foreach ($get_project as $row_project){

			$id_project = $row_project['id_project'];
			$get_total_anggaran = $this->m_karyawan->getData_total_anggaran($id_project,$triwulan,$tahun);
			$get_total_penyerapan = $this->m_karyawan->getData_total_penyerapan($id_project,$triwulan,$tahun);
			$get_penyerapan = $this->m_karyawan->getData_penyerapan($id_project,$triwulan,$tahun,$input_jenis_kegiatan);

			foreach ($get_total_anggaran as $row_anggaran){ $total_anggaran = $row_anggaran['totalanggaran'];}
			foreach ($get_total_penyerapan as $row_penyerapan){ $total_penyerapan = $row_penyerapan['totalpenyerapan'];}

			$g['get_project'] = $row_project;
			$g['total_anggaran'] = $total_anggaran;
			$g['total_penyerapan'] = $total_penyerapan;
			$g['triwulan'] = $triwulan;
			$g['tahun'] = $tahun;
			$this->load->view('/kpa/dashboard/karyawan/v_dashboard-table',$g);

			foreach ($get_penyerapan as $row_penyerapan){
				$g['get_penyerapan'] = $row_penyerapan;
				$g['no'] = $no++;
				$this->load->view('/kpa/dashboard/karyawan/v_dashboard-table-table',$g);
			}

			$this->load->view('/kpa/dashboard/karyawan/v_dashboard-table-footer');
		}
	}

	public function ajax_anggaran(){
		$bulanstr = $this->input->post('bulan');
		$bulan = substr($bulanstr,5,-3);
		$tahun = substr($bulanstr,0,-6);
		$id_project = $this->input->post('id_project');
		$anggaran = $this->m_karyawan->getData_anggaran_ajax($id_project,$bulan,$tahun);
		foreach ($anggaran as $row) {
			echo $row['jumlah'];
		}
	}

	public function ajax_modal_add(){
		$id_project = $this->input->post('id_project');
		$triwulan = $this->input->post('triwulan');
		$tahun = $this->input->post('tahun');
		$d['id_project'] = $id_project;
		$d['triwulan'] = $triwulan;
		$d['tahun'] = $tahun;
		$this->load->view('/kpa/dashboard/karyawan/v_modal_add',$d);
	}

	public function ajax_modal_edit(){
		$id_penyerapan = $this->input->post('id_penyerapan');
		$data['op'] = 'edit';
		$data['sql'] = $this->m_karyawan->edit_penyerapan($id_penyerapan);
		$this->load->view('/kpa/dashboard/karyawan/v_modal_edit',$data);
	}

	public function add_penyerapan(){
		$op = $this->input->post('op');
		$id_project = $this->input->post('id_project');
		$triwulan = $this->input->post('triwulan');
		$tahun = $this->input->post('tahun');
		$id_penyerapan = $this->input->post('id_penyerapan');
		$nama_kegiatan = $this->input->post('nama_kegiatan');
		$jenis_kegiatan = $this->input->post('jenis_kegiatan');
		$tanggal = $this->input->post('tanggal');
		$status = $this->input->post('status');
		$jumlah = $this->input->post('jumlah');
		$submited = $this->session->userdata('username');
		$tanggal_submit = date("Y.m.d");
		$data = array(
			'id_penyerapan' => '',
			'id_project' => $id_project,
			'triwulan' => $triwulan,
			'tahun' => $tahun,
			'nama_kegiatan' => $nama_kegiatan,
			'jenis_kegiatan' => $jenis_kegiatan,
			'tanggal' => $tanggal,
			'status' => $status,
			'jumlah' => $jumlah,
			'submited' => $submited,
			'tanggal_submit' => $tanggal_submit,
			);
		$data_update = array(
			'nama_kegiatan' => $nama_kegiatan,
			'jenis_kegiatan' => $jenis_kegiatan,
			'tanggal' => $tanggal,
			'status' => $status,
			'jumlah' => $jumlah,
			'submited' => $submited,
			'tanggal_submit' => $tanggal_submit,
			);

		if($op=="tambah"){
			$this->m_karyawan->add_penyerapan($data);
		}
		else{
			$this->m_karyawan->update_penyerapan($id_penyerapan,$data_update);
		}
		redirect('karyawan');
	}
	public function hapus_penyerapan($id_penyerapan){
		$this->m_karyawan->hapus_penyerapan($id_penyerapan);
		redirect('karyawan');

	}

	public function export($id_project,$triwulan,$tahun){
		$input_jenis_kegiatan = "";
		$d['penyerapan'] = $this->m_karyawan->getData_penyerapan($id_project,$triwulan,$tahun,$input_jenis_kegiatan);
		$this->load->view('/kpa/dashboard/karyawan/v_export',$d);
	}

}
