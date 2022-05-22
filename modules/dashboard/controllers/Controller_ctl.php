<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Controller
{
	public function index()
	{
		$role = $this->role_m->get_single(array('id_role' => $this->session->userdata('id_role')));
		redirect($role->landing);
	}
}
