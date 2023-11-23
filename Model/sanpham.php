<?php
function InsertPhim($tenPhim, $daodien, $dienvien, $thoiluongphim,$ngayphathanh,$ngayketthuc,$mota,$anh, $giave, $danhmuc){
    $sql = "INSERT INTO phim(tenphim, daodien, dienvien, thoiluongphim,ngayphathanh,ngayketthuc, mota, anh, giave, id_danhmuc) VALUES ('{$tenPhim}', '{$daodien}', '{$dienvien}',{$thoiluongphim},'{$ngayphathanh}','{$ngayketthuc}','{$mota}','{$anh}',{$giave},{$danhmuc})";
    $id = inserted_id($sql);
    return $id;
}

function DeletePhim($id){
    $sql = "DELETE FROM phim WHERE id_phim = {$id}";
    execute($sql);
}

function UpdatePhim($id,$tenPhim,$daodien, $dienvien, $thoiluongphim,$ngayphathanh,$ngayketthuc,$mota,$anh, $giave, $danhmuc){
    $sql = "UPDATE phim SET tenphim = '{$tenPhim}', daodien = '{$daodien}', dienvien = '{$dienvien}', thoiluongphim = {$thoiluongphim}, ngayphathanh = '{$ngayphathanh}', ngayketthuc = '{$ngayketthuc}', mota = '{$mota}', anh = '{$anh}', giave = {$giave}, id_danhmuc = {$danhmuc} WHERE id_phim = {$id}";
    execute($sql);
}

function SelectPhim(){
    $sql = "SELECT * FROM phim";
    return query($sql);
}

function CountPhim(){
    $sql = "SELECT * FROM phim";
    return sizeof(query($sql));
}

function SelectPhimPage($sortName = null, $sortBy = null, $offset = 0, $limit = 0){
    $sql = "SELECT * FROM phim ";
    if($sortName != null and $sortBy != null){
        $sql .= " ORDER BY {$sortName} {$sortBy}";
    }
    if($offset >=0 and $limit >=0){
        $sql .= " LIMIT {$limit} OFFSET {$offset}";
    }
    $list = query($sql);
    return $list;
}

function FindPhim($id){
    $sql = "SELECT * FROM phim AS p INNER JOIN danhmuc AS d ON p.id_danhmuc = d.id_danhmuc WHERE id_phim = {$id}";
    return query($sql);
}

function FindPhimByDanhMuc($id){
    $sql = "SELECT * FROM phim  WHERE id_danhmuc = {$id}";
    return query($sql);
}

?>