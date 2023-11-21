<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/duan1_nhom13/';

include $path."Model/sanpham.php";

$id = $_GET['id_phim'];
$phim = FindPhim($id);

// echo $phim['anh'];
?>