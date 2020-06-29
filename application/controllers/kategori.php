<?php 

class Kategori extends CI_Controller{

	public function alat_olahraga()
	{
		$data['alat_olahraga'] = $this->model_kategori->data_alat_olahraga()->result();
		$this->load->view('templaces/header');
		$this->load->view('templaces/sidebar');
		$this->load->view('alat_olahraga',$data);
		$this->load->view('templaces/footer');
	}

	public function pakaian_pria()
	{
		$data['pakaian_pria'] = $this->model_kategori->data_pakaian_pria()->result();
		$this->load->view('templaces/header');
		$this->load->view('templaces/sidebar');
		$this->load->view('pakaian_pria',$data);
		$this->load->view('templaces/footer');
	}

	public function pakaian_wanita()
	{
		$data['pakaian_wanita'] = $this->model_kategori->data_pakaian_wanita()->result();
		$this->load->view('templaces/header');
		$this->load->view('templaces/sidebar');
		$this->load->view('pakaian_wanita',$data);
		$this->load->view('templaces/footer');
	}

	public function suplemen()
	{
		$data['suplemen'] = $this->model_kategori->data_suplemen()->result();
		$this->load->view('templaces/header');
		$this->load->view('templaces/sidebar');
		$this->load->view('suplemen',$data);
		$this->load->view('templaces/footer');
	}
} 