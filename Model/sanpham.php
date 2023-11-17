<?php
function InsertPhim($tenPhim, $thoiluongphim,$ngayphathanh,$mota,$anh, $giave, $danhmuc){
    $sql = "INSERT INTO phim(tenphim, thoiluongphim, ngayphathanh, mota, anh, giave, id_danhmuc) VALUES ('{$tenPhim}',{$thoiluongphim},'{$ngayphathanh}','{$mota}','{$anh}',{$giave},{$danhmuc})";
    $id = inserted_id($sql);
    return $id;
}

function DeletePhim($id){
    $sql = "DELETE FROM phim WHERE id_phim = {$id}";
    execute($sql);
}

function UpdatePhim($id,$tenPhim, $thoiluongphim,$ngayphathanh,$mota,$anh, $giave, $danhmuc){
    $sql = "UPDATE phim SET tenphim = '{$tenPhim}', thoiluongphim = {$thoiluongphim}, ngayphathanh = '{$ngayphathanh}', mota = '{$mota}', anh = '{$anh}', giave = {$giave}, id_danhmuc = {$danhmuc} WHERE id_phim = {$id}";
    execute($sql);
}

function SelectPhim(){
    $sql = "SELECT * FROM phim";
    return query($sql);
}

?>