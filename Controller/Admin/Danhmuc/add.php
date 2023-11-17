<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/duan1_nhom13/';
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