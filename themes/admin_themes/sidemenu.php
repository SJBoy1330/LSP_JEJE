<div class="aside-menu flex-column-fluid">
    <div class="hover-scroll-overlay-y px-2 my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="5px">
        <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
            <!-- MANAGEMENT -->
            <div class="menu-item">
                <div class="menu-content pb-2">
                    <span class="menu-section text-muted text-uppercase fs-8 ls-1">MANAGEMENT</span>
                </div>
            </div>
            <div class="menu-item">
                <a class="menu-link <?php if (strpos(current_url(), "user")) {
                                        echo 'active';
                                    } ?>" href="<?= base_url('user'); ?>">
                    <span class="menu-icon">
                        <i class="fa-duotone fa-square-person-confined fs-3"></i>
                    </span>
                    <span class="menu-title">Management User</span>
                </a>
            </div>
            <div class="menu-item">
                <a class="menu-link <?php if (strpos(current_url(), "menu")) {
                                        echo 'active';
                                    } ?>" href="<?= base_url('menu'); ?>">
                    <span class="menu-icon">
                        <i class="fa-duotone fa-square-person-confined fs-3"></i>
                    </span>
                    <span class="menu-title">Management Menu</span>
                </a>
            </div>

            <!-- Transaksi -->
            <div class="menu-item">
                <div class="menu-content pb-2">
                    <span class="menu-section text-muted text-uppercase fs-8 ls-1">Transaksi</span>
                </div>
            </div>
            <div class="menu-item">
                <a class="menu-link <?php if (strpos(current_url(), "transaksi/kasir")) {
                                        echo 'active';
                                    } ?>" href="<?= base_url('transaksi/kasir'); ?>">
                    <span class="menu-icon">
                        <i class="fa-duotone fa-cash-register fs-3"></i>
                    </span>
                    <span class="menu-title">Transaksi</span>
                </a>
            </div>






            <!-- Pengaturan -->
            <div class="menu-item">
                <div class="menu-content pb-2">
                    <span class="menu-section text-muted text-uppercase fs-8 ls-1">Pengaturan</span>
                </div>
            </div>

            <div class="menu-item">
                <a class="menu-link <?php if (strpos(current_url(), "pengaturan/role")) {
                                        echo 'active';
                                    } ?>" href="<?= base_url('pengaturan/role'); ?>">
                    <span class="menu-icon">
                        <i class="fa-duotone fa-grid-2 fs-3"></i>
                    </span>
                    <span class="menu-title">Pengaturan Role</span>
                </a>
            </div>
            <div class="menu-item">
                <a class="menu-link <?php if (strpos(current_url(), "pengaturan/riwayat")) {
                                        echo 'active';
                                    } ?>" href="<?= base_url('pengaturan/riwayat'); ?>">
                    <span class="menu-icon">
                        <i class="fa-duotone fa-square-person-confined fs-3"></i>
                    </span>
                    <span class="menu-title">Pengaturan Riwayat</span>
                </a>
            </div>


            <!-- Laporan -->
            <div class="menu-item">
                <div class="menu-content pb-2">
                    <span class="menu-section text-muted text-uppercase fs-8 ls-1">Laporan</span>
                </div>
            </div>
            <div class="menu-item">
                <a class="menu-link <?php if (strpos(current_url(), "transaksi/laporan_pendapatan")) {
                                        echo 'active';
                                    } ?>" href="<?= base_url('transaksi/laporan_pendapatan'); ?>">
                    <span class="menu-icon">
                        <i class="fa-duotone fa-cash-register fs-3"></i>
                    </span>
                    <span class="menu-title">Laporan Pendapatan</span>
                </a>
            </div>

        </div>
    </div>
</div>
<div class="aside-footer flex-column-auto py-5" id="kt_aside_footer">
    <a href="<?= base_url('auth/logout'); ?>" class="btn btn-custom btn-primary w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click">
        <span class="btn-label">LOGOUT</span>
        <span class="svg-icon btn-icon svg-icon-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z" fill="black" />
                <rect x="7" y="17" width="6" height="2" rx="1" fill="black" />
                <rect x="7" y="12" width="10" height="2" rx="1" fill="black" />
                <rect x="7" y="7" width="6" height="2" rx="1" fill="black" />
                <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
            </svg>
        </span>
    </a>
</div>
</div>
<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
    <div id="kt_header" style="" class="header align-items-stretch">
        <div class="header-brand">
            <h1 class="text-white">
                CafeGraf
            </h1>
        </div>
    </div>