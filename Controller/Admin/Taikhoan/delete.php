<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/Nhom13_BookingVePhim_HPHCinemas/';
include $path."Model/pdo.php";
include $path."Model/nguoidung.php";
include $path."Model/donhang.php";
include $path."Model/binhluan.php";

$id = $_GET['id_nguoidung'];
DeleteDonHangByNguoiDung($id);
DeleteBinhLuanByUser($id);
DeleteNguoiDung($id);
header('location:../index.php?action=action=quanlytaikhoan&page=1&maxPageItem=5&sortName=id_nguoidung&sortBy=desc');

?>