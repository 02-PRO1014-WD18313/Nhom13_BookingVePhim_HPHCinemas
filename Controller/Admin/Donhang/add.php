<?php
$absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/Nhom13_BookingVePhim_HPHCinemas/";
include $absolute_path . "Model/pdo.php";
include $absolute_path . "Model/donhang.php";
include $absolute_path . "Model/ghe.php";
include $absolute_path . "Model/doanhthu.php";
include $absolute_path . "Model/chitietdoanhthu.php";
include $absolute_path . "Model/lichchieu.php";
    $id_nguoidung = $_GET['id_nguoidung'];
    $id_lichchieu = $_GET['id_lichchieu'];
    $lichChieus = FindLichChieuById($id_lichchieu);
    $idGhes = $_GET['idGhes'];
    $gia = $_GET['gia'];
    $maGhes= $_GET['maGhes'];
    // $maDonHang = $_GET['vnp_TxnRef'];
    $maDonHang = $_GET['orderId'];
    $arrayIdGhe = explode(",", $idGhes);
    $soluong =sizeof($arrayIdGhe);
    $now = new DateTime();
    $timezone = new DateTimeZone('Asia/Ho_Chi_Minh');
    $now->setTimezone($timezone);
    $formattedDateTime = $now->format('Y-m-d H:i:s');
    InsertDonHang($maDonHang,$gia,$maGhes,$formattedDateTime,$soluong,$id_nguoidung,$id_lichchieu);
    $id = InsertDoanhThu($formattedDateTime,$gia);
    
    InsertChiTietDoanhThu($id,$lichChieus[0]['id_phim']);
    foreach($arrayIdGhe as $idGhe){
        UpdateGhe($idGhe,"booked");
    }
    header('location:../../User/index.php?action=datvethanhcong');
?>