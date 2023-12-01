<?php
function InsertDoanhThu($ngay, $tien){
    $sql = "INSERT INTO doanhthu(ngay, tien) VALUES ('{$ngay}',{$tien})";
    $id = inserted_id($sql);
    return $id;
}
function FindDoanhThuByDate($ngay){
    $sql = "SELECT * FROM doanhthu as d LEFT JOIN chitietdoanhthu as c ON d.id_doanhthu = c.id_doanhthu INNER JOIN phim as p ON c.id_phim = p.id_phim  WHERE DATE(d.ngay) = '{$ngay}' ";
    return query($sql);
}
function FindDoanhThuByDateAndPhim($ngay,$id){
    $sql = "SELECT * FROM doanhthu as d LEFT JOIN chitietdoanhthu as c ON d.id_doanhthu = c.id_doanhthu INNER JOIN phim as p ON c.id_phim = p.id_phim  WHERE DATE(d.ngay) = '{$ngay}' AND p.id_phim = {$id} ";
    return query($sql);
}

function DeleteDoanhThu($id){
    $sql = "DELETE FROM doanhthu WHERE id_doanhthu = {$id}";
    execute($sql);
}
?>