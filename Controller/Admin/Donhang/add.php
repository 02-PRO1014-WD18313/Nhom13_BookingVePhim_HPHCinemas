<?php
$absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/Nhom13_BookingVePhim_HPHCinemas/";
include $absolute_path . "Model/pdo.php";
include $absolute_path . "Model/donhang.php";
include $absolute_path . "Model/ghe.php";
    $id_nguoidung = $_GET['id_nguoidung'];
    $id_lichchieu = $_GET['id_lichchieu'];
    $idGhes = $_GET['idGhes'];
    $gia = $_GET['gia'];
    $maGhes= $_GET['maGhes'];
    $maDonHang = $_GET['vnp_TxnRef'];
    $arrayIdGhe = explode(",", $idGhes);
    $now = new DateTime();
    $timezone = new DateTimeZone('Asia/Ho_Chi_Minh');
    $now->setTimezone($timezone);
    $formattedDateTime = $now->format('Y-m-d H:i:s');
    InsertDonHang($maDonHang,$gia,$maGhes,$formattedDateTime,$id_nguoidung,$id_lichchieu);
    foreach($arrayIdGhe as $idGhe){
        UpdateGhe($idGhe,"booked");
    }
    header('location:../../User/index.php?action=datvethanhcong');
?>