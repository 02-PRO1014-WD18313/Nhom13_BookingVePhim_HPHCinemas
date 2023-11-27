<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/Nhom13_BookingVePhim_HPHCinemas/';

include $path."Model/doanhthu.php";
$id_phim = $_GET['phim'];
$ngay = $_GET['ngay'];
if($id_phim == null){
    
    $listDoanhThu = FindDoanhThuByDate($ngay);
}else{
    $listDoanhThu = FindDoanhThuByDateAndPhim($ngay,$id_phim);
}


?>