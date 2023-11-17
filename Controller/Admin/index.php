<?php
$path = $_SERVER['DOCUMENT_ROOT'] . '/duan1_nhom13/';
include $path . "Model/pdo.php";
include $path . "Common/Admin/header.php";
include $path . "Common/Admin/sidebar.php";

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'danhmuc':
            include $path . "View/Admin/Danhmuc/themdanhmuc.php";
            break;
        case 'theloai':
            include $path . "View/Admin/Theloai/themtheloai.php";
            break;
        case 'sanpham':
            include $path . "Controller/Admin/Theloai/list.php";
            include $path . "Controller/Admin/Danhmuc/list.php";
            include $path . "View/Admin/Sanpham/themsanpham.php";
            break;
        case 'phong':
            include $path . "Controller/Admin/TrangThai/ListTrangThaiPhong.php";
            include $path . "View/Admin/Phong/themphong.php";
            break;
        default:
            include $path . "View/Admin/Home.php";
    }
} else {
    include $path . "View/Admin/Home.php";
}

include $path . "Common/Admin/footer.php";
?>