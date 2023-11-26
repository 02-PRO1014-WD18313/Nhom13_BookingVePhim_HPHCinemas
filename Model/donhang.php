<?php
function InsertDonHang($madonhang,$gia,$soghedadat,$thoigiandat,$id_nguoidung, $id_lichchieu){
    $sql = "INSERT INTO donhang(madonhang,gia,soghedadat,thoigiandat,id_nguoidung, id_lichchieu) VALUES ({$madonhang},{$gia},'{$soghedadat}','{$thoigiandat}',{$id_nguoidung},{$id_lichchieu})";
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