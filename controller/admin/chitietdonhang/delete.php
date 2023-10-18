<?php
// include "../../../model/DAO/pdo.php";
// include "../../../model/DanhMucDAO.php";
$absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/duanmau";

include $absolute_path."/model/DAO/pdo.php";
include $absolute_path."/model/ChiTietDonHangDAO.php";
include $absolute_path."/model/DonHangDAO.php";
    $donhang_id = $_GET['donhang_id'];
    deleteChiTietDonHangByDonHang($donhang_id);
    deleteDonHang($donhang_id);
    header("Location:../admin.php?action=donhang&page=1&maxPageItem=4&&sortName=donhang_id&&sortBy=asc");
?>