<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/duan1_nhom13/';
include $path."Model/pdo.php";
include $path."Model/phong.php";
include $path."Model/dayghe.php";
include $path."Model/ghe.php";


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $maphong = $_POST['maphong'];
    $trangthaiphong = $_POST['trangthaiphong'];

    // $char = 65;
    // $length = 10;
    // $soluongghe = 0;
    // for ($i = 0; $i < $length; $i++) {
    //     $day = chr($char);
    //     $soluongghe += $_POST[$day];
    //     $char ++;
    // }

    if(FindByName($maphong) > 0){
        header("location:../../Admin/index.php?action=phong&check=danger");
        return;
    }

    $id = InsertPhong($maphong,$trangthaiphong);

    // $char = 65;
     
    // for ($i = 0; $i < $length; $i++) {
    //     $day = chr($char);
    //     $soluong = $_POST[$day];
    //     $idDay = InsertDayGhe($day,$soluong,$id);
    //     for ($j=1; $j <= $soluong ; $j++) { 
    //         InsertGhe($day.$j,$idDay);
    //     }
    //     $char ++;
    // }

    
    header("location:../../Admin/index.php?action=phong&check=success");
}else{
    header("location:../../Admin/index.php");
}
?>