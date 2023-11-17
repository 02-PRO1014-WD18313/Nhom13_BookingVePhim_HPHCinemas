<?php
function InsertGhe($maghe,$dayghe){
    $sql = "INSERT INTO ghe(maghe, trangthaighe, id_dayghe) VALUES ('{$maghe}',1,{$dayghe})";
    execute($sql);
}

// function DeleteDonHang($id){
//     $sql = "DELETE FROM donhang WHERE id_DonHang = {$id}";
//     execute($sql);
// }

// function UpdateDonHang($id,$id_nguoidung, $id_lichchieu,$soghedadat){
//     $sql = "UPDATE donhang SET id_nguoidung = {$id_nguoidung}, id_lichchieu = {$id_lichchieu}, soghedadat = {$soghedadat}  WHERE id_donhang = {$id}";
//     execute($sql);
// }

// function SelectDonHang(){
//     $sql = "SELECT * FROM donhang";
//     return query($sql);
// }

?>