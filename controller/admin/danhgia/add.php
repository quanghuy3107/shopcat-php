<?php
// include "../../../model/DAO/pdo.php";
    $absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/duanmau";
    include $absolute_path . "/model/DAO/pdo.php";
    include $absolute_path . "/model/DanhGiaDAO.php";

    $sanpham_id = (int)$_GET['sanpham_id'];
    $nguoidung_id = (int)$_GET['nguoidung_id'];
    $noidung = $_GET['noidung'];
    $danhmuc = $_GET['danhmuc_id'];
    $now = new DateTime();
    $timezone = new DateTimeZone('Asia/Ho_Chi_Minh');
    $now->setTimezone($timezone);

    $formattedDateTime = $now->format('Y-m-d H:i:s');
    insertDanhGia($nguoidung_id,$sanpham_id,$noidung,$formattedDateTime);
    header("Location:../../web/index.php?action=chitietsanpham&&sanpham_id={$sanpham_id}&&page=1&&maxPageItem=4&&sortBy=desc&&sortName=sanpham_id&&danhmuc={$danhmuc}&&sortByDanhGia=desc&&sortNameDanhGia=ngayviet  ")
?>