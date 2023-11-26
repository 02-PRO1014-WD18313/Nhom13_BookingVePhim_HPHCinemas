<?php
// include "../../../model/DAO/pdo.php";
session_start();
$path = $_SERVER['DOCUMENT_ROOT'] . '/Nhom13_BookingVePhim_HPHCinemas/';
include $path . "Model/pdo.php";
include $path."Model/nguoidung.php";
    if(isset($_POST['btn'])){
        $tendangnhap = $_SESSION['nguoidung']['tendangnhap'];
        $nguoidung_id = $_SESSION['nguoidung']['id_nguoidung'];
        $matkhaucu = $_POST['matkhaucu'];
        $matkhaumoi = $_POST['matkhaumoi'];
        $nguoidung = CheckUsernameAndPassword($tendangnhap,$matkhaucu);
        
        if($nguoidung != null){
            updatePassWord($nguoidung_id, $matkhaumoi);
            header("Location:../../User/index.php?action=thaydoimatkhau&&check=success");
        }else{
            header("Location:../../User/index.php?action=thaydoimatkhau&&check=danger");
        }
        
    }
?>