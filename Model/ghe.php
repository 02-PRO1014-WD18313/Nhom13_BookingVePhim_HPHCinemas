<?php
function InsertGhe($maghe,$dayghe){
    $sql = "INSERT INTO ghe(maghe, id_dayghe) VALUES ('{$maghe}',{$dayghe})";
    execute($sql);
}

// function DeleteDonHang($id){
//     $sql = "DELETE FROM donhang WHERE id_DonHang = {$id}";
//     execute($sql);
// }

function UpdateGhe($id,$status){
    $sql = $sql = "UPDATE ghe SET trangthaighe = '{$status}' WHERE id_ghe = {$id}";

    execute($sql);
}

function SelectGheByDayGhe($id){
    $sql = "SELECT * FROM ghe WHERE id_dayghe = {$id}";
    return query($sql);
}

function DeleteGheByDayGhe($id){
    $sql = "DELETE FROM ghe WHERE id_dayghe = {$id} ";
    execute($sql);    
}

?>