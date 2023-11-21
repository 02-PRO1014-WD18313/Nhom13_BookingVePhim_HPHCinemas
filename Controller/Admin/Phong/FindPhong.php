<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/duan1_nhom13/';

include $path."Model/phong.php";
include $path."Model/ghe.php";
include $path."Model/dayghe.php";

$id = $_GET['id_phong'];

$phong = FindPhong($id);

$listDayGhe = SelectDayGheByPhong($id);


?>