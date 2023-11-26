<?php

$path = $_SERVER['DOCUMENT_ROOT'] . '/Nhom13_BookingVePhim_HPHCinemas/';

include $path . "Model/lichchieu.php";
$id = $_GET['id'];
$lichChieu = FindLichChieuById($id);



?>