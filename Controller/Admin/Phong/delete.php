<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/Nhom13_BookingVePhim_HPHCinemas/';
include $path."Model/pdo.php";
include $path."Model/phong.php";
include $path."Model/lichchieu.php";
include $path."Model/dayghe.php";
include $path."Model/ghe.php";

$id = $_GET['id_phong'];

$listLichChieu =  FindLichChieuByPhong($id);
foreach($listLichChieu as $lichChieu){
    $listDayGhe = SelectDayGheBySuatChieu($lichChieu['id_lichchieu']);
    foreach($listDayGhe AS $dayghe){
        DeleteGheByDayGhe($dayghe['id_dayghe']);
        DeleteDayGhe($dayghe['id_dayghe']);
        
    }
    DeleteLichChieu($lichChieu['id_lichchieu']);
}

DeletePhong($id);
header('location:../index.php?action=danhsachphong&page=1&maxPageItem=5&sortName=id_phong&sortBy=desc');

?>