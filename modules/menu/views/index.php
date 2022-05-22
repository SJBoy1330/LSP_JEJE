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
                                    <th class="min-w-120px">Status</th>
                                    <th class="min-w-100px text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="text-dark fw-bolder ps-2">1</span>
                                    </td>
                                    <td class="d-flex">
                                        <div class="symbol symbol-45px me-5">
                                            <img src="assets/media/avatars/150-11.jpg" alt="" />
                                        </div>
                                        <div class="d-flex align-self-center justify-content-start flex-column">
                                            <span href="#" class="text-dark fw-bolder fs-6">Mie
                                                Goreng</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="text-dark fw-bolder fs-6">Rp. 150.000</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span href="#" class="text-success fw-bolder fs-6">Online</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-end flex-shrink-0">
                                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Aksi
                                                <span class="svg-icon svg-icon-5 m-0">
                                                    <i class="fa-solid fa-chevron-down"></i>
                                                </span>
                                            </a>
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Edit User</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Hapus User</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <label class="form-check form-switch form-check-custom form-check-solid px-3">
                                                        <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                                        <span class="form-check-label fw-bold text-muted">On/Off</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
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
            <div class="modal-body  mx-5 mx-xl-18 pt-0 pb-15">
                <div class="text-start mb-13">
                    <h1 class="mb-3">Tambah Makanan</h1>
                </div>
                <div class="row mb-6">
                    <label class="col-form-label required fw-bold fs-6">Nama Menu</label>
                    <div class="col-lg-12">
                        <input type="text" name="" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Isikan nama menu" value="" autocomplete="off" />
                    </div>
                </div>
                <div class="row mb-6">
                    <label class="col-from-label required fw-bold fs-6">Harga Menu</label>
                    <div class="col-lg-12">
                        <input type="text" name="" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Isikan harga menu" value="" autocomplete="off" />
                    </div>
                </div>
                <div class="row mb-6">
                    <label class="col-from-label required fw-bold fs-6">Status</label>
                    <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih Status">
                        <option></option>
                        <option value="1">Online</option>
                        <option value="2">Offline</option>
                    </select>
                </div>
                <div class="d-flex mt-10 justify-content-end">
                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var hostUrl = "assets/";
</script>
<script src="assets/plugins/global/plugins.bundle.js"></script>
<script src="assets/js/scripts.bundle.js"></script>
<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="assets/js/custom/widgets.js"></script>
<script src="assets/js/custom/apps/chat/chat.js"></script>
<script src="assets/js/custom/modals/users-search.js"></script>
</body>

</html>