<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/Nhom13_BookingVePhim_HPHCinemas/';
include $path."Model/pdo.php";
include $path."Model/theloai.php";
include $path."Model/theloaiphimchitiet.php";

$id = $_GET['id_theloai'];
DeleteChiTietTheLoaiByTheLoai($id);
DeleteTheLoai($id);
header('location:../index.php?action=danhsachtheloai&page=1&maxPageItem=2&sortName=id_theloai&sortBy=asc');

?>