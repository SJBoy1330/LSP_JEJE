<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Controller
{
	public function index()
	{
		if ($this->session->userdata('id_user')) {
			redirect('dashboard');
		}
		$this->load->view('index');
	}

	public function login()
	{
		$arrVar = array('username', 'password');
		foreach ($arrVar as $var) {
			$$var = $this->input->post($var);
			if (!$$var) {
				$data['required'][] = ['req_' . $var, $var . ' tidak boleh kosong !'];
				$arrAccess[] = false;
			} else {
				$arrAccess[] = true;
			}
		}

		if (!in_array(FALSE, $arrAccess)) {
			$cek_user = $this->user_m->get_single(array('username' => $username));
			if ($cek_user) {
				if (hash_password($username . $password) == $cek_user->password) {

					$this->session->set_userdata('id_user', $cek_user->id_user);
					$this->session->set_userdata('id_role', $cek_user->id_role);

					$data['status'] = TRUE;
					$data['alert']['title'] = 'PEMBERITAHUAN';
					$data['alert']['message'] = '';
					$data['redirect'] = base_url('dashboard');
					echo json_encode($data);
					exit;
				} else {
					$data['status'] = FALSE;
					$data['alert']['title'] = 'PERINGATAN';
					$data['alert']['message'] = 'Kata sandi salah !';
					echo json_encode($data);
					exit;
				}
			} else {
				$data['status'] = FALSE;
				$data['alert']['title'] = 'PERINGATAN';
				$data['alert']['message'] = 'User tidak terdaftar!';
				echo json_encode($data);
				exit;
			}
		} else {
			$data['status'] = FALSE;
			echo json_encode($data);
			exit;
		}
	}


	public function logout()
	{
		$this->session->unset_userdata('id_user');
		$this->session->unset_userdata('id_role');

		redirect('auth');
	}
}
