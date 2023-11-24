<?php
// include "../../../model/DAO/pdo.php";
session_start();
$path = $_SERVER['DOCUMENT_ROOT'] . '/duan1_nhom13/';
include $path . "Model/pdo.php";
include $path."Model/nguoidung.php";
    if(isset($_POST['btn'])){
        $tendangnhap = $_SESSION['nguoidung']['tendangnhap'];
        $nguoidung_id = $_SESSION['nguoidung']['id_nguoidung'];
        $matkhau = $_POST['matkhau'];
        $email = $_POST['email'];
        $hovaten = $_POST['hovaten'];

        $nguoidung = CheckUsernameAndPassword($tendangnhap,$matkhau);
        
        if($nguoidung != null ){
            if(checkEmail($email) == null or $email ==  $_SESSION['nguoidung']['email'] ){
                UpdateInformationUser($nguoidung_id,$hovaten,$email);

                header("Location:../../User/index.php?action=thaydoithongtin&&check=success");
            }else{
                header("Location:../../User/index.php?action=thaydoithongtin&&check=email");
            }
            
        }else{
            header("Location:../../User/index.php?action=thaydoithongtin&&check=danger");
        }
        
    }
?>