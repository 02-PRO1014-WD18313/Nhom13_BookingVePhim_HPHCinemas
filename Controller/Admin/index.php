<?php
session_start();
ob_start();

if (isset($_SESSION['nguoidung']) && $_SESSION['nguoidung']['mavaitro'] == "ADMIN") {
    $path = $_SERVER['DOCUMENT_ROOT'] . '/Nhom13_BookingVePhim_HPHCinemas/';
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
            case 'danhsachdanhmuc':
                include $path . "Controller/Admin/Danhmuc/listpage.php";
                include $path . "View/Admin/Danhmuc/danhsachdanhmuc.php";

                break;
            case 'suadanhmuc':
                include $path . "Controller/Admin/Danhmuc/FindDanhMuc.php";
                include $path . "View/Admin/Danhmuc/chinhsuadanhmuc.php";
                break;
            case 'danhsachtheloai':
                include $path . "Controller/Admin/Theloai/listpage.php";
                include $path . "View/Admin/Theloai/danhsachtheloai.php";

                break;
            case 'suatheloai':

                include $path . "Controller/Admin/Theloai/FindTheLoai.php";
                include $path . "View/Admin/Theloai/chinhsuatheloai.php";
                break;
            case 'danhsachphim':
                include $path . "Controller/Admin/Sanpham/listpage.php";
                include $path . "View/Admin/Sanpham/danhsachphim.php";

                break;
            case 'chitietphim':
                include $path . "Controller/Admin/Binhluan/list.php";
                include $path . "Controller/Admin/Sanpham/FindPhim.php";
                include $path . "Controller/Admin/Theloai/FindTheLoaiBySanPham.php";
                include $path . "View/Admin/Sanpham/chitietphim.php";

                break;
            case 'chinhsuaphim':
                include $path . "Controller/Admin/Sanpham/FindPhim.php";
                include $path . "Controller/Admin/Theloai/FindTheLoaiBySanPham.php";
                // include $path . "Controller/Admin/Theloai/list.php";
                include $path . "Controller/Admin/Danhmuc/list.php";
                include $path . "View/Admin/Sanpham/chinhsuaphim.php";
                break;
            case 'danhsachphong':
                include $path . "Controller/Admin/Phong/listpage.php";
                include $path . "View/Admin/Phong/danhsachphong.php";

                break;
            case 'chitietphong':
                include $path . "Controller/Admin/Phong/FindPhong.php";
                include $path . "View/Admin/Phong/chitietphong.php";
                break;
            case 'chinhsuaphong':
                include $path . "Controller/Admin/Phong/FindPhong.php";
                include $path . "Controller/Admin/TrangThai/ListTrangThaiPhong.php";
                include $path . "View/Admin/Phong/chinhsuaphong.php";
                break;
            case 'suatchieu':
                
                include $path . "Controller/Admin/Suatchieu/FindPhongAndPhim.php";
                include $path . "View/Admin/Suatchieu/themsuatchieu.php";
                break;
            case 'danhsachsuatchieu':
                include $path . "Model/lichchieu.php";
                include $path . "Controller/Admin/Sanpham/listpage.php";
                include $path . "View/Admin/Suatchieu/danhsachsuatchieu.php";

                break;
            case 'chitietsuatchieu':
                include $path . "Controller/Admin/Suatchieu/ListSuatChieu.php";
                include $path . "View/Admin/Suatchieu/chitietsuatchieu.php";

                break;
            case 'quanlytaikhoan':

                include $path . "Controller/Admin/Taikhoan/ListNguoiDung.php";
                include $path . "View/Admin/Taikhoan/quanly.php";
                break;
            case 'quanlydonhang':

                include $path . "Controller/Admin/Donhang/List.php";
                include $path . "View/Admin/Donhang/Quanlydonhang.php";
                break;
            case 'thongkedoanhthu':
                include $path . "Model/doanhthu.php";
                include $path . "Controller/Admin/Sanpham/list.php";
                include $path . "View/Admin/Doanhthu/Thongkedoanhthu.php";
                break;
            case 'chitietdoanhthu':
                include $path . "Controller/Admin/Doanhthu/FindDoanhThuByDate.php";
                include $path . "View/Admin/Doanhthu/Chitietdoanhthu.php";
                break;
            default:
                include $path . "View/Admin/Home.php";
        }
    } else {
        include $path . "View/Admin/Home.php";
    }

    include $path . "Common/Admin/footer.php";
} else {
    header("location:../User/index.php");
}
ob_end_flush();
?>