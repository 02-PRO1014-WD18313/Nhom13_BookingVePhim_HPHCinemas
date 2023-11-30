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
    $sql = "SELECT * FROM lichchieu WHERE id_phim = {$id} ORDER BY thoigianchieu asc";
    return query($sql);
}

function FindByDate($date, $id){
    $sql = "SELECT * FROM lichchieu WHERE DATE(thoigianchieu) >= '{$date}' AND id_phim ={$id}";
    return query($sql);
}

function FindLichChieuById($id){
    $sql = "SELECT * FROM phong as p INNER JOIN lichchieu as l ON p.id_phong = l.id_phong INNER JOIN phim as ph ON l.id_phim = ph.id_phim WHERE l.id_lichchieu = {$id}";
    return query($sql);
}

function FindTime($id){
    $sql = "SELECT  thoigianchieu  FROM lichchieu  where id_phim = {$id} order by thoigianchieu asc  limit 1 offset 0";
    return query($sql);
}

function FindTimes($id,$time){
    $sql ="SELECT * FROM duan1.lichchieu where DATE(thoigianchieu) = '{$time}' and id_phim = {$id}";
    return query($sql);

}

function FindLichChieuByPhong($id){
    $sql = "SELECT * FROM lichchieu WHERE  id_phong ={$id}";
    return query($sql);
}

?>