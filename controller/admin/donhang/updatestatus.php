<?php
// include "../../../model/DAO/pdo.php";

$absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/duanmau";

include $absolute_path."/model/DAO/pdo.php";
include $absolute_path."/model/DonHangDao.php";

    
        $id = $_GET['donhang_id'];
        $status = $_GET['status'];
        updateOderStatus($id,$status);
        if($_GET['action'] == 'user'){
          header("Location:../../web/index.php?action=myOrder");
        }else{
          header("Location:../admin.php?action=donhang&page=1&maxPageItem=4&&sortName=donhang_id&&sortBy=asc");
        }
        
        // }else{
        //     header("Location:../admin.php?action=update&&id={$id}&&check=danger");
        // }
      ?> 
