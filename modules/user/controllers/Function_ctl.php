<?php defined('BASEPATH') or exit('No direct script access allowed');

class Function_ctl extends MY_Controller
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
	}

	public function index()
	{
		echo 'AKSES DENIED';
	}

	public function tambah_user()
	{
		$arrVar['nama'] = 'Nama user';
		$arrVar['username'] = 'Username';
		$arrVar['password'] = 'Password';
		$arrVar['role'] = 'Role';

		foreach ($arrVar as $var => $value) {
			$$var = $this->input->post($var);
			if (!$$var) {
				$data['required'][] = ['req_' . $var, $value . ' tidak boleh kosong !'];
				$arrAccess[] = false;
			} else {
				$arrAccess[] = true;
			}
		}
		if (!in_array(FALSE, $arrAccess)) {
			$arr['username'] 	= $username;
			$arr['nama'] 		= $nama;
			$arr['password'] 	= hash_password($username . $password);
			$arr['id_role'] 	= $role;
			$arr['aktif']		= 'Y';
			$arr['online']		= 'N';

			$insert = $this->user_m->insert($arr);
			if ($insert) {
				$log['id_user'] = $this->id_user;
				$log['riwayat'] = 'Membuat user baru dengan nama : <b>' . $nama . '</b>';
				$log['tanggal'] = date('Y-m-d H:i:s');

				$insert_log = $this->riwayat_m->insert($log);
				if ($insert_log) {
					$data['status'] = TRUE;
					$data['alert']['title'] = 'PEMBERITAHUAN';
					$data['alert']['message'] = 'Berhasil menambah user !';
					echo json_encode($data);
					exit;
				} else {
					$data['status'] = TRUE;
					$data['alert']['title'] = 'PEMBERITAHUAN';
					$data['alert']['message'] = 'Berhasil menambah user !';
					echo json_encode($data);
					exit;
				}
			} else {
				$data['status'] = FALSE;
				$data['alert']['title'] = 'PERINGATAN';
				$data['alert']['message'] = 'Gagal menambah user !';
				echo json_encode($data);
				exit;
			}
		} else {
			$data['status'] = FALSE;
			echo json_encode($data);
			exit;
		}
	}

	public function edit_user()
	{
		$id_user = $this->input->post('id_user');
		$password = $this->input->post('password');
		$arrVar['edit_nama'] = 'Nama user';
		$arrVar['username'] = 'Username';
		$arrVar['role'] = 'Role';
		foreach ($arrVar as $var => $value) {
			$$var = $this->input->post($var);
			if (!$$var) {
				$data['required'][] = ['req_' . $var, $value . ' tidak boleh kosong !'];
				$arrAccess[] = false;
			} else {
				$arrAccess[] = true;
			}
		}

		if (!in_array(FALSE, $arrAccess)) {
			$arr['username'] 	= $username;
			$arr['nama'] 		= $edit_nama;
			if ($password != NULL) {
				$arr['password'] 	= hash_password($username . $password);
			}
			$arr['id_role'] 	= $role;

			$update = $this->user_m->update($arr, $id_user);
			if ($update) {
				$log['id_user'] = $this->id_user;
				$log['riwayat'] = 'Melakukan edit pada user dengan id : <b>' . $id_user . '</b>';
				$log['tanggal'] = date('Y-m-d H:i:s');

				$insert_log = $this->riwayat_m->insert($log);
				if ($insert_log) {
					$data['status'] = TRUE;
					$data['alert']['title'] = 'PEMBERITAHUAN';
					$data['alert']['message'] = 'Berhasil merubah user !';
					echo json_encode($data);
					exit;
				} else {
					$data['status'] = TRUE;
					$data['alert']['title'] = 'PEMBERITAHUAN';
					$data['alert']['message'] = 'Berhasil merubah user !';
					echo json_encode($data);
					exit;
				}
			} else {
				$data['status'] = FALSE;
				$data['alert']['title'] = 'PERINGATAN';
				$data['alert']['message'] = 'Gagal menambah user !';
				echo json_encode($data);
				exit;
			}
		} else {
			$data['status'] = FALSE;
			echo json_encode($data);
			exit;
		}
	}


	public function set_active()
	{
		$aktif = 'Y';
		$id_user = 1;
		$arr['aktif'] 	= $aktif;

		$update = $this->user_m->update($arr, $id_user);
		if ($update) {
			$log['id_user'] = $this->id_user;
			if ($aktif == 'Y') {
				$log['riwayat'] = 'Mengaktifkan user dengan id = <b>' . $id_user . '</b>';
			} else {
				$log['riwayat'] = 'Menonaktifkan user dengan id = <b>' . $id_user . '</b>';
			}
			$log['tanggal'] = date('Y-m-d H:i:s');

			$insert_log = $this->riwayat_m->insert($log);
			if ($insert_log) {
				echo 'Berhasil merubah status (log berhasil di simpan)';
			} else {
				echo 'Berhasil merubah status (log gagal di simpan)';
			}
		} else {
			echo 'Gagal merubah status';
		}
	}


	public function delete_user($id_user = NULL)
	{
		if ($id_user == NULL) {
			echo 'Data user tidak boleh kosong!';
		} else {
			$cek_user = $this->user_m->get_single(array('id_user' => $id_user));
			if ($cek_user) {
				$delete = $this->user_m->delete($id_user);
				if ($delete) {
					$log['id_user'] = $this->id_user;
					$log['riwayat'] = 'Menghapus user dengan nama = <b>' . $cek_user->nama . '</b>';
					$log['tanggal'] = date('Y-m-d H:i:s');

					$insert_log = $this->riwayat_m->insert($log);
					if ($insert_log) {
						$this->session->set_flashdata('message', 'Data berhasil di hapus !');

						$this->session->set_flashdata('judul', 'PEMBERITAHUAN');

						$this->session->set_flashdata('icon', 'success');

						redirect('user');
					} else {
						$this->session->set_flashdata('message', 'Data berhasil di hapus !');

						$this->session->set_flashdata('judul', 'PEMBERITAHUAN');

						$this->session->set_flashdata('icon', 'success');

						redirect('user');
					}
				} else {
					$this->session->set_flashdata('message', 'Data gagal di hapus !');

					$this->session->set_flashdata('judul', 'PERINGATAN');

					$this->session->set_flashdata('icon', 'warning');

					redirect('user');
				}
			} else {
				$this->session->set_flashdata('message', 'User tidak terdaftar !');

				$this->session->set_flashdata('judul', 'PERINGATAN');

				$this->session->set_flashdata('icon', 'warning');

				redirect('user');
			}
		}
	}


	public function get_modal()
	{
		$id_user = $this->input->post('id_user');
		$arrParams['arrjoin']['role']['statement'] = 'user.id_role = role.id_role';
		$arrParams['arrjoin']['role']['type'] = 'LEFT';
		$result  = $this->user_m->get_where_params(array('id_user' => $id_user), '*', $arrParams);
		echo json_encode($result[0]);
	}
}
