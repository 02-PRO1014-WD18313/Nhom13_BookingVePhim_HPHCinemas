<?php
// session_start();
$absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/Nhom13_BookingVePhim_HPHCinemas/";
// include $absolute_path."/view/admin/danhmuc/update.php";
include $absolute_path."Model/nguoidung.php";
$id = $_SESSION['nguoidung']['id_nguoidung'];
$nguoiDung = FindUser($id);
?>