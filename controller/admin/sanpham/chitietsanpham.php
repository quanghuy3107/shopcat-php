<?php

$absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/duanmau";

include $absolute_path."/model/SanPhamDAO.php";
$dir = $absolute_path."/template/admin/assets/img/";
$page = (int)$_GET['page'];
$maxPageItem = (int)$_GET['maxPageItem'];
$sortName = (string)$_GET['sortName'];
$sortBy = (string)$_GET['sortBy'];
$offset = ($page - 1) * $maxPageItem;
$danhmuc = (int)$_GET['danhmuc'];
$totalItem = countSanPhamByDanhMuc($danhmuc);
$totalPage = ceil($totalItem / $maxPageItem);
$id = $_GET['sanpham_id'];
$sanphamupdate = findOneSanPham($id);

$listSanPham = findByDanhMuc($sortName,$sortBy,$maxPageItem,$offset,$danhmuc);

?>