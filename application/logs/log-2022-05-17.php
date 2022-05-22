<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

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
ERROR - 2022-05-17 14:00:22 --> Severity: Notice --> Undefined variable: value C:\xampp\htdocs\LSP\LSP_JEJE\modules\auth\controllers\Controller_ctl.php 16
ERROR - 2022-05-17 14:00:22 --> Severity: Notice --> Undefined variable: value C:\xampp\htdocs\LSP\LSP_JEJE\modules\auth\controllers\Controller_ctl.php 16
ERROR - 2022-05-17 14:01:12 --> Severity: Notice --> Undefined variable: value C:\xampp\htdocs\LSP\LSP_JEJE\modules\auth\controllers\Controller_ctl.php 16
ERROR - 2022-05-17 14:01:12 --> Severity: Notice --> Undefined variable: value C:\xampp\htdocs\LSP\LSP_JEJE\modules\auth\controllers\Controller_ctl.php 16
ERROR - 2022-05-17 14:01:12 --> Severity: Notice --> Undefined variable: value C:\xampp\htdocs\LSP\LSP_JEJE\modules\auth\controllers\Controller_ctl.php 16
ERROR - 2022-05-17 14:01:12 --> Severity: Notice --> Undefined variable: value C:\xampp\htdocs\LSP\LSP_JEJE\modules\auth\controllers\Controller_ctl.php 16
ERROR - 2022-05-17 14:01:31 --> Severity: Notice --> Undefined variable: value C:\xampp\htdocs\LSP\LSP_JEJE\modules\auth\controllers\Controller_ctl.php 16
ERROR - 2022-05-17 14:01:31 --> Severity: Notice --> Undefined variable: value C:\xampp\htdocs\LSP\LSP_JEJE\modules\auth\controllers\Controller_ctl.php 16
ERROR - 2022-05-17 14:05:34 --> 404 Page Not Found: /index
ERROR - 2022-05-17 14:05:35 --> 404 Page Not Found: /index
ERROR - 2022-05-17 14:05:57 --> Query error: Unknown column 'role' in 'field list' - Invalid query: INSERT INTO `user` (`username`, `nama`, `password`, `role`, `aktif`, `online`, `online_akses`) VALUES ('admin', 'Sidatata Al Jennar', '41e5653fc7aeb894026d6bb7b2db7f65902b454945fa8fd65a6327047b5277fb', 1, 'Y', 'Y', '2022-05-17 14:05:57')
ERROR - 2022-05-17 14:08:11 --> Query error: Unknown column 'role' in 'field list' - Invalid query: INSERT INTO `user` (`username`, `nama`, `password`, `role`, `aktif`, `online`, `last_access`) VALUES ('admin', 'Sidatata Al Jennar', '41e5653fc7aeb894026d6bb7b2db7f65902b454945fa8fd65a6327047b5277fb', 1, 'Y', 'Y', '2022-05-17 14:08:11')
ERROR - 2022-05-17 14:08:59 --> Query error: Unknown column 'role' in 'field list' - Invalid query: INSERT INTO `user` (`username`, `nama`, `password`, `role`, `aktif`, `online`, `last_access`) VALUES ('admin', 'Sidatata Al Jennar', '41e5653fc7aeb894026d6bb7b2db7f65902b454945fa8fd65a6327047b5277fb', 1, 'Y', 'Y', '2022-05-17 14:08:59')
ERROR - 2022-05-17 14:09:00 --> Query error: Unknown column 'role' in 'field list' - Invalid query: INSERT INTO `user` (`username`, `nama`, `password`, `role`, `aktif`, `online`, `last_access`) VALUES ('admin', 'Sidatata Al Jennar', '41e5653fc7aeb894026d6bb7b2db7f65902b454945fa8fd65a6327047b5277fb', 1, 'Y', 'Y', '2022-05-17 14:09:00')
ERROR - 2022-05-17 14:09:38 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`grafika_cafe_jeje`.`user`, CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `user` (`username`, `nama`, `password`, `id_role`, `aktif`, `online`, `last_access`) VALUES ('admin', 'Sidatata Al Jennar', '41e5653fc7aeb894026d6bb7b2db7f65902b454945fa8fd65a6327047b5277fb', 1, 'Y', 'Y', '2022-05-17 14:09:38')
ERROR - 2022-05-17 14:09:39 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`grafika_cafe_jeje`.`user`, CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `user` (`username`, `nama`, `password`, `id_role`, `aktif`, `online`, `last_access`) VALUES ('admin', 'Sidatata Al Jennar', '41e5653fc7aeb894026d6bb7b2db7f65902b454945fa8fd65a6327047b5277fb', 1, 'Y', 'Y', '2022-05-17 14:09:39')
ERROR - 2022-05-17 14:11:43 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`grafika_cafe_jeje`.`riwayat`, CONSTRAINT `log_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `riwayat` (`id_user`, `riwayat`, `tanggal`) VALUES (1, 'Membuat user baru dengan nama : <b>Sidatata Al Jennar</b>', '2022-05-17 14:11:43')
ERROR - 2022-05-17 14:12:07 --> Severity: Notice --> Undefined variable: cek_password C:\xampp\htdocs\LSP\LSP_JEJE\modules\auth\controllers\Controller_ctl.php 28
ERROR - 2022-05-17 14:12:07 --> Severity: Notice --> Trying to get property 'id_user' of non-object C:\xampp\htdocs\LSP\LSP_JEJE\modules\auth\controllers\Controller_ctl.php 28
ERROR - 2022-05-17 14:12:08 --> 404 Page Not Found: /index
ERROR - 2022-05-17 14:16:27 --> 404 Page Not Found: /index
ERROR - 2022-05-17 14:16:43 --> 404 Page Not Found: /index
ERROR - 2022-05-17 14:19:18 --> 404 Page Not Found: /index
ERROR - 2022-05-17 14:20:25 --> 404 Page Not Found: /index
ERROR - 2022-05-17 15:10:16 --> 404 Page Not Found: /index
ERROR - 2022-05-17 15:12:18 --> 404 Page Not Found: /index
ERROR - 2022-05-17 15:12:25 --> 404 Page Not Found: /index
ERROR - 2022-05-17 15:14:16 --> 404 Page Not Found: /index
ERROR - 2022-05-17 15:17:07 --> 404 Page Not Found: ../../modules/pengaturan/controllers//index
ERROR - 2022-05-17 15:17:31 --> 404 Page Not Found: /index
ERROR - 2022-05-17 15:28:57 --> Query error: Column 'id_role' in where clause is ambiguous - Invalid query: SELECT *
FROM `user`
LEFT JOIN `role` ON `role`.`id_role` = `user`.`id_role`
WHERE `id_role` != 1
ERROR - 2022-05-17 15:28:57 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\xampp\htdocs\LSP\LSP_JEJE\application\core\MY_Model.php 467
ERROR - 2022-05-17 15:29:28 --> Query error: Column 'id_role' in where clause is ambiguous - Invalid query: SELECT *
FROM `user`
LEFT JOIN `role` ON `role`.`id_role` = `user`.`id_role`
WHERE `id_role` != 1
ERROR - 2022-05-17 15:29:28 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\xampp\htdocs\LSP\LSP_JEJE\application\core\MY_Model.php 467
ERROR - 2022-05-17 15:30:15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\LSP\LSP_JEJE\modules\user\views\index.php 31
ERROR - 2022-05-17 16:01:03 --> Severity: error --> Exception: syntax error, unexpected ';', expecting ')' C:\xampp\htdocs\LSP\LSP_JEJE\modules\user\views\index.php 77
ERROR - 2022-05-17 16:04:36 --> 404 Page Not Found: ../../modules/user/controllers/Function_ctl/hapus_user
ERROR - 2022-05-17 16:05:48 --> Severity: Notice --> Undefined property: CI::$log_aktifitas_m C:\xampp\htdocs\LSP\LSP_JEJE\application\third_party\MX\Controller.php 73
ERROR - 2022-05-17 16:05:48 --> Severity: error --> Exception: Call to a member function insert() on null C:\xampp\htdocs\LSP\LSP_JEJE\modules\user\controllers\Function_ctl.php 147ERROR - 2022-05-17 16:07:36 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`grafika_cafe_jeje`.`riwayat`, CONSTRAINT `log_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `riwayat` (`id_user`, `riwayat`, `tanggal`) VALUES ('13', 'Membuat user baru dengan nama : <b>a</b>', '2022-05-17 16:07:36')
ERROR - 2022-05-17 16:07:43 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`grafika_cafe_jeje`.`riwayat`, CONSTRAINT `log_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `riwayat` (`id_user`, `riwayat`, `tanggal`) VALUES ('13', 'Menghapus user dengan nama = <b>a</b>', '2022-05-17 16:07:43')
ERROR - 2022-05-17 16:08:44 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`grafika_cafe_jeje`.`riwayat`, CONSTRAINT `log_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `riwayat` (`id_user`, `riwayat`, `tanggal`) VALUES ('13', 'Membuat user baru dengan nama : <b>a</b>', '2022-05-17 16:08:44')
ERROR - 2022-05-17 16:08:48 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`grafika_cafe_jeje`.`riwayat`, CONSTRAINT `log_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `riwayat` (`id_user`, `riwayat`, `tanggal`) VALUES ('13', 'Menghapus user dengan nama = <b>a</b>', '2022-05-17 16:08:48')
ERROR - 2022-05-17 16:10:00 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`grafika_cafe_jeje`.`riwayat`, CONSTRAINT `log_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `riwayat` (`id_user`, `riwayat`, `tanggal`) VALUES ('13', 'Membuat user baru dengan nama : <b>s</b>', '2022-05-17 16:10:00')
ERROR - 2022-05-17 16:10:04 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`grafika_cafe_jeje`.`riwayat`, CONSTRAINT `log_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `riwayat` (`id_user`, `riwayat`, `tanggal`) VALUES ('13', 'Menghapus user dengan nama = <b>s</b>', '2022-05-17 16:10:04')
ERROR - 2022-05-17 16:23:23 --> Severity: Notice --> Undefined variable: role C:\xampp\htdocs\LSP\LSP_JEJE\modules\user\views\modal.php 27
ERROR - 2022-05-17 16:24:07 --> Severity: Notice --> Undefined variable: role C:\xampp\htdocs\LSP\LSP_JEJE\modules\user\views\modal.php 27
ERROR - 2022-05-17 16:24:16 --> Severity: Notice --> Undefined variable: role C:\xampp\htdocs\LSP\LSP_JEJE\modules\user\views\modal.php 27
ERROR - 2022-05-17 16:24:52 --> Severity: Notice --> Undefined variable: role C:\xampp\htdocs\LSP\LSP_JEJE\modules\user\views\modal.php 27
ERROR - 2022-05-17 16:25:00 --> Severity: Notice --> Undefined variable: role C:\xampp\htdocs\LSP\LSP_JEJE\modules\user\views\modal.php 27
ERROR - 2022-05-17 16:25:38 --> Severity: Notice --> Undefined variable: judul C:\xampp\htdocs\LSP\LSP_JEJE\modules\user\views\modal.php 3
ERROR - 2022-05-17 16:25:38 --> Severity: Notice --> Undefined variable: role C:\xampp\htdocs\LSP\LSP_JEJE\modules\user\views\modal.php 27
ERROR - 2022-05-17 16:25:41 --> Severity: Notice --> Undefined variable: judul C:\xampp\htdocs\LSP\LSP_JEJE\modules\user\views\modal.php 3
ERROR - 2022-05-17 16:25:41 --> Severity: Notice --> Undefined variable: role C:\xampp\htdocs\LSP\LSP_JEJE\modules\user\views\modal.php 27
ERROR - 2022-05-17 16:25:51 --> Severity: Notice --> Undefined variable: role C:\xampp\htdocs\LSP\LSP_JEJE\modules\user\views\modal.php 27
ERROR - 2022-05-17 16:25:53 --> Severity: Notice --> Undefined variable: role C:\xampp\htdocs\LSP\LSP_JEJE\modules\user\views\modal.php 27
ERROR - 2022-05-17 16:27:55 --> Severity: Notice --> Undefined variable: role C:\xampp\htdocs\LSP\LSP_JEJE\modules\user\views\modal.php 31
ERROR - 2022-05-17 16:31:58 --> Severity: Notice --> Undefined variable: reuslt C:\xampp\htdocs\LSP\LSP_JEJE\modules\user\views\modal.php 7
ERROR - 2022-05-17 16:31:58 --> Severity: Notice --> Trying to get property 'id_user' of non-object C:\xampp\htdocs\LSP\LSP_JEJE\modules\user\views\modal.php 7
ERROR - 2022-05-17 16:31:58 --> Severity: Notice --> Undefined variable: role C:\xampp\htdocs\LSP\LSP_JEJE\modules\user\views\modal.php 34
ERROR - 2022-05-17 16:32:13 --> Severity: Notice --> Undefined variable: reuslt C:\xampp\htdocs\LSP\LSP_JEJE\modules\user\views\modal.php 7
ERROR - 2022-05-17 16:32:13 --> Severity: Notice --> Trying to get property 'id_user' of non-object C:\xampp\htdocs\LSP\LSP_JEJE\modules\user\views\modal.php 7
ERROR - 2022-05-17 16:32:13 --> Severity: Notice --> Undefined variable: role C:\xampp\htdocs\LSP\LSP_JEJE\modules\user\views\modal.php 34
ERROR - 2022-05-17 16:32:32 --> Severity: Notice --> Undefined variable: role C:\xampp\htdocs\LSP\LSP_JEJE\modules\user\views\modal.php 34
ERROR - 2022-05-17 16:32:40 --> Severity: Notice --> Undefined variable: role C:\xampp\htdocs\LSP\LSP_JEJE\modules\user\views\modal.php 34
ERROR - 2022-05-17 16:33:52 --> Severity: Notice --> Undefined variable: role C:\xampp\htdocs\LSP\LSP_JEJE\modules\user\views\modal.php 34
ERROR - 2022-05-17 16:34:25 --> Severity: Notice --> Undefined variable: role C:\xampp\htdocs\LSP\LSP_JEJE\modules\user\views\modal.php 34
ERROR - 2022-05-17 16:35:05 --> Severity: Notice --> Undefined variable: role C:\xampp\htdocs\LSP\LSP_JEJE\modules\user\views\modal.php 34
ERROR - 2022-05-17 16:35:35 --> Severity: Notice --> Undefined variable: role C:\xampp\htdocs\LSP\LSP_JEJE\modules\user\views\modal.php 34
ERROR - 2022-05-17 16:37:35 --> Severity: Notice --> Undefined variable: action C:\xampp\htdocs\LSP\LSP_JEJE\modules\user\views\modal.php 1
ERROR - 2022-05-17 16:37:35 --> Severity: Notice --> Undefined variable: judul C:\xampp\htdocs\LSP\LSP_JEJE\modules\user\views\modal.php 3
ERROR - 2022-05-17 16:37:35 --> Severity: Notice --> Undefined variable: role C:\xampp\htdocs\LSP\LSP_JEJE\modules\user\views\modal.php 34
