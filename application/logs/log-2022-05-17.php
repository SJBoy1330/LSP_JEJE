<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-05-17 10:29:00 --> Query error: Unknown column 'role' in 'field list' - Invalid query: INSERT INTO `user` (`username`, `nama`, `password`, `role`, `aktif`, `online`, `online_akses`) VALUES ('admin', 'Saka Dana Asmara', '41e5653fc7aeb894026d6bb7b2db7f65902b454945fa8fd65a6327047b5277fb', 1, 'Y', 'Y', '2022-05-17 10:29:00')
ERROR - 2022-05-17 10:34:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '1 = ''
WHERE `id_user` = 1' at line 1 - Invalid query: UPDATE `user` SET 1 = ''
WHERE `id_user` = 1
ERROR - 2022-05-17 10:44:49 --> Severity: Notice --> Undefined property: CI::$log_aktifitas_m C:\xampp\htdocs\LSP\LSP_SAKA\application\third_party\MX\Controller.php 73
ERROR - 2022-05-17 10:44:49 --> Severity: error --> Exception: Call to a member function insert() on null C:\xampp\htdocs\LSP\LSP_SAKA\modules\user\controllers\Function_ctl.php 33
ERROR - 2022-05-17 10:45:55 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`grafika_cafe_saka`.`log_aktifitas`, CONSTRAINT `log_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `log_aktifitas` (`id_user`, `log_aktifitas`, `tanggal`) VALUES ('', 'Membuat user baru dengan nama : <b>Saka dana asmara</b>', '2022-05-17 10:45:55')
ERROR - 2022-05-17 10:46:11 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`grafika_cafe_saka`.`log_aktifitas`, CONSTRAINT `log_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `log_aktifitas` (`id_user`, `log_aktifitas`, `tanggal`) VALUES ('', 'Membuat user baru dengan nama : <b>Saka dana asmara</b>', '2022-05-17 10:46:11')
ERROR - 2022-05-17 10:46:35 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`grafika_cafe_saka`.`log_aktifitas`, CONSTRAINT `log_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `log_aktifitas` (`id_user`, `log_aktifitas`, `tanggal`) VALUES ('', 'Membuat user baru dengan nama : <b>Saka dana asmara</b>', '2022-05-17 10:46:35')
ERROR - 2022-05-17 11:26:25 --> Severity: Notice --> Undefined property: CI::$menu_m C:\xampp\htdocs\LSP\LSP_SAKA\application\third_party\MX\Controller.php 73
ERROR - 2022-05-17 11:26:25 --> Severity: error --> Exception: Call to a member function insert() on null C:\xampp\htdocs\LSP\LSP_SAKA\modules\menu\controllers\Function_ctl.php 32
ERROR - 2022-05-17 11:41:55 --> Severity: Notice --> Undefined property: stdClass::$nama C:\xampp\htdocs\LSP\LSP_SAKA\modules\menu\controllers\Function_ctl.php 120
ERROR - 2022-05-17 13:18:35 --> Query error: Unknown column 'harga_peritem' in 'field list' - Invalid query: INSERT INTO `transaksi` (`harga_peritem`, `id_transaksi`, `jumlah_pesan`, `nama_menu`, `total_harga`) VALUES (5000,1,2,'Nasi goreng',10000), (10000,1,2,'Mie goreng aceh',20000), (20000,1,1,'Capjay',20000)
ERROR - 2022-05-17 13:19:12 --> Severity: Notice --> Trying to get property 'nama_menu' of non-object C:\xampp\htdocs\LSP\LSP_SAKA\modules\transaksi\controllers\Function_ctl.php 47