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

        // LOAD MODELS
        $this->load->model('menu_m');
    }

    public function index()
    {
        echo 'AKSES DENIED';
    }

    public function tambah_menu()
    {
        $nama_menu = 'Nasi goreng malaysia';
        $arr['nama_menu']           = $nama_menu;
        $arr['harga_menu']          = 20000;
        $arr['gambar_menu']         = 'gambar1.jpg';
        $arr['pembuat_menu']        = $this->id_user;
        $arr['create_date']         = date('Y-m-d H:i:s');
        $arr['aktif']               = 'Y';

        $insert = $this->menu_m->insert($arr);
        if ($insert) {
            $log['id_user'] = $this->id_user;
            $log['log_aktifitas'] = 'Membuat menu baru dengan nama : <b>' . $nama_menu . '</b>';
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

    public function edit_menu()
    {
        $id_menu = 1;
        $nama_menu = 'Nasi goreng malaysia';
        $arr['nama_menu']           = $nama_menu;
        $arr['harga_menu']          = 20000;
        $arr['gambar_menu']         = 'gambar1.jpg';
        $arr['pembuat_menu']        = $this->id_user;
        $arr['create_date']         = date('Y-m-d H:i:s');
        $arr['aktif']               = 'Y';

        $update = $this->menu_m->update($arr, $id_menu);
        if ($update) {
            $log['id_user'] = $this->id_user;
            $log['log_aktifitas'] = 'Melakukan update terhadap menu dengan id = <b>' . $id_menu . '</b>';
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
        $id_menu = 1;
        $arr['aktif']     = $aktif;

        $update = $this->menu_m->update($arr, $id_menu);
        if ($update) {
            $log['id_user'] = $this->id_user;
            if ($aktif == 'Y') {
                $log['log_aktifitas'] = 'Mengaktifkan menu dengan id = <b>' . $id_menu . '</b>';
            } else {
                $log['log_aktifitas'] = 'Menonaktifkan menu dengan id = <b>' . $id_menu . '</b>';
            }

            $log['tanggal'] = date('Y-m-d H:i:s');

            $insert_log = $this->log_aktifitas_m->insert($log);
            if ($insert_log) {
                echo 'Berhasil merubah status menu (log berhasil di simpan)';
            } else {
                echo 'Berhasil merubah status menu (log gagal di simpan)';
            }
        } else {
            echo 'Gagal merubah status menu';
        }
    }


    public function delete_menu($id_menu = NULL)
    {
        if ($id_menu == NULL) {
            echo 'Data menu tidak boleh kosong!';
        } else {
            $cek_menu = $this->menu_m->get_single(array('id_menu' => $id_menu));
            if ($cek_menu) {
                $delete = $this->menu_m->delete($id_menu);
                if ($delete) {
                    $log['id_user'] = $this->id_user;
                    $log['log_aktifitas'] = 'Menghapus menu dengan nama = <b>' . $cek_menu->nama_menu . '</b>';
                    $log['tanggal'] = date('Y-m-d H:i:s');

                    $insert_log = $this->log_aktifitas_m->insert($log);
                    if ($insert_log) {
                        echo 'Berhasil menghapus menu (log berhasil di simpan)';
                    } else {
                        echo 'Berhasil menghapus menu (log gagal di simpan)';
                    }
                } else {
                    echo 'Gagal menghapus menu';
                }
            } else {
                echo 'User tidak terdaftar';
            }
        }
    }
}
