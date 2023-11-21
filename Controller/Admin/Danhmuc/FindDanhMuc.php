<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/duan1_nhom13/';

include $path."Model/danhmuc.php";
$id = $_GET['id_danhmuc'];
$danhMuc = FindDanhMuc($id);

?>