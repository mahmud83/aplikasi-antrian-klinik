<?php
class M_admin extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		$this->load->library('encrypt');
	}


	/* ------------------- INSERT SECTION ------------------------ */
	public function insertPegawai($data){
		return $this->db->insert('tbl_dokter',$data);
	}





	/*--------------------- SELECT SECTION ----------------------- */
	public function selectPegawai(){
		$data = $this->db->get('tbl_dokter');
		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return false;
		}
	}


}
?>