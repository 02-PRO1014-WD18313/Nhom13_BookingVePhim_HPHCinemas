<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/Nhom13_BookingVePhim_HPHCinemas/';
include $path."Model/pdo.php";
include $path."Model/donhang.php";
$id = $_GET['id_donhang'];
DeleteDonHang($id);
header('location:../../User/index.php?action=quanlydonhang&page=1&maxPageItem=2&sortName=id_donhang&sortBy=desc');

?>