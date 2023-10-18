<?php
// include "../../../model/DAO/pdo.php";
$absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/duanmau";
include $absolute_path."/model/DAO/pdo.php";
include $absolute_path."/model/DonHangDAO.php";
include $absolute_path."/model/ChiTietDonHangDAO.php";
include $absolute_path."/model/SanPhamDAO.php";

    $soLuong = $_GET['quantity'];
    $sanpham_id = $_GET['sanpham_id'];
    $nguoidung_id = $_GET['nguoidung_id'];
    $tongTien = $_GET['tongtien'];
    $phuongThucThanhToan = $_GET['thanhtoan'];
    $now = new DateTime();
    $timezone = new DateTimeZone('Asia/Ho_Chi_Minh');
    $now->setTimezone($timezone);
    $formattedDateTime = $now->format('Y-m-d H:i:s');
    $donhang_id = insertDonHang($phuongThucThanhToan,$soLuong,$tongTien,$formattedDateTime,0,$nguoidung_id);
    insertChiTietDonHang($donhang_id,$sanpham_id);
    updateProductSold($sanpham_id,$soLuong);
    header("Location:../../web/index.php?action=thanhcong");
?>