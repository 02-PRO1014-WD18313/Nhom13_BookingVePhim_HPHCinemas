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

function SelectNguoiDung($sortName = null, $sortBy = null, $offset = 0, $limit = 0){
    $sql = "SELECT * FROM nguoidung as n INNER JOIN vaitro as v ON n.id_vaitro = v.id_vaitro WHERE v.mavaitro = 'USER' ";
    if($sortName != null and $sortBy != null){
        $sql .= " ORDER BY {$sortName} {$sortBy}";
    }
    if($offset >=0 and $limit >=0){
        $sql .= " LIMIT {$limit} OFFSET {$offset}";
    }
    return query($sql);
}

function checkUsername($name){
    $sql = "SELECT * FROM nguoidung WHERE tendangnhap = '{$name}'";
    $list =  query($sql);
    return $list == null ? null : $list[0];
}

function checkEmail($email){
    $sql = "SELECT * FROM nguoidung WHERE email = '{$email}'";
    $list =  query($sql);
    return $list == null ? null : $list[0];
}

function CountNguoiDung(){
    $sql = "SELECT * FROM nguoidung as n INNER JOIN vaitro as v ON n.id_vaitro = v.id_vaitro WHERE v.mavaitro = 2";
    return sizeof(query($sql));
}

function CheckUsernameAndPassword($tenDangNhap,$matKhau){
    $sql_nguoidung = "SELECT * FROM nguoidung AS n INNER JOIN vaitro AS r ON n.id_vaitro = r.id_vaitro WHERE n.tendangnhap = '{$tenDangNhap}' and n.matkhau = '{$matKhau}'";
    $list = query($sql_nguoidung);
    return $list == null ? null : $list[0];
}

function updatePassWord($id_nguoidung,$matkhau){
    $sql = "UPDATE nguoidung SET  matkhau = '{$matkhau}'  WHERE id_nguoidung = {$id_nguoidung}";
    execute($sql);
}

function UpdateInformationUser($id_nguoidung,$hovaten, $email){
    $sql = "UPDATE nguoidung SET  hovaten = '{$hovaten}', email = '{$email}'  WHERE id_nguoidung = {$id_nguoidung}";
    execute($sql);
}

function FindUser($id){
    $sql = "SELECT * FROM nguoidung WHERE id_nguoidung = {$id}";
    $list = query($sql);
    return $list == null ? null : $list[0];
}

?>