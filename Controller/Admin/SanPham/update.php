<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/duan1_nhom13/';
include $path."Model/pdo.php";
include $path."Model/sanpham.php";
include $path."Model/theloaiphimchitiet.php";
include $path."Model/theloai.php";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // $listTheLoai = SelectTheLoai();
        $id = $_POST['id_phim'];
        $listTheLoaiBySanPham = FindTheLoaiBySanPham($id);
        $listTheLoai = $_POST['theloai'];
        $tensanpham = $_POST['tensanpham'];
        $daodien  = $_POST['daodien'];
        $dienvien  = $_POST['dienvien'];
        $thoiluongphim = $_POST['thoiluongphim'];
        $gia = $_POST['gia'];
        $ngayphathanh = $_POST['ngayphathanh'];
        $ngayketthuc = $_POST['ngayketthuc'];
        $mota = $_POST['mota'];
        $dir = $path ."Template/Admin/assets/img/";
        $img = basename($_FILES["hinhanh"]["name"]);
        $imgfile = $dir.$img;
        move_uploaded_file($_FILES["hinhanh"]["tmp_name"],$imgfile);
        $danhmuc = $_POST['danhmuc'];
        UpdatePhim($id,$tensanpham,$daodien,$dienvien,$thoiluongphim,$ngayphathanh,$ngayketthuc,$mota,$img,$gia,$danhmuc);
        foreach($listTheLoaiBySanPham as $theLoaiBySanPham){
            if(!checkold($theLoaiBySanPham['id_theloai'],$listTheLoai)){
                DeleteChiTietTheLoaiByTheLoaiAndPhim($theLoaiBySanPham['id_theloai'],$id);
            }
        }
        foreach ($listTheLoai as $theLoai) {
            if(!check($theLoai,$listTheLoaiBySanPham)){
                InsertChiTietTheLoai($theLoai,$id);
            }

            
            // echo $theLoai;
        }
    header("location:../../Admin/index.php?action=chinhsuaphim&id_phim={$id}&check=success");


}else{
    header("location:../../Admin/index.php");
}
function check ($theLoai,$listTheLoaiBySanPham){
    for($i = 0; $i < sizeof($listTheLoaiBySanPham) ; $i++){
        if($theLoai == $listTheLoaiBySanPham[$i]['id_theloai']){
            return true;
        }
    }
    return false;
}
function checkold($theLoaiBySanPham,$listTheLoai){
    foreach($listTheLoai as $theLoai){
        if($theLoaiBySanPham == $theLoai){
            return true;
        }
    }
    return false;
}
?>