<?php
// include "../../../model/DAO/pdo.php";
session_start();
$absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/duanmau";

include $absolute_path."/model/DAO/pdo.php";
include $absolute_path."/model/NguoiDungDAO.php";
    if(isset($_POST['btn'])){
        $tendangnhap = $_SESSION['nguoidung']['tendangnhap'];
        $nguoidung_id = $_SESSION['nguoidung']['nguoidung_id'];
        $matkhaucu = $_POST['matkhaucu'];
        $matkhaumoi = $_POST['matkhaumoi'];
        $nguoidung = checkUsernameOrPassword($tendangnhap,$matkhaucu);
        
        if($nguoidung != null){
            updatePassWord($nguoidung_id, $matkhaumoi);
            header("Location:../../web/index.php?action=thaydoimatkhau&&check=success");
        }else{
            header("Location:../../web/index.php?action=thaydoimatkhau&&check=danger");
        }
        
    }
?>