<?php
$path = $_SERVER['DOCUMENT_ROOT'] . '/Nhom13_BookingVePhim_HPHCinemas/';
include $path . "Model/pdo.php";
include $path . "Model/phong.php";
include $path . "Model/dayghe.php";
include $path . "Model/ghe.php";
include $path . "Model/lichchieu.php";
include $path . "Model/sanpham.php";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $idphong = $_GET['phong'];
    $idphim = $_GET['id_phim'];
    $time = $_GET['thoigianchieu'];
    $tenphim = $_GET['tenphim'];
    $phim = FindPhim($idphim);
    $ngayphathanh = $phim[0]['ngayphathanh'];
    $ngayketthuc = $phim[0]['ngayketthuc'];
    $thoigianchieu  = $ngayphathanh . " " . $time . ":00";

    $ngayBatDau = new DateTime($thoigianchieu);
    $ngayKetThuc = new DateTime($ngayketthuc);


    $id_lichchieu = array();
    // Tạo vòng lặp từ ngày bắt đầu đến ngày kết thúc
    while ($ngayBatDau <= $ngayKetThuc) {
        $thoiGian = $ngayBatDau->format('Y-m-d H:i:s');
        $id = InsertLichChieu($idphim, $idphong, $thoiGian);
        $id_lichchieu[] = $id;

        $char = 65;
        $length = 5;

        for ($i = 0; $i < $length; $i++) {
            $day = chr($char);
            $soluong = 6;
            $idDay = InsertDayGhe($day, $soluong, $idphong,$id);
            for ($j = 1; $j <= $soluong; $j++) {
                InsertGhe($day . $j, $idDay);
            }
            $char++;
        }
        $ngayBatDau->modify('+1 day'); // Tăng thêm 1 ngày
    }


    // $char = 65;
    // $length = 10;
    // $soluongghe = 0;
    // for ($i = 0; $i < $length; $i++) {
    //     $day = chr($char);
    //     $soluongghe += $_POST[$day];
    //     $char ++;
    // }

    // if(FindByName($maphong) > 0){
    //     header("location:../../Admin/index.php?action=phong&check=danger");
    //     return;
    // }



    header("location:../../Admin/index.php?action=suatchieu&check=success&id_phim={$idphim}&tenphim={$tenphim}");
} else {
    header("location:../../Admin/index.php");
}
