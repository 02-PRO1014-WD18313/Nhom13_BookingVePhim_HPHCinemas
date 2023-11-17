<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/duan1_nhom13/';
include $path."Model/pdo.php";
include $path."Model/theloai.php";


if(isset($_POST['btn'])){
    $tentheloai = $_POST['tentheloai'];
    InsertTheLoai($tentheloai);
    header("location:../../Admin/index.php?action=theloai&check=success");
}else{
    header("location:../../Admin/index.php");
}
?>