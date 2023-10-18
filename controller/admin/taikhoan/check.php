<?php
session_start();

$absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/duanmau";
// include $absolute_path."/view/admin/danhmuc/update.php";
include $absolute_path."/model/DAO/pdo.php";
include $absolute_path."/model/NguoiDungDAO.php";

$_SESSION['nguoidung'] = null;
$tendangnhap = $_POST['tendangnhap'];
$matkhau = $_POST['matkhau'];
$NguoiDung = checkUsernameOrPassword($tendangnhap,$matkhau);
// print_r( $NguoiDung);
// if(isset( $NguoiDung)){
//     print_r( $NguoiDung);
// }else{
//     echo "null";
// }
if($NguoiDung != null){
    $_SESSION['nguoidung'] = $NguoiDung;
    if($_SESSION['nguoidung']['code'] == "ADMIN"){
        header("Location:../admin.php");
    }
    if($_SESSION['nguoidung']['code'] == "USER"){
        header("Location:../../web/index.php");
    }
}else{
    header("Location:../../web/index.php?action=login&&check=danger");
}
?>