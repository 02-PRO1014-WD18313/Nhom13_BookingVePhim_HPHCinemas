<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/duan1_nhom13/';
include $path."Model/pdo.php";
include $path."Model/nguoidung.php";

$id = $_GET['id_nguoidung'];

DeleteNguoiDung($id);
header('location:../index.php?action=action=quanlytaikhoan&page=1&maxPageItem=5&sortName=id_nguoidung&sortBy=desc');

?>