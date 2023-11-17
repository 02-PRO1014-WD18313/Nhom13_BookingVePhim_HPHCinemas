<?php
// function InsertChiTietTheLoai($id_theloai,$id_phim){
//     $sql = "INSERT INTO theloaiphimchitiet(id_theloai,id_phim) VALUES ({$id_theloai},{$id_phim})";
//     execute($sql);
// }

// function DeleteChiTietTheLoai($id){
//     $sql = "DELETE FROM theloaiphimchitiet WHERE id_theloaichitiet = {$id}";
//     execute($sql);
// }

// function UpdateChiTietTheLoai($id,$id_theloai,$id_phim){
//     $sql = "UPDATE theloaiphimchitiet SET id_theloai = {$id_theloai}, id_phim = {$id_phim} WHERE id_theloaichitiet = {$id}";
//     execute($sql);
// }

function SelectTrangThaiPhong(){
    $sql = "SELECT * FROM trangthaiphong";
    return query($sql);
}

?>