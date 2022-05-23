<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Admin
{
	protected $id_user = '';
	public function __construct()
	{
		// Load the constructer from MY_Controller
		parent::__construct();
		if ($this->session->userdata('cafe_id_user')) {
			$this->id_user = $this->session->userdata('cafe_id_user');
		} else {
			$this->id_user = 1;
		}

		// LOAD Models
		$this->load->model('transaksi_m');
		$this->load->model('menu_transaksi_m');
	}
	public function index()
	{
		redirect('transaksi/kasir');
	}

	public function kasir()
	{
		// LOAD TITLE
		$mydata['title'] = 'Kasir';

		// LOAD DATA
		$mydata['result'] = $this->transaksi_m->get_all(array('DATE(create_date)' => date('Y-m-d')));
		// LOAD VIEW
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display();
	}


	public function laporan_pendapatan()
	{
		// LOAD TITLE
		$mydata['title'] = 'Laporan Pendapatan';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('laporan_pendapatan', $mydata, TRUE);
		$this->display();
	}
}
