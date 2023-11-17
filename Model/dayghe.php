<?php
function InsertDayGhe($madayghe, $soluongghe,$id_phong){
    $sql = "INSERT INTO dayghe(maday, soluongghe, id_phong) VALUES ('{$madayghe}',{$soluongghe},{$id_phong})";
    $id = inserted_id($sql);
    return $id;
}

function DeleteDayGhe($id){
    $sql = "DELETE FROM dayghe WHERE id_dayghe = {$id}";
    execute($sql);
}

function UpdateDayGhe($id,$madayghe, $soluongghe,$id_phong){
    $sql = "UPDATE dayghe SET maday = '{$madayghe}', soluongghe = {$soluongghe}, id_phong = {$id_phong}  WHERE id_dayghe = {$id}";
    execute($sql);
}

function SelectDayGhe(){
    $sql = "SELECT * FROM dayghe";
    return query($sql);
}

?>