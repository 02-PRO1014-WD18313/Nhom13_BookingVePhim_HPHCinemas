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

function SelectDanhMucPage($sortName = null, $sortBy = null, $offset = 0, $limit = 0){
    $sql = "SELECT * FROM danhmuc ";
    if($sortName != null and $sortBy != null){
        $sql .= " ORDER BY {$sortName} {$sortBy}";
    }
    if($offset >=0 and $limit >=0){
        $sql .= " LIMIT {$limit} OFFSET {$offset}";
    }
    $list = query($sql);
    return $list;
}

function countDanhMuc(){
    $sql = "SELECT * FROM danhmuc";
    return sizeof(getCount($sql));
}

function FindDanhMuc($id){
    $sql = "SELECT * FROM danhmuc WHERE id_danhmuc = {$id}";
    return query($sql);
}

?>