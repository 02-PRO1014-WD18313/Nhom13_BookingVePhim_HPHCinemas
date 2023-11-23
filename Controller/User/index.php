<?php
$path = $_SERVER['DOCUMENT_ROOT'] . '/duan1_nhom13/';
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
            include $path . "View/User/Chitietphim.php";
            break;
        case 'datve':
            include $path . "Controller/User/Datve/FindPhong.php";
            include $path . "View/User/Datve.php";
            break;
        case 'dangky':
            include $path . "View/User/Dangky.php";
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
?>