<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/Nhom13_BookingVePhim_HPHCinemas/';

include $path."Model/danhmuc.php";
$id = $_GET['id_danhmuc'];
$danhMuc = FindDanhMuc($id);

?>