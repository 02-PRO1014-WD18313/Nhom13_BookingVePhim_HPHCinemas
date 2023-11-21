<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/duan1_nhom13/';
include $path."Model/pdo.php";
include $path."Model/sanpham.php";
include $path."Model/theloaiphimchitiet.php";

$id = $_GET['id_phim'];
DeleteChiTietTheLoaiBySanPham($id);
DeletePhim($id);
header('location:../index.php?action=danhsachphim&page=1&maxPageItem=5&sortName=id_phim&sortBy=desc');

?>