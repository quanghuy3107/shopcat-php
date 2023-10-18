<?php
    $absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/duanmau";
    include $absolute_path."/model/DAO/pdo.php";
    include $absolute_path."/model/SanPhamDAO.php";
    if(isset($_POST['btn'])){
        $tensanpham = $_POST['tensanpham'];
        $giasanpham = $_POST['giasanpham'];
        $motangan = $_POST['motangan'];
        $mota = $_POST['mota'];
        $soluong = $_POST['soluong'];
        $luotxem = $_POST['luotxem'];
        $danhmuc = $_POST['danhmuc'];
        $dir = $absolute_path."/template/admin/assets/img/";
        $img = basename($_FILES["hinhanh"]["name"]);
        $imgfile = $dir.$img;
        move_uploaded_file($_FILES["hinhanh"]["tmp_name"],$imgfile);
        insertSanPham($tensanpham, $giasanpham, $img, $motangan, $mota, $soluong, $luotxem, $danhmuc);
        header("Location:../admin.php?action=sanpham&&check=success");
    }
?>