<?php
// include "../../../model/DAO/pdo.php";

$absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/duanmau";

include $absolute_path."/model/DAO/pdo.php";
include $absolute_path."/model/DanhMucDAO.php";
    if(isset($_POST['btn'])){
        $id = $_POST['id'];
        if($_POST['tendanhmuc'] != ''){
            
            $tendanhmuc = $_POST['tendanhmuc'];
            updateDanhMuc($tendanhmuc, $id);
            header("Location:../admin.php?action=update&&id={$id}&&check=success");
        }else{
            header("Location:../admin.php?action=update&&id={$id}&&check=danger");
        }
        
    }
?>