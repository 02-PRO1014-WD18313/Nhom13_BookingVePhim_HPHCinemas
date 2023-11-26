<?php
// include "../../../model/DAO/pdo.php";
session_start();
$path = $_SERVER['DOCUMENT_ROOT'] . '/Nhom13_BookingVePhim_HPHCinemas/';
include $path . "Model/pdo.php";
include $path . "Model/nguoidung.php";
if (isset($_POST['btn'])) {
    $nguoidung_id = $_POST['id_nguoidung'];
    $matkhaumoi = $_POST['matkhaumoi'];

    updatePassWord($nguoidung_id, $matkhaumoi);
    $nguoidung = FindUser($nguoidung_id);
        $_SESSION['nguoidung'] = $nguoidung;
        if ($_SESSION['nguoidung']['mavaitro'] == "ADMIN") {
            header("Location:../index.php");
        }
        if ($_SESSION['nguoidung']['mavaitro'] == "USER") {
            header("Location:../../User/index.php");
        }

}else{
    header("Location:../../User/index.php");
}
?>