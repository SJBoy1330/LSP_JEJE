<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Admin
{
	public function index()
	{
		redirect('pengaturan/role');
	}
	public function role()
	{
		$mydata['title'] = 'Pengaturan role';
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display();
	}

	public function riwayat()
	{
		$mydata['title'] = 'Pengaturan riwayat';
		$this->data['content'] = $this->load->view('riwayat', $mydata, TRUE);
		$this->display();
	}
}
