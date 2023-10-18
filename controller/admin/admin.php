<?php
session_start();
ob_start();

$absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/duanmau";
include $absolute_path . "/model/DAO/pdo.php";
if (isset($_SESSION['nguoidung']) && $_SESSION['nguoidung']['code'] == "ADMIN") {
    include $absolute_path . "/common/admin/header.php";
    include $absolute_path . "/common/admin/menu-left.php";
    if (isset($_GET['action'])) {
        $action = $_GET['action'];

        switch ($action) {
            case 'danhmuc':
                include $absolute_path . "/view/admin/danhmuc/danhmuc.php";
                break;
            case 'danhsachdanhmuc':
                include $absolute_path . "/controller/admin/danhmuc/list.php";
                include $absolute_path . "/view/admin/danhmuc/danhsach.php";
                break;
            case 'update':
                include $absolute_path . "/controller/admin/danhmuc/findone.php";
                include $absolute_path . "/view/admin/danhmuc/update.php";

                break;
            case 'sanpham':
                include $absolute_path . "/controller/admin/danhmuc/list.php";
                include $absolute_path . "/view/admin/sanpham/sanpham.php";
                break;
            case 'danhsachsanpham':
                include $absolute_path . "/controller/admin/sanpham/list.php";
                include $absolute_path . "/view/admin/sanpham/danhsach.php";
                break;
            case 'updatesanpham':

                require $absolute_path . "/controller/admin/danhmuc/list.php";
                include $absolute_path . "/controller/admin/sanpham/findone.php";
                include $absolute_path . "/view/admin/sanpham/update.php";

                break;
            case 'taikhoan':
                include $absolute_path . "/controller/admin/taikhoan/list.php";
                include $absolute_path . "/view/admin/taikhoan/quanly.php";

                break;
            case 'logout':

                include $absolute_path . "/controller/logout.php";
                break;
            case 'danhgia':
                include $absolute_path . "/controller/admin/sanpham/findone.php";
                include $absolute_path . "/controller/admin/danhgia/list.php";
                include $absolute_path . "/view/admin/sanpham/binhluan.php";
                break;
            case 'giohang':
                include $absolute_path . "/controller/admin/giohang/list.php";
                include $absolute_path . "/view/admin/giohang/giohang.php";
                break;
            case 'donhang':
                include $absolute_path . "/controller/admin/chitietdonhang/list.php";
                include $absolute_path . "/view/admin/donhang/quanlidonhang.php";
                break;
          
        }
    } else {
        include $absolute_path . "/view/admin/home.php";
    }

    include $absolute_path . "/common/admin/footer.php";
} else {
    header("Location:../web/index.php?action=login&&check=warning");
}
ob_end_flush();
?>