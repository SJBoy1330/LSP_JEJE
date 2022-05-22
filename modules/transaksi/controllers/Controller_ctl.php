<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Admin
{
	public function index()
	{
		redirect('transaksi/kasir');
	}

	public function kasir()
	{
		$mydata['title'] = 'Kasir';
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display();
	}


	public function laporan_pendapatan()
	{
		$mydata['title'] = 'Laporan Pendapatan';
		$this->data['content'] = $this->load->view('laporan_pendapatan', $mydata, TRUE);
		$this->display();
	}
}
