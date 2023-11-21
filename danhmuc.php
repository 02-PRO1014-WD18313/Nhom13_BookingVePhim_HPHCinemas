<?php
function InsertDanhMuc($tendanhmuc){
    $sql = "INSERT INTO danhmuc(tendanhmuc) VALUES ('{$tendanhmuc}')";
    execute($sql);
}

function DeleteDanhMuc($id){
    $sql = "DELETE FROM danhmuc WHERE id_danhmuc = {$id}";
    execute($sql);
}

function UpdateDanhmuc($id,$tendanhmuc){
    $sql = "UPDATE danhmuc SET tendanhmuc = '{$tendanhmuc}' WHERE id_danhmuc = {$id}";
    execute($sql);
}

function SelectDanhMuc(){
    $sql = "SELECT * FROM danhmuc";
    return query($sql);
}

?>