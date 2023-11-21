<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/duan1_nhom13/';

include $path."Model/theloai.php";
$id = $_GET['id_theloai'];
$danhMuc = FindTheLoai($id);

?>