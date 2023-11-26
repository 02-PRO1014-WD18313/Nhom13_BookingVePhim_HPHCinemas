
<?php 
$path = $_SERVER['DOCUMENT_ROOT'].'/Nhom13_BookingVePhim_HPHCinemas/';
include $path."Model/pdo.php";
include $path."Model/dayghe.php";
include $path."Model/ghe.php";
header('Content-Type: application/json');


// Lấy danh sách ghế

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id_lichchieu'];
    $seats = array();
    $listDayGhe = SelectDayGheBySuatChieu($id);
    foreach($listDayGhe as $dayGhe){
        $listGhe =  SelectGheByDayGhe($dayGhe['id_dayghe']);
        foreach($listGhe as $ghe){
            $seats[] = $ghe;
        }
    }

    echo json_encode($seats);
}

// Đặt ghế

?>