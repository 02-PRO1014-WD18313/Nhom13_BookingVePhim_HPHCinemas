<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/duan1_nhom13/';
include $path."Model/pdo.php";
include $path."Model/sanpham.php";
include $path."Model/theloaiphimchitiet.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $listTheLoai = $_POST['theloai'];
        $tensanpham = $_POST['tensanpham'];
        $thoiluongphim = $_POST['thoiluongphim'];
        $gia = $_POST['gia'];
        $ngayphathanh = $_POST['ngayphathanh'];
        $mota = $_POST['mota'];
        $dir = $path ."Template/Admin/assets/img/";
        $img = basename($_FILES["hinhanh"]["name"]);
        $imgfile = $dir.$img;
        move_uploaded_file($_FILES["hinhanh"]["tmp_name"],$imgfile);
        $danhmuc = $_POST['danhmuc'];
        $id = InsertPhim($tensanpham,$thoiluongphim,$ngayphathanh,$mota,$imgfile,$gia,$danhmuc);
        foreach ($listTheLoai as $theLoai) {
            InsertChiTietTheLoai($theLoai,$id);
            // echo $theLoai;
        }
    header("location:../../Admin/index.php?action=sanpham&check=success");


}else{
    header("location:../../Admin/index.php");
}
?>