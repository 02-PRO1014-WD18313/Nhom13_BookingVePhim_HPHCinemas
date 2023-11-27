<?php
function InsertChiTietDoanhThu($id_doanhthu, $id_phim){
    $sql = "INSERT INTO chitietdoanhthu(id_doanhthu, id_phim) VALUES ({$id_doanhthu},{$id_phim})";
    return execute($sql);
}
function DeleteChiTietDoanhThu($id){
    $sql = "DELETE FROM chitietdoanhthu WHERE id_doanhthu = {$id}";
    execute($sql);
}
?>