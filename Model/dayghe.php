<?php
function InsertDayGhe($madayghe, $soluongghe,$id_phong,$id_lichchieu){
    $sql = "INSERT INTO dayghe(maday, soluongghe, id_phong,id_lichchieu) VALUES ('{$madayghe}',{$soluongghe},{$id_phong},{$id_lichchieu})";
    $id = inserted_id($sql);
    return $id;
}

function DeleteDayGhe($id){
    $sql = "DELETE FROM dayghe WHERE id_dayghe = {$id}";
    execute($sql);
}

function UpdateDayGhe($madayghe, $soluongghe,$id_phong){
    $sql = "UPDATE dayghe SET soluongghe = {$soluongghe}  WHERE id_phong = {$id_phong} AND maday like '{$madayghe}'";
    execute($sql);
}

function SelectDayGhe(){
    $sql = "SELECT * FROM dayghe";
    return query($sql);
}

function SelectDayGheByPhong($id){
    $sql = "SELECT * FROM dayghe WHERE id_phong = {$id}";
    return query($sql);
}

function SelectDayGheBySuatChieu($id){
    $sql = "SELECT * FROM dayghe WHERE id_lichchieu = {$id}";
    return query($sql);
}

?>