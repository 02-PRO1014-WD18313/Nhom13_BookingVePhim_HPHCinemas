<?php
function InsertPhong($maphong, $trangthai){
    $sql = "INSERT INTO phong(maphong, soluongda, trangthai) VALUES ('{$maphong}',10,{$trangthai})";
    $id = inserted_id($sql);
    return $id;
}

function DeletePhong($id){
    $sql = "DELETE FROM phong WHERE id_phong = {$id}";
    execute($sql);
}

function UpdatePhong($id,$maphong, $trangthai){
    $sql = "UPDATE phong SET maphong = '{$maphong}', soluongday = 10, , trangthai = $trangthai  WHERE id_phong = {$id}";
    execute($sql);
}

function SelectPhong(){
    $sql = "SELECT * FROM phong";
    return query($sql);
}

function FindByName($name){
    $sql = "SELECT * FROM phong WHERE maphong = '{$name}'";
    return sizeof(query($sql));
}

function CountPhong(){
    $sql = "SELECT * FROM phong";
    return sizeof(query($sql));
}

function SelectPhongPage($sortName = null, $sortBy = null, $offset = 0, $limit = 0){
    $sql = "SELECT * FROM phong as p INNER JOIN trangthaiphong as t ON p.trangthai = t.id_trangthaiphong ";
    if($sortName != null and $sortBy != null){
        $sql .= " ORDER BY {$sortName} {$sortBy}";
    }
    if($offset >=0 and $limit >=0){
        $sql .= " LIMIT {$limit} OFFSET {$offset}";
    }
    $list = query($sql);
    return $list;
}

function FindPhong($id){
    $sql = "SELECT * FROM phong WHERE id_phong = {$id}";
    return query($sql);
}

?>