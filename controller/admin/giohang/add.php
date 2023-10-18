<?php
// include "../../../model/DAO/pdo.php";

    $absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/duanmau";
    include $absolute_path . "/model/DAO/pdo.php";
    include $absolute_path . "/model/GioHangDAO.php";

    $sanpham_id = (int)$_GET['sanpham_id'];
    $nguoidung_id = (int)$_GET['nguoidung_id'];
    $soluong = (int)$_GET['quantity'];
    $danhmuc = $_GET['danhmuc_id'];

    insertGioHang($nguoidung_id,$sanpham_id,$soluong);
    header("Location:../../web/index.php?action=chitietsanpham&&sanpham_id={$sanpham_id}&&page=1&&maxPageItem=4&&sortBy=desc&&sortName=sanpham_id&&danhmuc={$danhmuc}&&sortByDanhGia=desc&&sortNameDanhGia=ngayviet  ");
?>