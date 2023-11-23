<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/duan1_nhom13/';

include $path."Model/lichchieu.php";
include $path."Model/phong.php";


$currentDate = date("Y-m-d");
$id_phim = $phim[0]['id_phim'];
$date = $phim[0]['ngayphathanh'];
if( $currentDate >=  $date ){
    $suatChieus = FindByDate($currentDate,$id_phim);
}else{
    $suatChieus = FindByDate($date,$id_phim);
}

$listSuatChieu = array();
foreach($suatChieus as $suatChieu){
    $ngayKhongGio = date('Y-m-d', strtotime( $suatChieu['thoigianchieu']));

    if(!in_array($ngayKhongGio,$listSuatChieu)){
        $listSuatChieu[] = $ngayKhongGio;
    }
}

// foreach($suatChieus as $suatChieu){
//     echo $suatChieu['thoigianchieu'];
// }

?>