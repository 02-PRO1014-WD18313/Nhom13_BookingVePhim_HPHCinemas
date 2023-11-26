<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/Nhom13_BookingVePhim_HPHCinemas/';
include $path."Model/pdo.php";
include $path."Model/danhmuc.php";


if(isset($_POST['btn'])){
    $tendanhmuc = $_POST['tendanhmuc'];
    InsertDanhMuc($tendanhmuc);
    header("location:../../Admin/index.php?action=danhmuc&check=success");
}else{
    header("location:../../Admin/index.php");
}
?>