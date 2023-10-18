<?php
// include "../../../model/DAO/pdo.php";

$absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/duanmau";
include $absolute_path . "/model/DAO/pdo.php";
include $absolute_path . "/model/SanPhamDAO.php";

if (isset($_POST['btn'])) {
    $page = $_POST['page'];
    $maxPageItem = $_POST['maxPageItem'];
    $sortName = $_POST['sortName'];
    $sortBy = $_POST['sortBy'];
    $check = false;
    $sanpham_id = $_POST['id'];
    $tensanpham = $_POST['tensanpham'];
    $giasanpham = $_POST['giasanpham'];
    $hinhanh = $_POST['hinhanh'];
    $dir = $absolute_path . "/template/admin/assets/img/";
    $img = basename($_FILES["hinhanh"]["name"]);
    $imgfile = $dir . $img;
    if (move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $imgfile)) {
        $check = true;
    } else {
        $img = $hinhanh;
    }
    $motangan = $_POST['motangan'];
    $mota = $_POST['mota'];
    $soluong = $_POST['soluong'];
    $luotxem = $_POST['luotxem'];
    $danhmuc = $_POST['danhmuc'];
    updateSanPham($sanpham_id, $tensanpham, $giasanpham, $img, $motangan, $mota, $soluong, $luotxem, $danhmuc);
    header("Location:../admin.php?action=updatesanpham&&sanpham_id={$sanpham_id}&&check=success&page={$page}&&maxPageItem={$maxPageItem}&&sortName={$sortName}&&sortBy={$sortBy}");
}
