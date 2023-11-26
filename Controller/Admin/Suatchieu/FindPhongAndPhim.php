<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/Nhom13_BookingVePhim_HPHCinemas/';

include $path."Model/lichchieu.php";
include $path."Model/phong.php";
include $path."Model/sanpham.php";

$listPhong = SelectPhong();
$listPhim = SelectPhim();

// print_r($listPhong);
// echo $phim['anh'];
?>