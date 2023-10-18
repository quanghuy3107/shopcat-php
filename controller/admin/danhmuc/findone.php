<?php

$absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/duanmau";
// include $absolute_path."/view/admin/danhmuc/update.php";
include $absolute_path."/model/DanhMucDAO.php";
$id = $_GET['id'];
$danhmucupdate = findOneDanhMuc($id);
?>