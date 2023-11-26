<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/Nhom13_BookingVePhim_HPHCinemas/';
include $path."Model/pdo.php";
include $path."Model/danhmuc.php";


if(isset($_POST['btn'])){
    $id = $_POST['id_danhmuc'];
    $tendanhmuc = $_POST['tendanhmuc'];
    UpdateDanhmuc($id,$tendanhmuc);
    header("location:../../Admin/index.php?action=suadanhmuc&id_danhmuc={$id}&check=success");
}else{
    header("location:../../Admin/index.php");
}
?>