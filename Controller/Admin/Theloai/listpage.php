<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/duan1_nhom13/';

include $path."Model/theloai.php";

$page = (int)$_GET['page'];
$maxPageItem = (int)$_GET['maxPageItem'];
$sortName = (string)$_GET['sortName'];
$sortBy = (string)$_GET['sortBy'];
$offset = ($page - 1) * $maxPageItem;

$totalItem = CountTheLoai();
$totalPage = ceil($totalItem / $maxPageItem);


$listTheLoai = SelectTheLoaiPage($sortName, $sortBy, $offset, $maxPageItem);

?>