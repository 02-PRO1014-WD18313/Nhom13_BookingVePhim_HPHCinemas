<?php
function InsertDonHang($id_nguoidung, $id_lichchieu,$soghedadat){
    $sql = "INSERT INTO donhang(id_nguoidung, id_lichchieu, soghedadat) VALUES ({$id_nguoidung},{$id_lichchieu},{$soghedadat})";
    execute($sql);
}

function DeleteDonHang($id){
    $sql = "DELETE FROM donhang WHERE id_DonHang = {$id}";
    execute($sql);
}

function UpdateDonHang($id,$id_nguoidung, $id_lichchieu,$soghedadat){
    $sql = "UPDATE donhang SET id_nguoidung = {$id_nguoidung}, id_lichchieu = {$id_lichchieu}, soghedadat = {$soghedadat}  WHERE id_donhang = {$id}";
    execute($sql);
}

function SelectDonHang(){
    $sql = "SELECT * FROM donhang";
    return query($sql);
}

?>