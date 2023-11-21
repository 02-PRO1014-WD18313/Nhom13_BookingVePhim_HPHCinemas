<?php
function InsertTheLoai($tentheloai){
    $sql = "INSERT INTO theloai(tentheloai) VALUES ('{$tentheloai}')";
    execute($sql);
}

function DeleteTheLoai($id){
    $sql = "DELETE FROM theloai WHERE id_theloai = {$id}";
    execute($sql);
}

function UpdateTheLoai($id,$tentheloai){
    $sql = "UPDATE theloai SET tentheloai = '{$tentheloai}' WHERE id_theloai = {$id}";
    execute($sql);
}

function SelectTheLoai(){
    $sql = "SELECT * FROM theloai";
    return query($sql);
}

function CountTheLoai(){
    $sql = "SELECT * FROM theloai";
    return sizeof(query($sql));
}

function SelectTheLoaiPage($sortName = null, $sortBy = null, $offset = 0, $limit = 0){
    $sql = "SELECT * FROM theloai ";
    if($sortName != null and $sortBy != null){
        $sql .= " ORDER BY {$sortName} {$sortBy}";
    }
    if($offset >=0 and $limit >=0){
        $sql .= " LIMIT {$limit} OFFSET {$offset}";
    }
    $list = query($sql);
    return $list;
}

function FindTheLoai($id){
    $sql = "SELECT * FROM theloai WHERE id_theloai = {$id}";
    return query($sql);
}

function FindTheLoaiBySanPham($id){
    $sql = "SELECT t.* FROM phim AS p INNER JOIN theloaiphimchitiet AS c ON p.id_phim = c.id_phim INNER JOIN theloai AS t ON c.id_theloai = t.id_theloai WHERE p.id_phim = {$id}";
    return query($sql);
}

?>