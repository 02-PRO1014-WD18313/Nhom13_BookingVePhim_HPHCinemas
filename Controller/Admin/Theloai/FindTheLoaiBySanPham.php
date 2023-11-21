<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/duan1_nhom13/';

include $path."Model/theloai.php";
$id = $_GET['id_phim'];
$listTheLoaiBySanPham = FindTheLoaiBySanPham($id);
$listTheLoai = SelectTheLoai();

?>