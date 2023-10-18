<?php
$absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/duanmau";

include $absolute_path."/model/DAO/pdo.php";
include $absolute_path."/model/NguoiDungDAO.php";
include $absolute_path."/model/GioHangDAO.php";
include $absolute_path."/model/DanhGiaDAO.php";
include $absolute_path."/model/ChiTietDonHangDAO.php";
include $absolute_path."/model/DonHangDAO.php";
    $id = $_GET['id'];
    deleteDanhGiaByNguoiDung($id);
    deleteGioHangById($id);
    $listDonHang = selectChiTietDonHangByNguoiDUng($id);
    foreach($listDonHang as $donHang){
        deleteChiTietDonHang($donHang['chitietdonhang_id']);
    }
    deleteDonHangByNguoiDung($id);
    deleteNguoiDung($id);
    header("Location:../admin.php?action=taikhoan");
?>