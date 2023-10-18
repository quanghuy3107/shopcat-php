<?php
// include "../../../model/DAO/pdo.php";
// include "../../../model/DanhMucDAO.php";
$absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/duanmau";

include $absolute_path."/model/DAO/pdo.php";
include $absolute_path."/model/DanhGiaDAO.php";
    $sanpham_id = $_GET['sanpham_id'];
    $danhmuc_id = $_GET['danhmuc_id'];
    $id = $_GET['danhgia_id'];
    deleteDanhGia($id);
    header("Location:../../web/index.php?action=chitietsanpham&&sanpham_id={$sanpham_id}&&page=1&&maxPageItem=4&&sortBy=desc&&sortName=sanpham_id&&danhmuc={$danhmuc_id} ?>&&sortByDanhGia=desc&&sortNameDanhGia=ngayviet ");
?>