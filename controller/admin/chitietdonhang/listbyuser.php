<?php

$absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/duanmau";

include $absolute_path."/model/ChiTietDonHangDAO.php";

$nguoidung_id = $_SESSION['nguoidung']['nguoidung_id'];
$listDonHang = selectChiTietDonHangByNguoiDUng($nguoidung_id);
// $listSanPham = selectSanPham($sortName,$sortBy,$offset,$maxPageItem);

// print_r($listSanPham);

?>