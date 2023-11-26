<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/Nhom13_BookingVePhim_HPHCinemas/';

include $path."Model/theloai.php";
$id = $_GET['id_theloai'];
$danhMuc = FindTheLoai($id);

?>