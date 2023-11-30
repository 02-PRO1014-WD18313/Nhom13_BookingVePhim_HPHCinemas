<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/Nhom13_BookingVePhim_HPHCinemas/';
include $path."Model/pdo.php";
include $path."Model/binhluan.php";

$id = $_GET['id_binhluan'];
$id_phim = $_GET['id_phim'];
DeleteBinhLuan($id);
header("location:../../User/index.php?action=chitietphim&id_phim={$id_phim}");

?>