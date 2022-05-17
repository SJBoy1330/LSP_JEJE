<?php defined('BASEPATH') or exit('No direct script access allowed');

class Function_ctl extends MY_Controller
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
	}

	public function index()
	{
		echo 'AKSES DENIED';
	}

	public function tambah_user()
	{
		$nama = 'Saka dana asmara';
		$arr['username'] 	= 'admin';
		$arr['nama'] 		= $nama;
		$arr['password'] 		= hash_password('admin' . '12345');
		$arr['role'] 		= 1;
		$arr['aktif']		= 'Y';
		$arr['online']		= 'Y';
		$arr['online_akses']	= date('Y-m-d H:i:s');

		$insert = $this->user_m->insert($arr);
		if ($insert) {
			$log['id_user'] = $this->id_user;
			$log['log_aktifitas'] = 'Membuat user baru dengan nama : <b>' . $nama . '</b>';
			$log['tanggal'] = date('Y-m-d H:i:s');

			$insert_log = $this->log_aktifitas_m->insert($log);
			if ($insert_log) {
				echo 'Berhasil melakukan insert (log berhasil di simpan)';
			} else {
				echo 'Berhasil melakukan insert (log gagal di simpan)';
			}
		} else {
			echo 'Gagal melakukan insert';
		}
	}

	public function edit_user()
	{
		$id_user = 1;
		$arr['username'] 	= 'admin';
		$arr['nama'] 		= 'Saka Dana Asmara Ku';
		$arr['password'] 		= hash_password('admin' . '12345');
		$arr['role'] 		= 1;

		$update = $this->user_m->update($arr, $id_user);
		if ($update) {
			$log['id_user'] = $this->id_user;
			$log['log_aktifitas'] = 'Melakukan update terhadap user dengan id = <b>' . $id_user . '</b>';
			$log['tanggal'] = date('Y-m-d H:i:s');

			$insert_log = $this->log_aktifitas_m->insert($log);
			if ($insert_log) {
				echo 'Berhasil melakukan update (log berhasil di simpan)';
			} else {
				echo 'Berhasil melakukan update (log gagal di simpan)';
			}
		} else {
			echo 'Gagal melakukan update';
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
				$log['log_aktifitas'] = 'Mengaktifkan user dengan id = <b>' . $id_user . '</b>';
			} else {
				$log['log_aktifitas'] = 'Menonaktifkan user dengan id = <b>' . $id_user . '</b>';
			}
			$log['tanggal'] = date('Y-m-d H:i:s');

			$insert_log = $this->log_aktifitas_m->insert($log);
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
					$log['log_aktifitas'] = 'Menghapus user dengan nama = <b>' . $cek_user->nama . '</b>';
					$log['tanggal'] = date('Y-m-d H:i:s');

					$insert_log = $this->log_aktifitas_m->insert($log);
					if ($insert_log) {
						echo 'Berhasil menghapus user (log berhasil di simpan)';
					} else {
						echo 'Berhasil menghapus user (log gagal di simpan)';
					}
				} else {
					echo 'Gagal menghapus user';
				}
			} else {
				echo 'User tidak terdaftar';
			}
		}
	}
}
