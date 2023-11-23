<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/duan1_nhom13/';
include $path."Model/pdo.php";
include $path."Model/lichchieu.php";
include $path."Model/dayghe.php";
include $path."Model/ghe.php";

$id = $_GET['id'];

$listDayGhe = SelectDayGheBySuatChieu($id);
foreach($listDayGhe AS $dayghe){
    DeleteGheByDayGhe($dayghe['id_dayghe']);
    DeleteDayGhe($dayghe['id_dayghe']);
    
}
DeleteLichChieu($id);

header('location:../../Admin/index.php?action=danhsachsuatchieu&page=1&maxPageItem=5&sortName=id_phim&sortBy=desc');


?>