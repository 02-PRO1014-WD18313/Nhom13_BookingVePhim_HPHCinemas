<?php
session_start();

$absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/duan1_nhom13/";
// include $absolute_path."/view/admin/danhmuc/update.php";
include $absolute_path."Model/pdo.php";
include $absolute_path."Model/nguoidung.php";


$_SESSION['nguoidung'] = null;
$tendangnhap = $_POST['tendangnhap'];
$matkhau = $_POST['matkhau'];
$NguoiDung = CheckUsernameAndPassword($tendangnhap,$matkhau);

if($NguoiDung != null){
    $_SESSION['nguoidung'] = $NguoiDung;
    if($_SESSION['nguoidung']['mavaitro'] == "ADMIN"){
        header("Location:../index.php");
    }
    if($_SESSION['nguoidung']['mavaitro'] == "USER"){
        header("Location:../../User/index.php");
    }
}else{
    header("Location:../../web/index.php?action=login&&check=danger");
}
?>