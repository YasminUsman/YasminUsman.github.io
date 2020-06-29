<?php

class Model_kategori extends CI_Model{
	public function data_alat_olahraga()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'alat olahraga'));
	}

	public function data_pakaian_pria()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'pakaian pria'));
	}

	public function data_pakaian_wanita()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'pakaian wanita'));
	}

	public function data_suplemen()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'suplemen'));
	}
}