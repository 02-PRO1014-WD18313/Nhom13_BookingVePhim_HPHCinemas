<?php
function InsertLichChieu($id_phim, $id_phong,$thoigianchieu){
    $sql = "INSERT INTO lichchieu(id_phim, id_phong, thoigianchieu) VALUES ({$id_phim},{$id_phong},'{$thoigianchieu}')";
    execute($sql);
}

function DeleteLichChieu($id){
    $sql = "DELETE FROM lichchieu WHERE id_lichchieu = {$id}";
    execute($sql);
}

function UpdateLichChieu($id,$id_phim, $id_phong,$thoigianchieu){
    $sql = "UPDATE lichchieu SET id_phim = {$id_phim}, id_phong = {$id_phong}, thoigianchieu = '{$thoigianchieu}'  WHERE id_lichchieu = {$id}";
    execute($sql);
}

function SelectLichChieu(){
    $sql = "SELECT * FROM lichchieu";
    return query($sql);
}

?>