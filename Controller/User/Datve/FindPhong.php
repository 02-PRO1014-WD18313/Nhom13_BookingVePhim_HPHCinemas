<?php 
$path = $_SERVER['DOCUMENT_ROOT'].'/duan1_nhom13/';

include $path."Model/lichchieu.php";
include $path."Model/dayghe.php";
include $path."Model/ghe.php";

$id = $_GET['id_lichchieu'];
$information = FindLichChieuById($id);
$listDayGhe = SelectDayGheBySuatChieu($id);

?>