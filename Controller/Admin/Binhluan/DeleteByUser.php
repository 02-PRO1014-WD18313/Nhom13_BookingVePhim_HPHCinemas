<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/duan1_nhom13/';
include $path."Model/pdo.php";
include $path."Model/binhluan.php";

$id = $_GET['id_binhluan'];
$id_phim = $_GET['id_phim'];
DeleteBinhLuanByUser($id);
header("location:../../User/index.php?action=chitietphim&id_phim={$id_phim}");

?>