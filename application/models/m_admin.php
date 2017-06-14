<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class M_admin extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

	/* Group */
	public function getData_group(){
		$query = $this->db->get('tbl_group');
		return $query->result_array();
	}
	public function create_group($data){
		$this->db->insert('tbl_group',$data);
	}
	public function editData_group($id_group){
		$query = $this->db->query("SELECT * FROM `tbl_group` where id_group = $id_group");
		return $query->result_array();
	}
	public function update_group($id_group,$data_update){
		$this->db->where("id_group",$id_group);
		$this->db->update('tbl_group',$data_update);
		$this->load->database();
	}


	/* User */
	public function getData_user(){
		$query = $this->db->get('tbl_m_user');
		return $query->result_array();
	}
	public function create_user($data){
		$this->db->insert('tbl_m_user',$data);
	}
	public function editData_user($nik){
		$query = $this->db->query("SELECT * FROM `tbl_m_user` where nik = $nik");
		return $query->result_array();
	}
	public function update_user($nik,$data_update){
		$this->db->where("nik",$nik);
		$this->db->update('tbl_m_user',$data_update);
		$this->load->database();
	}
	public function delete_user($nik){
		$this->db->where("nik", $nik);
		$this->db->delete('tbl_m_user');
	}


	/* Project */
	public function getData_project(){
		$query = $this->db->get('tbl_project');
		return $query->result_array();
	}
	public function create_project($data){
		$this->db->insert('tbl_project',$data);
	}
	public function editData_project($id_project){
		$query = $this->db->query("SELECT * FROM `tbl_project` where id_project = $id_project");
		return $query->result_array();
	}
	public function update_project($id_project,$data_update){
		$this->db->where("id_project",$id_project);
		$this->db->update('tbl_project',$data_update);
		$this->load->database();
	}


	/* Anggaran */
	public function getData_anggaran($id_project){
		$query = $this->db->query("SELECT * FROM `tbl_anggaran` where id_project = $id_project order by bulan asc");
		return $query->result_array();
	}
	public function editData_anggaran($id_project,$bulan){
		$query = $this->db->query("SELECT * FROM `tbl_anggaran` where id_project = $id_project and bulan = $bulan");
		return $query->result_array();
	}
	public function input_anggaran($data){
		$query = $this->db->insert('tbl_anggaran',$data);
	}
	public function delete_anggaran($id_project,$bulan){
		$query = $this->db->query("DELETE FROM `tbl_anggaran` WHERE id_project = $id_project and bulan = $bulan");
	}
	public function update_anggaran($id_project,$bulan,$jumlah,$tahun){
		$this->db->query("UPDATE `tbl_anggaran` SET `jumlah`= $jumlah,`tahun`= $tahun WHERE id_project = $id_project and bulan = $bulan;");
	}
}
?>