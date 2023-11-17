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

?>