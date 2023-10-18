<?php
// include "../../../model/DAO/pdo.php";
$absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/duanmau";
include $absolute_path."/model/DAO/pdo.php";
include $absolute_path."/model/DonHangDAO.php";
    $soLuong = $_GET['quantity'];
    $sanpham_id = $_GET['sanpham_id'];
    $giaSanPham = $_GET['giasanpham'];
    $nguoidung_id = $_GET['nguoidung_id'];
    $tongTien = $soLuong * $giaSanPham;
    
?>