<?php

$path = $_SERVER['DOCUMENT_ROOT'] . '/duan1_nhom13/';

include $path . "Model/lichchieu.php";
$id = $_GET['id'];
$lichChieu = FindLichChieuById($id);



?>