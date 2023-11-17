<?php
function InsertVaiTro($tenvaitro,$mavaitro){
    $sql = "INSERT INTO vaitro(tenvaitro,mavaitro) VALUES ('{$tenvaitro}','{$mavaitro}')";
    execute($sql);
}

function DeleteVaiTro($id){
    $sql = "DELETE FROM vaitro WHERE id_vaitro = {$id}";
    execute($sql);
}

function UpdateVaiTro($id,$tenvaitro,$mavaitro){
    $sql = "UPDATE vaitro SET tenvaitro = '{$tenvaitro}', mavaitro = '{$mavaitro}' WHERE id_vaitro = {$id}";
    execute($sql);
}

function SelectVaiTro(){
    $sql = "SELECT * FROM vaitro";
    return query($sql);
}

?>