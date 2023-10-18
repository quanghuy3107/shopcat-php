<?php

$absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/duanmau";

include $absolute_path."/model/NguoiDungDAO.php";
$listNguoiDung = selectNguoiDung();
?>