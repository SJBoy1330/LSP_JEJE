<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="card mb-5 mb-xl-8">
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-3 mb-1">Menu Makanan</span>
                    </h3>
                    <div class="card-toolbar">
                        <a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#modalTambahUser">
                            <span class="svg-icon svg-icon-3">
                                <i class="fa-duotone fa-plus"></i>
                            </span>Tambah Makanan</a>
                    </div>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive">
                        <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                            <thead>
                                <tr class="fw-bolder text-muted">
                                    <th class="w-25px">No</th>
                                    <th class="min-w-150px">Nama Menu</th>
                                    <th class="min-w-140px">Harga Menu</th>
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
                                            <td class="d-flex">
                                                <div class="symbol symbol-45px me-5">
                                                    <img src="<?= base_url('data/' . $row->gambar); ?>" alt="" />
                                                </div>
                                                <div class="d-flex align-self-center justify-content-start flex-column">
                                                    <span href="#" class="text-dark fw-bolder fs-6"><?= $row->nama; ?></span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="text-dark fw-bolder fs-6">Rp. <?= number_format($row->harga, 2, ',', '.'); ?></span>
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
                                                            <a href="#" data-id="<?= $row->id_menu; ?>" class="menu-link px-3 edit_menu" data-bs-toggle="modal" data-bs-target="#modalEditUser">Edit Menu</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="<?= base_url('function_menu/delete_menu/' . $row->id_menu) ?>" class="menu-link px-3">Hapus Menu</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <tr>
                                        <td colspan="4">
                                            <center>Tidak ada data menu</center>
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
            <form method="post" action="<?= base_url('function_menu/tambah_menu'); ?>" enctype="multipart/form-data" class="modal-body  mx-5 mx-xl-18 pt-0 pb-15" id="tambah_menu">
                <div class=" text-start mb-13">
                    <h1 class="mb-3">Tambah Makanan</h1>
                </div>
                <div class="row mb-6" id="req_gambar">
                    <label class="col-from-label required fw-bold fs-6">Gambar Menu</label>
                    <div class="col-lg-12">
                        <input type="file" name="gambar" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Pilih gambar menu" value="" autocomplete="off" />
                    </div>
                </div>
                <div class="row mb-6" id="req_nama_menu">
                    <label class="col-form-label required fw-bold fs-6">Nama Menu</label>
                    <div class="col-lg-12">
                        <input type="text" name="nama_menu" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Isikan nama menu" value="" autocomplete="off" />
                    </div>
                </div>
                <div class="row mb-6" id="req_harga">
                    <label class="col-from-label required fw-bold fs-6">Harga Menu</label>
                    <div class="col-lg-12">
                        <input type="number" name="harga" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Isikan harga menu" value="" autocomplete="off" />
                    </div>
                </div>
                <div class="d-flex mt-10 justify-content-end">
                    <button type="button" class="btn btn-sm btn-primary" id="button_tambah_menu" onclick="submit_form(this,'#tambah_menu')" data-kt-menu-dismiss="true">Simpan</button>
                </div>
            </form>
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
            <form method="post" action="<?= base_url('function_menu/update_menu'); ?>" enctype="multipart/form-data" class="modal-body  mx-5 mx-xl-18 pt-0 pb-15" id="edit_menu">
                <div class=" text-start mb-13">
                    <h1 class="mb-3">Tambah Makanan</h1>
                </div>
                <div class="row mb-6" id="req_edit_gambar">
                    <label class="col-from-label required fw-bold fs-6">Gambar Menu</label>
                    <img src="" id="display_gambar" alt="">
                    <div class="col-lg-12">
                        <input type="file" name="gambar" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Pilih gambar menu" value="" autocomplete="off" />
                    </div>
                </div>
                <div class="row mb-6" id="req_edit_nama_menu">
                    <label class="col-form-label required fw-bold fs-6">Nama Menu</label>
                    <div class="col-lg-12">
                        <input type="text" id="nama_menu" name="nama_menu" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Isikan nama menu" value="" autocomplete="off" />
                        <input type="hidden" id="id_menu" name="id_menu" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Isikan nama menu" value="" autocomplete="off" />
                    </div>
                </div>
                <div class="row mb-6" id="req_edit_harga">
                    <label class="col-from-label required fw-bold fs-6">Harga Menu</label>
                    <div class="col-lg-12">
                        <input type="number" id="harga" name="harga" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Isikan harga menu" value="" autocomplete="off" />
                    </div>
                </div>
                <div class="d-flex mt-10 justify-content-end">
                    <button type="button" class="btn btn-sm btn-primary" id="button_edit_menu" onclick="submit_form(this,'#edit_menu',1)" data-kt-menu-dismiss="true">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>