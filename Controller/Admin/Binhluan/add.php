<?php
// include "../../../model/DAO/pdo.php";
    $absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/duan1_nhom13/";
    include $absolute_path . "Model/pdo.php";
    include $absolute_path . "Model/binhluan.php";

    $id_phim = (int)$_GET['id_phim'];
    $id_nguoidung = (int)$_GET['id_nguoidung'];
    $noidung = $_GET['noidung'];
    $now = new DateTime();
    $timezone = new DateTimeZone('Asia/Ho_Chi_Minh');
    $now->setTimezone($timezone);

    $formattedDateTime = $now->format('Y-m-d H:i:s');
    InsertBinhLuan($id_nguoidung,$id_phim,$noidung,$formattedDateTime);
    header("Location:../../User/index.php?action=chitietphim&id_phim={$id_phim}")
?>