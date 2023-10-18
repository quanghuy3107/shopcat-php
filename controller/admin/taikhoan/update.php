<?php
// include "../../../model/DAO/pdo.php";

$absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/duanmau";

include $absolute_path."/model/DAO/pdo.php";
include $absolute_path."/model/NguoiDungDAO.php";
    if(isset($_POST['btn'])){
        $id = $_POST['id'];
        $hoVaTen = $_POST['hovaten'];
        $email = $_POST['email'];
        $diaChiNhanHang = $_POST['diachinhanhang'];
        $diaChiThanhToan = $_POST['diachithanhtoan'];
        $soDienThoai = $_POST['sodienthoai'];
        $ngaySinh = $_POST['ngaysinh'];
        thayDoiThongTin($id,$hoVaTen,$email,$diaChiNhanHang,$diaChiThanhToan,$soDienThoai,$ngaySinh);
        header("Location:../../web/index.php?action=thaydoithongtin&&check=success");
        // }else{
        //     header("Location:../admin.php?action=update&&id={$id}&&check=danger");
        // }
        
    }
?>