<?php

$absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/duanmau";

include $absolute_path."/model/DanhGiaDAO.php";
$dir = $absolute_path."/template/admin/assets/img/";
$id = $_GET['sanpham_id'];
$page = (int)$_GET['page'];
$maxPageItem = (int)$_GET['maxPageItem'];
$sortName = (string)$_GET['sortNameDanhGia'];
$sortBy = (string)$_GET['sortByDanhGia'];
$offset = ($page - 1) * $maxPageItem;
$totalItem = countSanPhamByDanhGia($id);
$totalPage = ceil($totalItem / $maxPageItem);


$listDanhGia = findBySanPham($id,$sortName,$sortBy,$maxPageItem,$offset);

// $listSanPham = selectSanPham($sortName,$sortBy,$offset,$maxPageItem);

// print_r($listSanPham);

?>