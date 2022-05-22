<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<div class="post d-flex flex-column-fluid" id="kt_post">
		<div id="kt_content_container" class="container-xxl">
			<div class="d-flex flex-column flex-lg-row">
				<div class="flex-column flex-lg-row-auto w-100 w-lg-200px w-xl-300px mb-10">
					<div class="card card-flush">
						<div class="card-header">
							<div class="card-title">
								<h2 class="mb-0">Developer</h2>
							</div>
						</div>
						<div class="card-body pt-0">
							<div class="d-flex flex-column text-gray-600">
								<div class="d-flex align-items-center py-2">
									<span class="bullet bg-primary me-3"></span>Lorem ipsum dolor sit amet consectetur adipisicing elit.
								</div>
								<div class="d-flex align-items-center py-2">
									<span class="bullet bg-primary me-3"></span>Lorem ipsum dolor sit amet consectetur adipisicing elit.
								</div>
								<div class="d-flex align-items-center py-2">
									<span class="bullet bg-primary me-3"></span>Lorem ipsum dolor sit amet consectetur adipisicing elit.
								</div>
								<div class="d-flex align-items-center py-2">
									<span class="bullet bg-primary me-3"></span>Lorem ipsum dolor sit amet consectetur adipisicing elit.
								</div>
								<div class="d-flex align-items-center py-2">
									<span class="bullet bg-primary me-3"></span>Lorem ipsum dolor sit amet consectetur adipisicing elit.
								</div>
							</div>
						</div>
						<div class="card-footer pt-0">
							<button type="button" class="btn btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">Edit Role</button>
						</div>
					</div>
					<div class="modal fade" id="kt_modal_update_role" tabindex="-1" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered mw-750px">
							<div class="modal-content">
								<div class="modal-header">
									<h2 class="fw-bolder">Update Role</h2>
									<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-roles-modal-action="close">
										<span class="svg-icon svg-icon-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
												<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
											</svg>
										</span>
									</div>
								</div>
								<div class="modal-body scroll-y mx-5 my-7">
									<form id="kt_modal_update_role_form" class="form" action="#">
										<div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_role_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_update_role_header" data-kt-scroll-wrappers="#kt_modal_update_role_scroll" data-kt-scroll-offset="300px">
											<div class="fv-row mb-10">
												<label class="fs-5 fw-bolder form-label mb-2">
													<span class="required">Nama Role</span>
												</label>
												<input class="form-control form-control-solid" placeholder="Enter a role name" name="role_name" value="Developer" />
											</div>
											<div class="fv-row">
												<label class="fs-5 fw-bolder form-label mb-2">Perijinan ROle</label>
												<div class="table-responsive">
													<table class="table align-middle table-row-dashed fs-6 gy-5">
														<tbody class="text-gray-600 fw-bold">
															<tr>
																<td class="text-gray-800">Akses Administrasi</td>
																<td>
																	<label class="form-check form-check-sm form-check-custom form-check-solid me-9">
																		<input class="form-check-input" type="checkbox" value="" id="kt_roles_select_all" />
																		<span class="form-check-label" for="kt_roles_select_all">Select all</span>
																	</label>
																</td>
															</tr>
															<tr>
																<td class="text-gray-800">User Management</td>
																<td>
																	<div class="d-flex">
																		<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																			<input class="form-check-input" type="checkbox" value="" name="user_management_read" />
																			<span class="form-check-label">Baca</span>
																		</label>
																		<label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
																			<input class="form-check-input" type="checkbox" value="" name="user_management_write" />
																			<span class="form-check-label">Tulis</span>
																		</label>
																		<label class="form-check form-check-custom form-check-solid">
																			<input class="form-check-input" type="checkbox" value="" name="user_management_create" />
																			<span class="form-check-label">Membuat</span>
																		</label>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="text-gray-800">Content Management</td>
																<td>
																	<div class="d-flex">
																		<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																			<input class="form-check-input" type="checkbox" value="" name="content_management_read" />
																			<span class="form-check-label">Baca</span>
																		</label>
																		<label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
																			<input class="form-check-input" type="checkbox" value="" name="content_management_write" />
																			<span class="form-check-label">Tulis</span>
																		</label>
																		<label class="form-check form-check-custom form-check-solid">
																			<input class="form-check-input" type="checkbox" value="" name="content_management_create" />
																			<span class="form-check-label">Membuat</span>
																		</label>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="text-gray-800">Financial Management</td>
																<td>
																	<div class="d-flex">
																		<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																			<input class="form-check-input" type="checkbox" value="" name="financial_management_read" />
																			<span class="form-check-label">Baca</span>
																		</label>
																		<label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
																			<input class="form-check-input" type="checkbox" value="" name="financial_management_write" />
																			<span class="form-check-label">Tulis</span>
																		</label>
																		<label class="form-check form-check-custom form-check-solid">
																			<input class="form-check-input" type="checkbox" value="" name="financial_management_create" />
																			<span class="form-check-label">Membuat</span>
																		</label>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="text-gray-800">Reporting</td>
																<td>
																	<div class="d-flex">
																		<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																			<input class="form-check-input" type="checkbox" value="" name="reporting_read" />
																			<span class="form-check-label">Baca</span>
																		</label>
																		<label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
																			<input class="form-check-input" type="checkbox" value="" name="reporting_write" />
																			<span class="form-check-label">Tulis</span>
																		</label>
																		<label class="form-check form-check-custom form-check-solid">
																			<input class="form-check-input" type="checkbox" value="" name="reporting_create" />
																			<span class="form-check-label">Membuat</span>
																		</label>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="text-gray-800">Payroll</td>
																<td>
																	<div class="d-flex">
																		<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																			<input class="form-check-input" type="checkbox" value="" name="payroll_read" />
																			<span class="form-check-label">Baca</span>
																		</label>
																		<label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
																			<input class="form-check-input" type="checkbox" value="" name="payroll_write" />
																			<span class="form-check-label">Tulis</span>
																		</label>
																		<label class="form-check form-check-custom form-check-solid">
																			<input class="form-check-input" type="checkbox" value="" name="payroll_create" />
																			<span class="form-check-label">Membuat</span>
																		</label>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="text-gray-800">Disputes Management</td>
																<td>
																	<div class="d-flex">
																		<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																			<input class="form-check-input" type="checkbox" value="" name="disputes_management_read" />
																			<span class="form-check-label">Baca</span>
																		</label>
																		<label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
																			<input class="form-check-input" type="checkbox" value="" name="disputes_management_write" />
																			<span class="form-check-label">Tulis</span>
																		</label>
																		<label class="form-check form-check-custom form-check-solid">
																			<input class="form-check-input" type="checkbox" value="" name="disputes_management_create" />
																			<span class="form-check-label">Membuat</span>
																		</label>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="text-gray-800">API Controls</td>
																<td>
																	<div class="d-flex">
																		<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																			<input class="form-check-input" type="checkbox" value="" name="api_controls_read" />
																			<span class="form-check-label">Baca</span>
																		</label>
																		<label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
																			<input class="form-check-input" type="checkbox" value="" name="api_controls_write" />
																			<span class="form-check-label">Tulis</span>
																		</label>
																		<label class="form-check form-check-custom form-check-solid">
																			<input class="form-check-input" type="checkbox" value="" name="api_controls_create" />
																			<span class="form-check-label">Membuat</span>
																		</label>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="text-gray-800">Database Management</td>
																<td>
																	<div class="d-flex">
																		<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																			<input class="form-check-input" type="checkbox" value="" name="database_management_read" />
																			<span class="form-check-label">Baca</span>
																		</label>
																		<label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
																			<input class="form-check-input" type="checkbox" value="" name="database_management_write" />
																			<span class="form-check-label">Tulis</span>
																		</label>
																		<label class="form-check form-check-custom form-check-solid">
																			<input class="form-check-input" type="checkbox" value="" name="database_management_create" />
																			<span class="form-check-label">Membuat</span>
																		</label>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="text-gray-800">Repository Management</td>
																<td>
																	<div class="d-flex">
																		<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																			<input class="form-check-input" type="checkbox" value="" name="repository_management_read" />
																			<span class="form-check-label">Baca</span>
																		</label>
																		<label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
																			<input class="form-check-input" type="checkbox" value="" name="repository_management_write" />
																			<span class="form-check-label">Tulis</span>
																		</label>
																		<label class="form-check form-check-custom form-check-solid">
																			<input class="form-check-input" type="checkbox" value="" name="repository_management_create" />
																			<span class="form-check-label">Membuat</span>
																		</label>
																	</div>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<div class="text-center pt-15">
											<button type="reset" class="btn btn-light me-3" data-kt-roles-modal-action="cancel">Batal</button>
											<button type="submit" class="btn btn-primary" data-kt-roles-modal-action="submit">
												<span class="indicator-label">Submit</span>
												<span class="indicator-progress">Please wait...
													<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="flex-lg-row-fluid ms-lg-10">
					<div class="card card-flush mb-6 mb-xl-9">
						<div class="card-header pt-5">
							<div class="card-title">
								<h2 class="d-flex align-items-center">Pengguna
							</div>
							<div class="card-toolbar">
								<div class="d-flex align-items-center position-relative my-1">
									<span class="svg-icon svg-icon-1 position-absolute ms-6">
										<i class="fa-duotone fa-magnifying-glass fs-3"></i>
									</span>
									<input type="text" data-kt-roles-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Pencarian" />
								</div>
							</div>
						</div>
						<div class="card-body pt-0">
							<table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_roles_view_table">
								<thead>
									<tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
										<th class="w-10px pe-2">
											<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
												<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_roles_view_table .form-check-input" value="1" />
											</div>
										</th>
										<th class="min-w-50px">ID</th>
										<th class="min-w-150px">User</th>
										<th class="min-w-125px">Tanggal Bergabung</th>
										<th class="text-end min-w-100px">Aksi</th>
									</tr>
								</thead>
								<tbody class="fw-bold text-gray-600">
									<tr>
										<td>
											<div class="form-check form-check-sm form-check-custom form-check-solid">
												<input class="form-check-input" type="checkbox" value="1" />
											</div>
										</td>
										<td>ID3440</td>
										<td class="d-flex align-items-center">
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo8/dist/apps/user-management/users/view.html">
													<div class="symbol-label">
														<img src="<?= base_url(); ?>assets/media/avatars/150-1.jpg" alt="Emma Smith" class="w-100" />
													</div>
												</a>
											</div>
											<div class="d-flex flex-column">
												<a href="../../demo8/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Emma Smith</a>
												<span>e.smith@kpmg.com.au</span>
											</div>
										</td>
										<td>05 May 2021, 11:05 am</td>
										<td class="text-end">
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
</div>