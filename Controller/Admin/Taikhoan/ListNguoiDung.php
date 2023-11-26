<?php

$path = $_SERVER['DOCUMENT_ROOT'] . '/Nhom13_BookingVePhim_HPHCinemas/';

include $path . "Model/nguoidung.php";


$page = (int)$_GET['page'];
$maxPageItem = (int)$_GET['maxPageItem'];
$sortName = (string)$_GET['sortName'];
$sortBy = (string)$_GET['sortBy'];
$offset = ($page - 1) * $maxPageItem;

$totalItem = CountNguoiDung();
$totalPage = ceil($totalItem / $maxPageItem);


$listNguoiDung = SelectNguoiDung($sortName,$sortBy,$offset,$maxPageItem);



?>