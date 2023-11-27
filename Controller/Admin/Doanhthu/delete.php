<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/Nhom13_BookingVePhim_HPHCinemas/';
include $path."Model/pdo.php";
include $path."Model/doanhthu.php";
include $path."Model/chitietdoanhthu.php";

$id = $_GET['id_doanhthu'];
$ngaybatdau = $_GET['ngaybatdau'];
$ngayketthuc = $_GET['ngayketthuc'];
$ngay = $_GET['ngay'];
$id_phim = $_GET['phim'];
DeleteChiTietDoanhThu($id);
DeleteDoanhThu($id);
header('location:../index.php?action=chitietdoanhthu&ngaybatdau=' . $ngaybatdau . '&ngayketthuc=' . $ngayketthuc . '&ngay=' . $ngay . "&phim=" . $id_phim);

?>