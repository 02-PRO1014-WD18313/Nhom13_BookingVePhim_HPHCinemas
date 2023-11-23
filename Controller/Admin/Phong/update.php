<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/duan1_nhom13/';
include $path."Model/pdo.php";
include $path."Model/phong.php";
include $path."Model/dayghe.php";
include $path."Model/ghe.php";


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST['id_phong'];
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
    // if($count > $soluongghe){
    //     header("location:../../Admin/index.php?action=chinhsuaphong&id_phong={$id}&check=full");
    //     return;
    // }
    $phong = FindPhong($id);
    // $listDayghe = SelectDayGheByPhong($id);

    if(FindByName($maphong) > 0 && $maphong != $phong[0]['maphong']){
        header("location:../../Admin/index.php?action=chinhsuaphong&id_phong={$id}&check=danger");
        return;
    }

    UpdatePhong($id,$maphong,$trangthaiphong);

    // $char = 65;
     
    // for ($i = 0; $i < $length; $i++) {
    //     $day = chr($char);
    //     $soluong = $_POST[$day];
    //     $idDay = $listDayghe[$i]['id_dayghe'];
        
    //     UpdateDayGhe($day,$soluong,$id);
    //     $lengthGhe = sizeof(SelectGheByDayGhe($idDay));

    //     check($soluong,$lengthGhe,$day, $idDay);
        
    //     $char ++;
    // }
// exit();

    header("location:../../Admin/index.php?action=chinhsuaphong&id_phong={$id}&check=success");
}else{
    header("location:../../Admin/index.php");
}
// function check($soluong,$lengthGhe,$day, $idDay){
//     if($soluong > $lengthGhe){
//         for($j = $lengthGhe + 1; $j <= $soluong; $j++){
//             InsertGhe($day.$j,$idDay);
//         }
//     }
//     if($soluong < $lengthGhe){
//         for ($j = $soluong + 1; $j <= $lengthGhe ; $j++) { 
//             DeleteGheByDayGhe($day.$j,$idDay);
//         }
//     }
// }
?>