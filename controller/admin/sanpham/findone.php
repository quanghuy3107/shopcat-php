<?php

$absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/duanmau";
// include $absolute_path."/view/admin/danhmuc/update.php";
include $absolute_path."/model/SanPhamDAO.php";
$id = $_GET['sanpham_id'];
$sanphamupdate = findOneSanPham($id);
?>