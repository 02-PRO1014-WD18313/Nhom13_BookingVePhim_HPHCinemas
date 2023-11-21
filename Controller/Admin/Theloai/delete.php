<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/duan1_nhom13/';
include $path."Model/pdo.php";
include $path."Model/theloai.php";
include $path."Model/theloaiphimchitiet.php";

$id = $_GET['id_theloai'];
DeleteChiTietTheLoaiByTheLoai($id);
DeleteTheLoai($id);
header('location:../index.php?action=danhsachtheloai&page=1&maxPageItem=2&sortName=id_theloai&sortBy=asc');

?>