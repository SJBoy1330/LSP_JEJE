<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="card mb-5 mb-xl-8">
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-3 mb-1">Menu User</span>
                    </h3>
                    <div class="card-toolbar">
                        <a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#modalTambahUser">
                            <span class="svg-icon svg-icon-3">
                                <i class="fa-duotone fa-plus"></i>
                            </span>Tambah User</a>
                    </div>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" id="auto_reload">
                        <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4" id="tabel_reload">
                            <thead>
                                <tr class="fw-bolder text-muted">
                                    <th class="w-25px">No</th>
                                    <th class="w-25px">ID</th>
                                    <th class="min-w-150px">Nama Pegawai</th>
                                    <th class="min-w-140px">Role</th>
                                    <th class="min-w-120px">Status</th>
                                    <th class="min-w-100px text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($result) : ?>
                                    <?php $no = 1;
                                    foreach ($result as $row) : ?>
                                        <tr>
                                            <td>
                                                <span class="text-dark fw-bolder ps-2"><?= $no++; ?></span>
                                            </td>
                                            <td>
                                                <span class="text-dark fw-bolder ps-2"><?= $row->id_user; ?></span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-self-center justify-content-start flex-column">
                                                    <span class="text-dark fw-bolder mb-1 fs-6"><?= $row->nama; ?></span>
                                                    <span class="text-muted fw-bold d-block fs-7"><?= $row->username; ?></span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="text-dark fw-bolder fs-6"><?= $row->nama_role; ?></span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <?php if ($row->online == 'Y') : ?>
                                                        <span class="text-success fw-bolder fs-6">
                                                            Online
                                                        </span>
                                                    <?php else : ?>
                                                        <span class="text-danger fw-bolder fs-6">
                                                            Offline
                                                        </span>
                                                    <?php endif; ?>

                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-end flex-shrink-0">
                                                    <button type="button" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Aksi
                                                        <span class="svg-icon svg-icon-5 m-0">
                                                            <i class="fa-solid fa-chevron-down"></i>
                                                        </span>
                                                    </button>
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                                        <div class="menu-item px-3">
                                                            <a href="#" data-id="<?= $row->id_user; ?>" data-bs-toggle="modal" data-bs-target="#modalEditUser" class="menu-link px-3 edit_user">Edit User</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="<?= base_url('function_user/delete_user/' . $row->id_user); ?>" class="menu-link px-3" data-kt-roles-table-filter="delete_row">Hapus User</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <tr>
                                        <td colspan="6">
                                            <center>Tidak ada data user</center>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="modalTambahUser" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                        </svg>
                    </span>
                </div>
            </div>
            <div class="modal-body  mx-5 mx-xl-18 pt-0 pb-15" id="display">
                <form action="<?= base_url('function_user/tambah_user'); ?>" method="POST" id="tambah_user">
                    <div class="text-start mb-13">
                        <h1 class="mb-3">Tambah User</h1>
                    </div>
                    <div class="row mb-6" id="req_username">
                        <label class="col-form-label required fw-bold fs-6">Username</label>
                        <div class="col-lg-12">
                            <input type="text" name="username" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Isikan username" value="" autocomplete="off" />
                        </div>
                    </div>
                    <div class="row mb-6" id="req_nama">
                        <label class="col-form-label required fw-bold fs-6">Nama Pegawai</label>
                        <div class="col-lg-12">
                            <input type="text" name="nama" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Isikan nama pegawai" value="" autocomplete="off" />
                        </div>
                    </div>
                    <div class="row mb-6" id="req_password">
                        <label class=" col-form-label required fw-bold fs-6">Password</label>
                        <div class="col-lg-12">
                            <input type="password" name="password" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Isikan password" value="" autocomplete="off" />
                        </div>
                    </div>

                    <div class="row mb-6" id="req_role">
                        <label class="col-from-label required fw-bold fs-6">Role</label>
                        <select class="form-select form-select-solid" name="role" data-kt-select2="true" data-placeholder="Pilih Role">
                            <?php if ($role) : ?>
                                <option value="">pilih</option>
                                <?php foreach ($role as $row) : ?>
                                    <option value="<?= $row->id_role; ?>"><?= $row->nama_role; ?></option>\
                                <?php endforeach; ?>
                            <?php else : ?>
                                <option> Tidak ada role tersedia</option>
                            <?php endif; ?>
                        </select>
                    </div>
                    <div class="d-flex mt-10 justify-content-end">
                        <button type="button" id="button_submit_user" onclick="submit_form(this,'#tambah_user')" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modalEditUser" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                        </svg>
                    </span>
                </div>
            </div>
            <div class="modal-body  mx-5 mx-xl-18 pt-0 pb-15" id="display">
                <form action="<?= base_url('function_user/edit_user'); ?>" method="POST" id="edit_user">
                    <div class="text-start mb-13">
                        <h1 class="mb-3">Edit User</h1>
                    </div>
                    <div class="row mb-6" id="req_edit_username">
                        <label class="col-form-label required fw-bold fs-6">Username</label>
                        <input type="hidden" name="id_user" id="id_user">
                        <div class="col-lg-12">
                            <input type="text" name="username" id="username" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Isikan username" value="" autocomplete="off" />
                        </div>
                    </div>
                    <div class="row mb-6" id="req_edit_nama">
                        <label class="col-form-label required fw-bold fs-6">Nama Pegawai</label>
                        <div class="col-lg-12">
                            <input type="text" name="edit_nama" id="nama" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Isikan nama pegawai" value="" autocomplete="off" />
                        </div>
                    </div>
                    <div class="row mb-6" id="req_edit_password">
                        <label class=" col-form-label required fw-bold fs-6">Password</label>
                        <div class="col-lg-12">
                            <input type="password" name="password" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Isikan password" value="" autocomplete="off" />
                        </div>
                    </div>

                    <div class="row mb-6" id="req_edit_role">
                        <label class="col-from-label required fw-bold fs-6">Role</label>
                        <select class="form-select form-select-solid" id="role" name="role" data-kt-select2="true" data-placeholder="Pilih Role">
                            <?php if ($role) : ?>
                                <option value="">pilih</option>
                                <?php foreach ($role as $row) : ?>
                                    <option value="<?= $row->id_role; ?>"><?= $row->nama_role; ?></option>\
                                <?php endforeach; ?>
                            <?php else : ?>
                                <option> Tidak ada role tersedia</option>
                            <?php endif; ?>
                        </select>
                    </div>
                    <div class="d-flex mt-10 justify-content-end">
                        <button type="button" id="button_edit_user" onclick="submit_form(this,'#edit_user',1)" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>