<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Admin
{
	public function index()
	{
		$mydata['title'] = 'Managaemen Menu';
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display();
	}
}
