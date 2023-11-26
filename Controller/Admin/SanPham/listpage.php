<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/Nhom13_BookingVePhim_HPHCinemas/';

include $path."Model/sanpham.php";

$page = (int)$_GET['page'];
$maxPageItem = (int)$_GET['maxPageItem'];
$sortName = (string)$_GET['sortName'];
$sortBy = (string)$_GET['sortBy'];
$offset = ($page - 1) * $maxPageItem;

$totalItem = CountPhim();
$totalPage = ceil($totalItem / $maxPageItem);


$listPhim = SelectPhimPage($sortName, $sortBy, $offset, $maxPageItem);

?>