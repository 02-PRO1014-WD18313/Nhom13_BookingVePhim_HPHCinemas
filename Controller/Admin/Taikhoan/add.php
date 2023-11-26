<?php
    $path = $_SERVER['DOCUMENT_ROOT'] . '/Nhom13_BookingVePhim_HPHCinemas/';
    include $path . "Model/pdo.php";
    include $path."Model/nguoidung.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $hovaten = $_POST['hovaten'];
        $email = $_POST['email'];
        $tendangnhap = $_POST['tendangnhap'];
        $matkhau = $_POST['matkhau'];
        if(checkUsername($tendangnhap) == null && checkEmail($email) == null){
            InsertNguoiDung($hovaten,$email,$tendangnhap,$matkhau,0,2);
            header("Location:../../User/index.php?action=dangnhap&msg=success");
        }else{
            header("Location:../../User/index.php?action=dangky&&check=tontai");
        }
        
    }else{
        header("Location:../../User/index.php?");
    }
?>