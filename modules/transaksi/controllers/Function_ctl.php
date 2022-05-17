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

		// LOAD Models
		$this->load->model('transaksi_m');
		$this->load->model('menu_transaksi_m');
	}

	public function index()
	{
		echo 'AKSES DENIED';
	}

	public function tambah_transaksi()
	{
		$atas_nama = 'Angreaning Tyas';
		$menu[0]['nama_menu'] = 'Nasi goreng';
		$menu[0]['jumlah'] = 2;
		$menu[0]['harga'] = 5000;
		$menu[1]['nama_menu'] = 'Mie goreng aceh';
		$menu[1]['jumlah'] = 2;
		$menu[1]['harga'] = 10000;
		$menu[2]['nama_menu'] = 'Capjay';
		$menu[2]['jumlah'] = 1;
		$menu[2]['harga'] = 20000;
		$total_harga = [10000, 20000, 20000];
		$arr['atas_nama'] 	= $atas_nama;
		$arr['id_user'] 		= $this->id_user;
		$arr['total_harga'] 		= array_sum($total_harga);
		$arr['status_pesanan'] 		= 1;
		$arr['create_date']		= date('Y-m-d H:i:s');

		$insert = $this->transaksi_m->insert($arr);
		if ($insert) {
			$no = 1;
			foreach ($menu as $row) {
				$num = $no++;
				$arrIn[$num]['id_transaksi'] = $insert;
				$arrIn[$num]['nama_menu'] = $row['nama_menu'];
				$arrIn[$num]['jumlah_pesan'] = $row['jumlah'];
				$arrIn[$num]['harga_peritem'] = $row['harga'];
				$arrIn[$num]['total_harga'] = $row['jumlah'] * $row['harga'];
			}

			$insert_menu = $this->menu_transaksi_m->insert_batch($arrIn);
			if ($insert_menu) {
				$log['id_user'] = $this->id_user;
				$log['log_aktifitas'] = 'Membuat pesanan atas nama : <b>' . $atas_nama . '</b>';
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
