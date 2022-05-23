<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Admin
{
	protected $id_user = '';
	public function __construct()
	{
		// Load the constructer from MY_Controller
		parent::__construct();
		if ($this->session->userdata('id_user')) {
			$this->id_user = $this->session->userdata('id_user');
		} else {
			$this->id_user = 1;
		}
		// LOAD MENU
		$this->load->model('menu_m');
	}

	public function index()
	{
		// LOAD  TITLE
		$mydata['title'] = 'Managaemen Menu';
		// LOAD DATA
		$mydata['result'] = $this->menu_m->get_all();

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/menu.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display();
	}
}
