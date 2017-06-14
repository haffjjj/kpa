<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class M_karyawan extends CI_Model{

	public function __construct(){
		$this->load->database();
	}


	public function getData_project($input_project,$input_anggaran){
		$query = $this->db->query("SELECT * FROM `tbl_project` $input_project $input_anggaran");
		return $query->result_array();
	}
	public function getData_total_anggaran($id_project,$triwulan,$tahun){
		$query = $this->db->query("SELECT sum(jumlah) as totalanggaran FROM `tbl_anggaran` WHERE triwulan = $triwulan and id_project = $id_project and tahun = $tahun");
		return $query->result_array();
	}
	public function getData_total_penyerapan($id_project,$triwulan,$tahun){
		$query = $this->db->query("SELECT sum(jumlah) as totalpenyerapan FROM `tbl_penyerapan` WHERE triwulan = $triwulan and id_project = $id_project and tahun = $tahun");
		return $query->result_array();
	}


	/* Tabel Penyerapan */
	public function getData_penyerapan($id_project,$triwulan,$tahun,$input_jenis_kegiatan){
		$query = $this->db->query("SELECT * FROM `tbl_penyerapan` WHERE id_project = $id_project and triwulan = $triwulan and tahun = $tahun $input_jenis_kegiatan");
		return $query->result_array();
	}
	public function getData_anggaran_ajax($id_project,$bulan,$tahun){
		$query = $this->db->query("SELECT * FROM `tbl_anggaran` where id_project = $id_project and bulan = $bulan and tahun = $tahun");
		return $query->result_array();
	}
	public function add_penyerapan($data){
		$this->db->insert('tbl_penyerapan',$data);
	}
	public function edit_penyerapan($id_penyerapan){
		$this->db->where("id_penyerapan",$id_penyerapan);
		return $this->db->get('tbl_penyerapan');
	}
	public function update_penyerapan($id_penyerapan,$data_update){
		$this->db->where("id_penyerapan",$id_penyerapan);
		$this->db->update('tbl_penyerapan',$data_update);
		$this->load->database();
	}
	public function hapus_penyerapan($id_penyerapan){
		$this->db->where("id_penyerapan", $id_penyerapan);
		$this->db->delete('tbl_penyerapan');
	}
}
?>