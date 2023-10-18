<?php
// session_start();
$absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/duanmau";
// include $absolute_path."/view/admin/danhmuc/update.php";
include $absolute_path."/model/NguoiDungDAO.php";
$id = $_GET['nguoidung_id'];
$nguoiDung = findOneNguoiDung($id);
?>