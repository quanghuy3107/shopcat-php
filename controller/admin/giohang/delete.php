<?php
// include "../../../model/DAO/pdo.php";
// include "../../../model/DanhMucDAO.php";
$absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/duanmau";

include $absolute_path."/model/DAO/pdo.php";
include $absolute_path."/model/GioHangDAO.php";
    $nguoidung_id = $_GET['nguoidung_id'];
    $id = $_GET['giohang_id'];
    deleteGioHang($id);
    header("Location:../../web/index.php?action=giohang&&nguoidung_id={$nguoidung_id}&&page=1&&maxPageItem=5&&sortBy=desc&&sortName=sanpham_id");
?>