	<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
		<div class="post d-flex flex-column-fluid" id="kt_post">
			<div id="kt_content_container" class="container-xxl">
				<div class="card mb-5 mb-xl-8">
					<div class="card-header border-0 pt-5">
						<div class="d-flex align-items-center position-relative my-1">
							<span class="svg-icon svg-icon-1 position-absolute ms-6">
								<i class="fa-duotone fa-magnifying-glass fs-3"></i>
							</span>
							<input type="text" data-kt-roles-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Pencarian" />
						</div>
						<div class="card-toolbar">
							<a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#modalTambahPesanan">
								<span class="svg-icon svg-icon-3">
									<i class="fa-duotone fa-plus"></i>
								</span>Tambah Pesanan</a>
						</div>
					</div>
					<div class="card-body py-3">
						<div class="table-responsive">
							<table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
								<thead>
									<tr class="fw-bolder text-muted">
										<th class="w-25px">No</th>
										<th class="min-w-150px">Nama Pelanggan</th>
										<th class="min-w-120px">Bayar</th>
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
													<div class="d-flex align-items-center">
														<span href="#" class="text-dark fw-bolder fs-6"><?= $row->atas_nama; ?></span>
													</div>
												</td>
												<td class="text-end">
													<div class="d-flex align-items-center">
														<span href="#" class="text-dark fw-bolder fs-6">Rp. <?= number_format($row->total_harga, 2, ',', '.'); ?></span>
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
																<a href="../../demo8/dist/apps/user-management/users/view.html" class="menu-link px-3">Lihat</a>
															</div>
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3" data-kt-roles-table-filter="delete_row">Hapus</a>
															</div>
														</div>
													</div>
												</td>
											</tr>
										<?php endforeach; ?>
									<?php else : ?>
										<tr>
											<td colspan="4">
												<center>Tidak ada transaksi hari ini!</center>
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
	<div class="modal fade" id="modalTambahPesanan" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog mw-650px">
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
				<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
					<div class="text-start mb-13">
						<h1 class="mb-3">Tambah Pesanan</h1>
					</div>
					<div class="mb-10">
						<div class="row mb-6">
							<label class="col-form-label required fw-bold fs-6">Nama Pemesan</label>
							<div class="col-lg-12">
								<input type="text" name="" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Isikan nama pemesan" value="" autocomplete="off" />
							</div>
						</div>
						<label class="col-form-label required fw-bold fs-6">Cari Makanan</label>
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-9">
										<div class="d-flex align-items-center">
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="" />
											</label>
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="<?= base_url(); ?>assets/media/avatars/150-1.jpg" />
											</div>
											<div class="ms-5">
												<span href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mie Goreng</span>
												<div class="fw-bold text-muted">Rp. 150.000</div>
											</div>
										</div>
									</div>
									<div class="col-3">
										<input type="number" value="1" min="1" class="form-control form-control-solid">
									</div>
								</div>
							</div>
						</div>
						<div class="mt-2 mb-3 d-none" style="width : 100%; display : flex; justify-content: center; align-items: center">
							<button type="button" class="btn btn-primary">PESAN</button>
						</div>
						<div class="d-flex align-items-center position-relative mb-3">
							<span class="svg-icon svg-icon-1 position-absolute ms-6">
								<i class="fa-duotone fa-magnifying-glass fs-3"></i>
							</span>
							<input type="text" data-kt-roles-table-filter="search" class="form-control form-control-solid ps-15" style="width: 100%;" placeholder="Pencarian" />
						</div>
						<div class="fs-6 fw-bold mt-5 mb-4">List Makanan Grafika Cafe</div>
						<div class="mh-300px scroll-y me-n7 pe-7">
							<a href="#" class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<div class="d-flex align-items-center">
									<label class="form-check form-check-custom form-check-solid me-5">
										<input class="form-check-input" type="checkbox" name="" />
									</label>
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="<?= base_url(); ?>assets/media/avatars/150-1.jpg" />
									</div>
									<div class="ms-5">
										<span href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mie Goreng</span>
										<div class="fw-bold text-muted">Rp. 150.000</div>
									</div>
								</div>
							</a>

							<a href="#" class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<div class="d-flex align-items-center">
									<label class="form-check form-check-custom form-check-solid me-5">
										<input class="form-check-input" type="checkbox" name="" />
									</label>
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="<?= base_url(); ?>assets/media/avatars/150-1.jpg" />
									</div>
									<div class="ms-5">
										<span href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mie Goreng</span>
										<div class="fw-bold text-muted">Rp. 150.000</div>
									</div>
								</div>
							</a>

							<a href="#" class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<div class="d-flex align-items-center">
									<label class="form-check form-check-custom form-check-solid me-5">
										<input class="form-check-input" type="checkbox" name="" />
									</label>
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="<?= base_url(); ?>assets/media/avatars/150-1.jpg" />
									</div>
									<div class="ms-5">
										<span href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mie Goreng</span>
										<div class="fw-bold text-muted">Rp. 150.000</div>
									</div>
								</div>
							</a>

							<a href="#" class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<div class="d-flex align-items-center">
									<label class="form-check form-check-custom form-check-solid me-5">
										<input class="form-check-input" type="checkbox" name="" />
									</label>
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="<?= base_url(); ?>assets/media/avatars/150-1.jpg" />
									</div>
									<div class="ms-5">
										<span href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mie Goreng</span>
										<div class="fw-bold text-muted">Rp. 150.000</div>
									</div>
								</div>
							</a>

							<a href="#" class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<div class="d-flex align-items-center">
									<label class="form-check form-check-custom form-check-solid me-5">
										<input class="form-check-input" type="checkbox" name="" />
									</label>
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="<?= base_url(); ?>assets/media/avatars/150-1.jpg" />
									</div>
									<div class="ms-5">
										<span href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mie Goreng</span>
										<div class="fw-bold text-muted">Rp. 150.000</div>
									</div>
								</div>
							</a>

							<a href="#" class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<div class="d-flex align-items-center">
									<label class="form-check form-check-custom form-check-solid me-5">
										<input class="form-check-input" type="checkbox" name="" />
									</label>
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="<?= base_url(); ?>assets/media/avatars/150-1.jpg" />
									</div>
									<div class="ms-5">
										<span href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mie Goreng</span>
										<div class="fw-bold text-muted">Rp. 150.000</div>
									</div>
								</div>
							</a>

							<a href="#" class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<div class="d-flex align-items-center">
									<label class="form-check form-check-custom form-check-solid me-5">
										<input class="form-check-input" type="checkbox" name="" />
									</label>
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="<?= base_url(); ?>assets/media/avatars/150-1.jpg" />
									</div>
									<div class="ms-5">
										<span href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mie Goreng</span>
										<div class="fw-bold text-muted">Rp. 150.000</div>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>