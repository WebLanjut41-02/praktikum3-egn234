<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pesanmakan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_pesanmakan');
			
	}

	public function index(){
			$this->load->view('daftar');
	}

	public function masuk(){
		$this->session->set_userdata('pemesan', $this->input->post('nm_pemesan'));
		redirect('pesanmakan/daftmenu');
	}

	public function daftmenu(){
		$data['daftarmenu'] = $this->m_pesanmakan->v_menulist();
		$data['nm_pemesan'] = $this->session->userdata('pemesan');
		$this->load->view('listmenu', $data);
		
	}

	public function formpesan(){
		$pilih = $this->input->post('pilihan[]');
		$qty = $this->input->post('jum_pesan[]');
		
		for($i = 0; $i < count($pilih); $i++) {
 			$this->m_pesanmakan->i_listpesanan($pilih[$i], $qty[$i], $this->session->userdata('pemesan'));
		}
		redirect('pesanmakan/strukpesan');
	}

	public function strukpesan(){
		$data['listpesanan'] = $this->m_pesanmakan->v_listpesanan();
		$this->load->view('strukbayar', $data);
	}

	public function keluar(){
		$this->session->sess_destroy();
		redirect('pesanmakan');
	}
}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */
 ?>