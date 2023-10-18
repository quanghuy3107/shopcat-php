<?php
// include "../../../model/DAO/pdo.php";
// include "../../../model/DanhMucDAO.php";
$absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/duanmau";

include $absolute_path."/model/DAO/pdo.php";
include $absolute_path."/model/DanhGiaDAO.php";
    $sanpham_id = $_GET['id'];
    $id = $_GET['danhgia_id'];
    deleteDanhGia($id);
    header("Location:../admin.php?action=danhgia&&sanpham_id={$sanpham_id}&&page=1&&maxPageItem=8&&sortNameDanhGia=ngayviet&&sortByDanhGia=asc");
?>