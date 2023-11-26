<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/Nhom13_BookingVePhim_HPHCinemas/';
include $path."Model/pdo.php";
include $path."Model/theloai.php";


if(isset($_POST['btn'])){
    $id = $_POST['id_theloai'];
    $tenTheLoai = $_POST['tentheloai'];
    UpdateTheLoai($id,$tenTheLoai);
    header("location:../../Admin/index.php?action=suatheloai&id_theloai={$id}&check=success");
}else{
    header("location:../../Admin/index.php");
}
?>