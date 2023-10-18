<?php
// include "../../../model/DAO/pdo.php";
// include "../../../model/DanhMucDAO.php";
$absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/duanmau";
include $absolute_path."/model/DAO/pdo.php";
include $absolute_path."/model/SanPhamDAO.php";
include $absolute_path."/model/GioHangDAO.php";
include $absolute_path."/model/DanhGiaDAO.php";
include $absolute_path."/model/ChiTietDonHangDAO.php";
    $id = $_GET['sanpham_id'];
    deleteDanhGiaBySanPham($id);
    $listChiTietDonHang = selectChiTietDonHangBySanPham($id);
    foreach($listChiTietDonHang as $chiTietDonHang){
        deleteChiTietDonHang($chiTietDonHang);
    }
    deleteGioHangBySanPham($id);
    deleteSanPham($id);
    header("Location:../admin.php?action=danhsachsanpham&page=1&&maxPageItem=2&&sortName=luotxem&&sortBy=desc");
?>