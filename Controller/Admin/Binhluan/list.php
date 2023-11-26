<?php

$absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/Nhom13_BookingVePhim_HPHCinemas/";

include $absolute_path . "Model/binhluan.php";

$id_phim = $_GET['id_phim'];
$listBinhLuan = FindBinhLuanByPhim($id_phim);
?>