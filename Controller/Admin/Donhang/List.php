<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/Nhom13_BookingVePhim_HPHCinemas/';

include $path."Model/donhang.php";

$id = $_SESSION['nguoidung']['id_nguoidung'];
$page = (int)$_GET['page'];
$maxPageItem = (int)$_GET['maxPageItem'];
$sortName = (string)$_GET['sortName'];
$sortBy = (string)$_GET['sortBy'];
$offset = ($page - 1) * $maxPageItem;

$totalItem = CountDonHang();
$totalPage = ceil($totalItem / $maxPageItem);


$listDonHang = SelectDonHang($sortName, $sortBy, $offset, $maxPageItem);

?>