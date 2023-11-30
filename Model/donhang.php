<?php
function InsertDonHang($madonhang,$gia,$soghedadat,$thoigiandat,$soluong,$id_nguoidung, $id_lichchieu){
    $sql = "INSERT INTO donhang(madonhang,tongtien,soghedadat,thoigiandat,soluong,id_nguoidung, id_lichchieu) VALUES ({$madonhang},{$gia},'{$soghedadat}','{$thoigiandat}',{$soluong},{$id_nguoidung},{$id_lichchieu})";
    execute($sql);
}

function DeleteDonHang($id){
    $sql = "DELETE FROM donhang WHERE id_DonHang = {$id}";
    execute($sql);
}

function UpdateDonHang($id,$id_nguoidung, $id_lichchieu,$soghedadat){
    $sql = "UPDATE donhang SET id_nguoidung = {$id_nguoidung}, id_lichchieu = {$id_lichchieu}, soghedadat = {$soghedadat}  WHERE id_donhang = {$id}";
    execute($sql);
}



function SelectDonHangByUser($id, $sortName = null, $sortBy = null, $offset = 0, $limit = 0){
    $sql = "SELECT *
    FROM donhang
    INNER JOIN lichchieu ON donhang.id_lichchieu = lichchieu.id_lichchieu
    INNER JOIN phim ON lichchieu.id_phim = phim.id_phim
    INNER JOIN phong ON lichchieu.id_phong = phong.id_phong WHERE donhang.id_nguoidung = {$id}";
    if($sortName != null and $sortBy != null){
        $sql .= " ORDER BY donhang.{$sortName} {$sortBy}";
    }
    if($offset >=0 and $limit >=0){
        $sql .= " LIMIT {$limit} OFFSET {$offset}";
    }
    $list = query($sql);
    return $list;
}

function CountDonHangByUser($id){
    $sql = "SELECT * FROM donhang WHERE id_nguoidung = {$id}";
    return sizeof(query($sql));
}

function CountDonHang(){
    $sql = "SELECT * FROM donhang";
    return sizeof(query($sql));
}

function SelectDonHang( $sortName = null, $sortBy = null, $offset = 0, $limit = 0){
    $sql = "SELECT *
    FROM nguoidung INNER JOIN
     donhang on nguoidung.id_nguoidung = donhang.id_nguoidung
    INNER JOIN lichchieu ON donhang.id_lichchieu = lichchieu.id_lichchieu
    INNER JOIN phim ON lichchieu.id_phim = phim.id_phim
    INNER JOIN phong ON lichchieu.id_phong = phong.id_phong";
    if($sortName != null and $sortBy != null){
        $sql .= " ORDER BY donhang.{$sortName} {$sortBy}";
    }
    if($offset >=0 and $limit >=0){
        $sql .= " LIMIT {$limit} OFFSET {$offset}";
    }
    $list = query($sql);
    return $list;
}

function DeleteDonHangByNguoiDung($id){
    $sql = "DELETE FROM donhang WHERE id_nguoidung = {$id}";
    execute($sql);
}

?>