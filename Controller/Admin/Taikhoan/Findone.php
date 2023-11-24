<?php
// session_start();
$absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/duan1_nhom13/";
// include $absolute_path."/view/admin/danhmuc/update.php";
include $absolute_path."Model/nguoidung.php";
$id = $_SESSION['nguoidung']['id_nguoidung'];
$nguoiDung = FindUser($id);
?>