<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/Nhom13_BookingVePhim_HPHCinemas/';

include $path."Model/sanpham.php";

$id = $_GET['id_danhmuc'];
$phims = FindPhimByDanhMuc($id);

// echo $phim['anh'];
?>