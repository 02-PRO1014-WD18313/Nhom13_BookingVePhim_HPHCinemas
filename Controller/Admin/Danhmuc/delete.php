<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/duan1_nhom13/';
include $path."Model/pdo.php";
include $path."Model/danhmuc.php";

$id = $_GET['id_danhmuc'];
DeleteDanhMuc($id);
header('location:../index.php?action=danhsachdanhmuc&page=1&maxPageItem=2&sortName=id_danhmuc&sortBy=asc');

?>