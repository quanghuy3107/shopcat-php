<?php

$absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/duanmau";

include $absolute_path."/model/GioHangDAO.php";
$dir = $absolute_path."/template/admin/assets/img/";

$page = (int)$_GET['page'];
$maxPageItem = (int)$_GET['maxPageItem'];
$sortName = (string)$_GET['sortName'];
$sortBy = (string)$_GET['sortBy'];
$offset = ($page - 1) * $maxPageItem;
$totalItem = countGioHang();
$totalPage = ceil($totalItem / $maxPageItem);


$listGioHang = selectGioHang($sortName,$sortBy,$maxPageItem,$offset);

?>