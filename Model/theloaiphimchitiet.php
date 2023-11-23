<?php
function InsertChiTietTheLoai($id_theloai,$id_phim){
    $sql = "INSERT INTO theloaiphimchitiet(id_theloai,id_phim) VALUES ({$id_theloai},{$id_phim})";
    execute($sql);
}

function DeleteChiTietTheLoai($id){
    $sql = "DELETE FROM theloaiphimchitiet WHERE id_theloaichitiet = {$id}";
    execute($sql);
}

function UpdateChiTietTheLoai($id,$id_theloai,$id_phim){
    $sql = "UPDATE theloaiphimchitiet SET id_theloai = {$id_theloai}, id_phim = {$id_phim} WHERE id_theloaichitiet = {$id}";
    execute($sql);
}

function SelectChiTietTheLoai(){
    $sql = "SELECT * FROM theloaiphimchitiet";
    return query($sql);
}

function DeleteChiTietTheLoaiBySanPham($id){
    $sql = "DELETE FROM theloaiphimchitiet WHERE id_phim = {$id}";
    execute($sql);
}

function DeleteChiTietTheLoaiByTheLoai($id){
    $sql = "DELETE FROM theloaiphimchitiet WHERE id_theloai = {$id}";
    execute($sql);
}

function UpdateChiTietTheLoaiBySanPham($id_theloai_new,$id_theloai,$id_phim){
    $sql = "UPDATE theloaiphimchitiet SET id_theloai = {$id_theloai_new} WHERE id_phim = {$id_phim} AND id_theloai = {$id_theloai}";
    execute($sql);
}

function DeleteChiTietTheLoaiByTheLoaiAndPhim($idTheLoai,$idPhim){
    $sql = "DELETE FROM theloaiphimchitiet WHERE id_theloai = {$idTheLoai} AND id_phim = {$idPhim}";
    execute($sql);
}

function FindPhimByTheLoai($id){
    $sql = "SELECT id_phim FROM theloaiphimchitiet WHERE id_theloai = {$id}";
    return query($sql);
}

?>