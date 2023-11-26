<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/Nhom13_BookingVePhim_HPHCinemas/';

include $path."Model/phong.php";

$page = (int)$_GET['page'];
$maxPageItem = (int)$_GET['maxPageItem'];
$sortName = (string)$_GET['sortName'];
$sortBy = (string)$_GET['sortBy'];
$offset = ($page - 1) * $maxPageItem;

$totalItem = countPhong();
$totalPage = ceil($totalItem / $maxPageItem);


$listPhong = SelectPhongPage($sortName, $sortBy, $offset, $maxPageItem);

?>