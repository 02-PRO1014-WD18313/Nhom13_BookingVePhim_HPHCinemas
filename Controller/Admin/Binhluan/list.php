<?php

$absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/duan1_nhom13/";

include $absolute_path . "Model/binhluan.php";

$id_phim = $_GET['id_phim'];
$listBinhLuan = FindBinhLuanByPhim($id_phim);
?>