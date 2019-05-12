<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Gerbong extends CI_Model {

	function get(){
			$this->db->select('lokomotif.kd_kereta,lokomotif.nama, kursi.kd_kursi'); 
			$this->db->from('lokomotif');
			$this->db->join('kursi', 'kursi.kd_kereta = lokomotif.kd_kereta', 'left'); 

			$query = $this->db->get(); 
					if ($query->num_rows() >0){ 
							foreach ($query->result() as $data) {
									# code...
									$lokomotif[] = $data;
							}
					return $lokomotif; //hasil dari semua proses ada dimari
					}
	}

	function get1(){
			$this->db->select('kursi.kd_kursi,kursi.kd_gerbong,kursi.kd_kereta, gerbong.nama'); 
			$this->db->from('kursi'); 
			$this->db->join('gerbong', 'kursi.kd_gerbong = gerbong.kd_gerbong', 'right'); 

			$query = $this->db->get();
					if ($query->num_rows() >0){ 
							foreach ($query->result() as $data) {
									# code...
									$kursi[] = $data;
							}
					return $kursi; 
					}
	}

	function get2(){
		$this->db->select('*');
		$this->db->from('lokomotif');
		$this->db->join('kursi','lokomotif.kd_kereta=kursi.kd_kereta');
		$this->db->join('gerbong','lokomotif.kd_kereta=gerbong.kd_kereta');
		$query = $this->db->get();
		return $query->result();
	}
}
