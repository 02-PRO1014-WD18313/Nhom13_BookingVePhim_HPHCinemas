<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/Nhom13_BookingVePhim_HPHCinemas/';

include $path."Model/theloai.php";
$id = $_GET['id_phim'];
$listTheLoaiBySanPham = FindTheLoaiBySanPham($id);
$listTheLoai = SelectTheLoai();

?>