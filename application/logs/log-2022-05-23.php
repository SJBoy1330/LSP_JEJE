<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-05-23 04:08:08 --> Query error: Table 'grafika_cafe_jeje.role' doesn't exist in engine - Invalid query: SELECT *
FROM `role`
WHERE `id_role` = '1'
ERROR - 2022-05-23 04:08:08 --> Severity: error --> Exception: Call to a member function row() on bool C:\xampp\htdocs\LSP\LSP_JEJE\application\core\MY_Model.php 147
ERROR - 2022-05-23 04:08:11 --> Query error: Table 'grafika_cafe_jeje.role' doesn't exist in engine - Invalid query: SELECT *
FROM `role`
WHERE `id_role` = '1'
ERROR - 2022-05-23 04:08:11 --> Severity: error --> Exception: Call to a member function row() on bool C:\xampp\htdocs\LSP\LSP_JEJE\application\core\MY_Model.php 147
ERROR - 2022-05-23 04:08:13 --> Query error: Table 'grafika_cafe_jeje.role' doesn't exist in engine - Invalid query: SELECT *
FROM `role`
WHERE `id_role` = '1'
ERROR - 2022-05-23 04:08:13 --> Severity: error --> Exception: Call to a member function row() on bool C:\xampp\htdocs\LSP\LSP_JEJE\application\core\MY_Model.php 147
ERROR - 2022-05-23 04:09:37 --> Query error: Table 'grafika_cafe_jeje.role' doesn't exist in engine - Invalid query: SELECT *
FROM `role`
WHERE `id_role` = '1'
ERROR - 2022-05-23 04:09:37 --> Severity: error --> Exception: Call to a member function row() on bool C:\xampp\htdocs\LSP\LSP_JEJE\application\core\MY_Model.php 147
ERROR - 2022-05-23 04:10:59 --> Query error: Table 'grafika_cafe_jeje.role' doesn't exist - Invalid query: SELECT *
FROM `role`
WHERE `id_role` = '1'
ERROR - 2022-05-23 04:10:59 --> Severity: error --> Exception: Call to a member function row() on bool C:\xampp\htdocs\LSP\LSP_JEJE\application\core\MY_Model.php 147
ERROR - 2022-05-23 04:12:20 --> Severity: Notice --> Trying to get property 'landing' of non-object C:\xampp\htdocs\LSP\LSP_JEJE\modules\dashboard\controllers\Controller_ctl.php 8
ERROR - 2022-05-23 04:47:25 --> Query error: Unknown column 'nama_menu' in 'field list' - Invalid query: INSERT INTO `menu` (`nama_menu`, `harga_menu`, `gambar_menu`, `pembuat_menu`, `create_date`, `aktif`) VALUES ('Nasi goreng malaysia', 20000, 'gambar1.jpg', 1, '2022-05-23 04:47:25', 'Y')
ERROR - 2022-05-23 04:47:45 --> Query error: Unknown column 'nama_menu' in 'field list' - Invalid query: INSERT INTO `menu` (`nama_menu`, `harga_menu`, `gambar_menu`, `pembuat_menu`, `create_date`, `aktif`) VALUES ('Nasi goreng malaysia', 20000, 'gambar1.jpg', 1, '2022-05-23 04:47:45', 'Y')
ERROR - 2022-05-23 04:52:58 --> Query error: Unknown column 'nama_menu' in 'field list' - Invalid query: INSERT INTO `menu` (`nama_menu`, `harga_menu`, `gambar_menu`, `pembuat_menu`, `create_date`, `aktif`) VALUES ('qr', 'qrg', 'gambar1.jpg', 1, '2022-05-23 04:52:58', 'Y')
ERROR - 2022-05-23 04:55:57 --> Query error: Unknown column 'gambar_menu' in 'field list' - Invalid query: INSERT INTO `menu` (`gambar_menu`, `nama_menu`, `harga_menu`, `pembuat_menu`, `create_date`, `aktif`) VALUES ('628ab16db3563.jpeg', 'ada', '12000', 1, '2022-05-23 04:55:57', 'Y')
ERROR - 2022-05-23 04:57:19 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`grafika_cafe_jeje`.`menu`, CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `menu` (`gambar`, `nama`, `harga`, `id_user`, `create_date`, `aktif`) VALUES ('628ab1bfec25d.jpeg', 'r', '12000', 1, '2022-05-23 04:57:19', 'Y')
ERROR - 2022-05-23 04:58:12 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`grafika_cafe_jeje`.`menu`, CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `menu` (`gambar`, `nama`, `harga`, `id_user`, `create_date`, `aktif`) VALUES ('628ab1f4609f8.jpeg', 'avd', '11345', 1, '2022-05-23 04:58:12', 'Y')
ERROR - 2022-05-23 04:59:36 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`grafika_cafe_jeje`.`menu`, CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE SET NULL ON UPDATE CASCADE) - Invalid query: INSERT INTO `menu` (`gambar`, `nama`, `harga`, `id_user`, `create_date`, `aktif`) VALUES ('628ab2483cb32.jpeg', 'da', '2345', 1, '2022-05-23 04:59:36', 'Y')
ERROR - 2022-05-23 05:00:17 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`grafika_cafe_jeje`.`riwayat`, CONSTRAINT `log_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `riwayat` (`id_user`, `riwayat`, `tanggal`) VALUES (1, 'Membuat menu baru dengan nama : <b>advrq</b>', '2022-05-23 05:00:17')
ERROR - 2022-05-23 05:21:35 --> Query error: Unknown column 'nama_menu' in 'field list' - Invalid query: UPDATE `menu` SET `nama_menu` = 'Nasi goreng malaysia', `harga_menu` = 20000, `gambar_menu` = 'gambar1.jpg', `pembuat_menu` = NULL, `create_date` = '2022-05-23 05:21:35', `aktif` = 'Y'
WHERE `id_menu` = 1
ERROR - 2022-05-23 05:21:47 --> Query error: Unknown column 'nama_menu' in 'field list' - Invalid query: UPDATE `menu` SET `nama_menu` = 'Nasi goreng malaysia', `harga_menu` = 20000, `gambar_menu` = 'gambar1.jpg', `pembuat_menu` = NULL, `create_date` = '2022-05-23 05:21:47', `aktif` = 'Y'
WHERE `id_menu` = 1
ERROR - 2022-05-23 05:21:55 --> Query error: Unknown column 'nama_menu' in 'field list' - Invalid query: UPDATE `menu` SET `nama_menu` = 'Nasi goreng malaysia', `harga_menu` = 20000, `gambar_menu` = 'gambar1.jpg', `pembuat_menu` = NULL, `create_date` = '2022-05-23 05:21:55', `aktif` = 'Y'
WHERE `id_menu` = 1
ERROR - 2022-05-23 05:23:52 --> 404 Page Not Found: /index
ERROR - 2022-05-23 05:23:56 --> 404 Page Not Found: /index
ERROR - 2022-05-23 05:24:04 --> 404 Page Not Found: /index
ERROR - 2022-05-23 05:25:36 --> 404 Page Not Found: /index
ERROR - 2022-05-23 05:25:37 --> 404 Page Not Found: /index
ERROR - 2022-05-23 05:25:44 --> 404 Page Not Found: /index
ERROR - 2022-05-23 05:34:13 --> Query error: Unknown column 'tanggal' in 'where clause' - Invalid query: SELECT *
FROM `transaksi`
WHERE DATE(tanggal) = '2022-05-23'
ERROR - 2022-05-23 05:34:13 --> Severity: error --> Exception: Call to a member function result() on bool C:\xampp\htdocs\LSP\LSP_JEJE\application\core\MY_Model.php 133
