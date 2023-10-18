<?php
    $absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/duanmau";
    include $absolute_path."/model/DAO/pdo.php";
    include $absolute_path."/model/NguoiDungDAO.php";

    if(isset($_POST['btn'])){
        $hovaten = $_POST['hovaten'];
        $email = $_POST['email'];
        $diachinhanhang = $_POST['diachinhanhang'];
        $diachithanhtoan = $_POST['diachithanhtoan'];
        $sodienthoai = $_POST['sodienthoai'];
        $ngaysinh = $_POST['ngaysinh'];
        $tendangnhap = $_POST['tendangnhap'];
        $matkhau = $_POST['matkhau'];
        if(checkUsername($tendangnhap) == null){
            insertNguoiDung($hovaten,$email,$diachinhanhang,$diachithanhtoan,$sodienthoai,$ngaysinh,$tendangnhap,$matkhau,2);
            header("Location:../../web/index.php?action=login");
        }else{
            header("Location:../../web/index.php?action=signin&&check=tontai");
        }
        
    }
?>