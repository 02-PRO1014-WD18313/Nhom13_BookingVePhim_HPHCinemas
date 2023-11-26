<?php
$path = $_SERVER['DOCUMENT_ROOT'] . '/duan1_nhom13/';
include $path . "Model/pdo.php";
include $path . "Model/nguoidung.php";
include $path . "PHPMailer/SendMail.php";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $informationUser = checkEmail($email);
    echo $email;
    print_r($informationUser);

    if ($informationUser != null) {

        $link ="http://localhost/duan1_nhom13/Controller/User/index.php?action=NhapMatKhauMoi&id_nguoidung={$informationUser['id_nguoidung']}";

        $noidung = "<h3>Lấy lại mật khẩu:</h3> </br>";
        $noidung .= "<p>Xin chào: {$informationUser['hovaten']}</p> </br>";
        $noidung .= "<a href='{$link}'>
            Click vào đây để lấy lại mật khẩu của bạn
        </a>";

        
        SendMail($informationUser['hovaten'], $email, $noidung, "");
    }

    header('location:../../User/index.php?action=laylaimatkhau&msg=check');
}
