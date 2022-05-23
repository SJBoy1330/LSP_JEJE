<?php defined('BASEPATH') or exit('No direct script access allowed');

class Function_ctl extends MY_Controller
{
    protected $id_user = '';
    public function __construct()
    {
        // Load the constructer from MY_Controller
        parent::__construct();
        $this->id_user = $this->session->userdata('cafe_id_user');

        // LOAD MODELS
        $this->load->model('menu_m');
    }

    public function index()
    {
        echo 'AKSES DENIED';
    }

    public function tambah_menu()
    {
        $arrVar['nama_menu'] = 'Nama menu';
        $arrVar['harga'] = 'Harga menu';

        foreach ($arrVar as $var => $value) {
            $$var = $this->input->post($var);
            if (!$$var) {
                $data['required'][] = ['req_' . $var, $value . ' tidak boleh kosong !'];
                $arrAccess[] = false;
            } else {
                $arrAccess[] = true;
            }
        }

        if (!$_FILES['gambar']['tmp_name']) {
            $data['required'][] = ['req_gambar', 'Gambar tidak boleh kosong !'];
            $arrAccess[] = false;
        } else {
            $arrAccess[] = true;
            $gambar = $_FILES['gambar'];
            if (!empty($gambar['tmp_name'])) {
                $tujuan = APPPATH . '../data/';
                $config['upload_path'] = $tujuan;
                $config['allowed_types'] = 'png|jpg|jpeg';
                $config['file_name'] = uniqid();
                $config['file_ext_tolower'] = true;
                $this->load->library('upload', $config);

                $data = [];

                if (!$this->upload->do_upload('gambar')) {

                    $error = array('error' => $this->upload->display_errors());
                    $data['required'][] = ['req_gambar', $error['error']];
                    exit(0);
                } else {
                    $data = array('upload_data' => $this->upload->data());
                    $arr['gambar'] = $data['upload_data']['file_name'];
                }
            }
        }
        if (!in_array(FALSE, $arrAccess)) {
            $arr['nama']           = $nama_menu;
            $arr['harga']          = $harga;
            $arr['id_user']        = $this->id_user;
            $arr['create_date']         = date('Y-m-d H:i:s');
            $arr['aktif']               = 'Y';

            $insert = $this->menu_m->insert($arr);
            if ($insert) {
                $log['id_user'] = $this->id_user;
                $log['riwayat'] = 'Membuat menu baru dengan nama : <b>' . $nama_menu . '</b>';
                $log['tanggal'] = date('Y-m-d H:i:s');

                $insert_log = $this->riwayat_m->insert($log);
                if ($insert_log) {
                    $data['status'] = TRUE;
                    $data['alert']['title'] = 'PEMBERITAHUAN';
                    $data['alert']['message'] = 'Berhasil menambah menu !';
                    echo json_encode($data);
                    exit;
                } else {
                    $data['status'] = TRUE;
                    $data['alert']['title'] = 'PEMBERITAHUAN';
                    $data['alert']['message'] = 'Berhasil menambah menu !';
                    echo json_encode($data);
                    exit;
                }
            } else {
                $data['status'] = FALSE;
                $data['alert']['title'] = 'PERINGATAN';
                $data['alert']['message'] = 'Gagal menambah menu !';
                echo json_encode($data);
                exit;
            }
        } else {
            $data['status'] = FALSE;
            echo json_encode($data);
            exit;
        }
    }


    public function update_menu()
    {
        $arrVar['nama_menu'] = 'Nama menu';
        $arrVar['harga'] = 'Harga menu';
        $arrVar['id_menu'] = 'Id menu';

        foreach ($arrVar as $var => $value) {
            $$var = $this->input->post($var);
            if (!$$var) {
                $data['required'][] = ['req_edit_' . $var, $value . ' tidak boleh kosong !'];
                $arrAccess[] = false;
            } else {
                $arrAccess[] = true;
            }
        }

        $result = $this->menu_m->get_single(array('id_menu' => $id_menu));

        $gambar = $_FILES['gambar'];
        if (!empty($gambar['tmp_name'])) {
            $tujuan = APPPATH . '../data/';
            $config['upload_path'] = $tujuan;
            $config['allowed_types'] = 'png|jpg|jpeg';
            $config['file_name'] = uniqid();
            $config['file_ext_tolower'] = true;
            $this->load->library('upload', $config);

            $data = [];

            if (!$this->upload->do_upload('gambar')) {

                $error = array('error' => $this->upload->display_errors());
                $data['required'][] = ['req_edit_gambar', $error['error']];
                $arrAccess[] = FALSE;
                exit(0);
            } else {
                unlink($tujuan . $result->gambar);
                $data = array('upload_data' => $this->upload->data());
                $arr['gambar'] = $data['upload_data']['file_name'];
            }
        }
        if (!in_array(FALSE, $arrAccess)) {
            $arr['nama']           = $nama_menu;
            $arr['harga']          = $harga;

            $update = $this->menu_m->update($arr, $id_menu);
            if ($update) {
                $log['id_user'] = $this->id_user;
                $log['riwayat'] = 'Merubah menu dengan id : <b>' . $id_menu . '</b>';
                $log['tanggal'] = date('Y-m-d H:i:s');

                $insert_log = $this->riwayat_m->insert($log);
                if ($insert_log) {
                    $data['status'] = TRUE;
                    $data['alert']['title'] = 'PEMBERITAHUAN';
                    $data['alert']['message'] = 'Berhasil merubah menu !';
                    echo json_encode($data);
                    exit;
                } else {
                    $data['status'] = TRUE;
                    $data['alert']['title'] = 'PEMBERITAHUAN';
                    $data['alert']['message'] = 'Berhasil merubah menu !';
                    echo json_encode($data);
                    exit;
                }
            } else {
                $data['status'] = FALSE;
                $data['alert']['title'] = 'PERINGATAN';
                $data['alert']['message'] = 'Gagal merubah menu !';
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
                    $log['riwayat'] = 'Menghapus user dengan nama = <b>' . $cek_menu->nama . '</b>';
                    $log['tanggal'] = date('Y-m-d H:i:s');

                    $insert_log = $this->riwayat_m->insert($log);
                    if ($insert_log) {
                        $this->session->set_flashdata('message', 'Data berhasil di hapus !');

                        $this->session->set_flashdata('judul', 'PEMBERITAHUAN');

                        $this->session->set_flashdata('icon', 'success');

                        redirect('menu');
                    } else {
                        $this->session->set_flashdata('message', 'Data berhasil di hapus !');

                        $this->session->set_flashdata('judul', 'PEMBERITAHUAN');

                        $this->session->set_flashdata('icon', 'success');

                        redirect('menu');
                    }
                } else {
                    $this->session->set_flashdata('message', 'Data gagal di hapus !');

                    $this->session->set_flashdata('judul', 'PERINGATAN');

                    $this->session->set_flashdata('icon', 'warning');

                    redirect('menu');
                }
            } else {
                $this->session->set_flashdata('message', 'menu tidak terdaftar !');

                $this->session->set_flashdata('judul', 'PERINGATAN');

                $this->session->set_flashdata('icon', 'warning');

                redirect('menu');
            }
        }
    }


    public function get_modal()
    {
        $id_menu = $this->input->post('id_menu');
        $result  = $this->menu_m->get_single(array('id_menu' => $id_menu));
        echo json_encode($result);
    }
}
