<?php
function InsertLichChieu($id_phim, $id_phong,$thoigianchieu){
    $sql = "INSERT INTO lichchieu(id_phim, id_phong, thoigianchieu) VALUES ({$id_phim},{$id_phong},'{$thoigianchieu}')";
    $id = inserted_id($sql);
    return $id;
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

function FindPhongByLichChieu(){
    $sql = "SELECT * from lichchieu as l right JOIN phong as p ON l.id_phong = p.id_phong";
    return query($sql);
}

function FindPhimByLichChieu(){
    $sql = "SELECT * from lichchieu as l right JOIN phim as p ON l.id_phim = p.id_phim";
    return query($sql);
}

function FindLichChieuByPhim($id){
    $sql = "SELECT * FROM lichchieu WHERE id_phim = {$id}";
    return query($sql);
}

?>