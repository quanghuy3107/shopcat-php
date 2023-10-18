<?php
// include "../../../model/DAO/pdo.php";
$absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/duanmau";
include $absolute_path."/model/DAO/pdo.php";
include $absolute_path."/model/DanhMucDAO.php";
    if(isset($_POST['btn'])){
        if($_POST['tendanhmuc'] != ''){
            $tendanhmuc = $_POST['tendanhmuc'];
            insertDanhMuc($tendanhmuc);
            header("Location:../admin.php?action=danhmuc&&check=success");
        }else{
            header("Location:../admin.php?action=danhmuc&&check=danger");
        }
        
    }
?>