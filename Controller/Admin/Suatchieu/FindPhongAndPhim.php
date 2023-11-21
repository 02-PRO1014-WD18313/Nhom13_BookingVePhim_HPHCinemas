<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/duan1_nhom13/';

include $path."Model/lichchieu.php";
include $path."Model/phong.php";
include $path."Model/sanpham.php";

$listPhong = SelectPhong();
$listPhim = SelectPhim();

// print_r($listPhong);
// echo $phim['anh'];
?>