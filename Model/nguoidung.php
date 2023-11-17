<?php
function InsertNguoiDung($hovaten, $email,$tendangnhap,$matkhau,$diem,$vaitro){
    $sql = "INSERT INTO nguoidung(hovaten, email, tendangnhap,matkhau,diem,id_vaitro) VALUES ('{$hovaten}','{$email}','{$tendangnhap}','{$matkhau}',{$diem},{$vaitro})";
    execute($sql);
}

function DeleteNguoiDung($id){
    $sql = "DELETE FROM nguoidung WHERE id_nguoidung = {$id}";
    execute($sql);
}

function UpdateNguoiDung($id,$hovaten, $email,$tendangnhap,$matkhau,$diem,$vaitro){
    $sql = "UPDATE nguoidung SET hovaten = '{$hovaten}', email = '{$email}', tendangnhap = '{$tendangnhap}' , matkhau = '{$matkhau}', diem = {$diem}, vaitro = {$vaitro}  WHERE id_nguoidung = {$id}";
    execute($sql);
}

function SelectNguoiDung(){
    $sql = "SELECT * FROM nguoidung";
    return query($sql);
}

?>