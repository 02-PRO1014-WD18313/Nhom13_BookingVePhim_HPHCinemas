<?php
function InsertPhong($maphong,$soluongghe, $trangthai){
    $sql = "INSERT INTO phong(maphong, soluongday, soluongghe, trangthai) VALUES ('{$maphong}',10,{$soluongghe},{$trangthai})";
    $id = inserted_id($sql);
    return $id;
}

function DeletePhong($id){
    $sql = "DELETE FROM phong WHERE id_phong = {$id}";
    execute($sql);
}

function UpdatePhong($id,$maphong, $soluongday,$soluongghe, $trangthai){
    $sql = "UPDATE phong SET maphong = '{$maphong}', soluongday = {$soluongday}, soluongghe = {$soluongghe}, trangthai = $trangthai  WHERE id_phong = {$id}";
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

?>