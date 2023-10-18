<?php
// include "../../../model/DAO/pdo.php";
// include "../../../model/DanhMucDAO.php";
$absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/duanmau";

include $absolute_path."/model/DAO/pdo.php";
include $absolute_path."/model/DanhMucDAO.php";
    $id = $_GET['id'];
    deleteDanhMuc($id);
    header("Location:../admin.php?action=danhsachdanhmuc");
?>