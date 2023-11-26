<?php
$path = $_SERVER['DOCUMENT_ROOT'] . '/Nhom13_BookingVePhim_HPHCinemas/';


include $path . "Model/theloaiphimchitiet.php";


if ($_SERVER["REQUEST_METHOD"] == "GET") {


    if (empty($_GET['theloai'])) {
        header("location:../../Controller/User/index.php?");
        return;
    }
    $list = $_GET['theloai'];
    
    

    $arrayPhim = array();

    for ($i = 0; $i < sizeof($list); $i++) {
        $listphim = FindPhimByTheLoai($list[$i]);
        foreach ($listphim as $phim) {
            if (!in_array($phim['id_phim'], $arrayPhim)) {
                $arrayPhim[] = $phim['id_phim'];
            }
            
        }
    }
    




} else {
    header("location:../../User/index.php?");
}
