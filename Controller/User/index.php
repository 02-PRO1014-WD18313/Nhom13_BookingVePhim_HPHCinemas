<?php
session_start();
ob_start();
$path = $_SERVER['DOCUMENT_ROOT'] . '/Nhom13_BookingVePhim_HPHCinemas/';
include $path . "Model/pdo.php";
include $path . "Controller/Admin/Theloai/list.php";
include $path . "Controller/Admin/Danhmuc/list.php";
include $path . "Common/User/header.php";

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'timkiem':

            include $path . "Model/sanpham.php";
            include $path . "Controller/User/Timkiem/search.php";
            include $path . "View/User/Trangtimkiem.php";
            break;
        case 'danhmuc':
            include $path . "Controller/Admin/Sanpham/FindPhimByDanhMuc.php";
            include $path . "View/User/Danhmuc.php";
            break;
        case 'chitietphim':
            include $path . "Controller/Admin/Sanpham/FindPhim.php";
            include $path . "Controller/User/Suatchieu/CheckDate.php";
            include $path . "Controller/User/Suatchieu/FindTime.php";
            include $path . "Controller/Admin/Binhluan/list.php";
            include $path . "View/User/Chitietphim.php";
            break;
        case 'datve':
            if (isset($_SESSION['nguoidung']) && $_SESSION['nguoidung']['mavaitro'] == "USER") {
                include $path . "Controller/User/Datve/FindPhong.php";
                include $path . "View/User/Datve.php";
            } else {
                include $path . "View/User/Dangnhap.php";
            }
            break;
        case 'thaydoimatkhau':
            if (isset($_SESSION['nguoidung']) && $_SESSION['nguoidung']['mavaitro'] == "USER") {
                include $path . "View/User/ThayDoiMatKhau.php";
            } else {
                include $path . "View/User/Dangnhap.php";
            }
            break;
        case 'thaydoithongtin':
            if (isset($_SESSION['nguoidung']) && $_SESSION['nguoidung']['mavaitro'] == "USER") {
                include $path . "Controller/Admin/Taikhoan/Findone.php";
                include $path . "View/User/ThayDoiThongTin.php";
            } else {
                include $path . "View/User/Dangnhap.php";
            }
            break;
        case 'datvethanhcong':
            if (isset($_SESSION['nguoidung']) && $_SESSION['nguoidung']['mavaitro'] == "USER") {
                include $path . "View/User/DatVeThanhCong.php";
            } else {
                include $path . "View/User/Dangnhap.php";
            }
            break;
        case 'quanlydonhang':
            if (isset($_SESSION['nguoidung']) && $_SESSION['nguoidung']['mavaitro'] == "USER") {
                include $path . "Controller/Admin/Donhang/ListByUser.php";
                include $path . "View/User/DonHang.php";
            } else {
                include $path . "View/User/Dangnhap.php";
            }
            break;
        case 'dangky':
            include $path . "View/User/Dangky.php";
            break;
        case 'dangnhap':
            include $path . "View/User/Dangnhap.php";
            break;
        case 'dangxuat':
            include $path . "Controller/logout.php";
        case 'laylaimatkhau':
            include $path . "View/User/laylaimatkhau.php";
            break;
        case 'NhapMatKhauMoi':
            include $path . "View/User/NhapLaiMatKhau.php";
            break;
        case 'phantrang':
            include $path . "Controller/Admin/Sanpham/listpage.php";
            include $path . "View/User/Home.php";
            break;
        default:
            $_GET['page'] = 1;
            $_GET['maxPageItem'] = 6;
            $_GET['sortName'] = 'id_phim';
            $_GET['sortBy'] = 'desc';
            include $path . "Controller/Admin/Sanpham/listpage.php";
            include $path . "View/User/Home.php";
    }
} else {
    $_GET['page'] = 1;
    $_GET['maxPageItem'] = 6;
    $_GET['sortName'] = 'id_phim';
    $_GET['sortBy'] = 'desc';


    include $path . "Controller/Admin/Sanpham/listpage.php";

    include $path . "View/User/Home.php";
}

include $path . "Common/User/footer.php";
ob_end_flush();
?>