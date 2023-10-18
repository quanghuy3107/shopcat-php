<?php

$absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/duanmau";

include $absolute_path."/model/SanPhamDAO.php";

$page = (int)$_GET['page'];
$maxPageItem = (int)$_GET['maxPageItem'];
$sortName = (string)$_GET['sortName'];
$sortBy = (string)$_GET['sortBy'];
$offset = ($page - 1) * $maxPageItem;
$search = (string)$_GET['search'];
$totalItem = countSanPhamBySearch($search);
$totalPage = ceil($totalItem / $maxPageItem);


$listSanPham = findBySearch($search,$sortName,$sortBy,$offset,$maxPageItem);
// $listSanPham = selectSanPham($sortName,$sortBy,$offset,$maxPageItem);

// print_r($listSanPham);

?>