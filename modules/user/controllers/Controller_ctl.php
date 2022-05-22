<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Admin
{
	public function __construct()

	{

		// Load the constructer from MY_Controller

		parent::__construct();
	}
	public function index()
	{
		// LOAD TITLE
		$mydata['title'] = 'User';

		// LOAD DATA USER
		$arrParams['arrjoin']['role']['statement'] = 'role.id_role = user.id_role';
		$arrParams['arrjoin']['role']['type'] = 'LEFT';
		$mydata['result'] = $this->user_m->get_where_params(array('user.id_role !=' => 1), '*', $arrParams);

		// LOAD DATA ROLES
		$mydata['role'] = $this->role_m->get_all();

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/user.js"></script>';
		// LOAD VIEWS
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display();
	}
}
