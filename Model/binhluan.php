<?php
function InsertBinhLuan($id_nguoidung, $id_phim, $noidung, $ngayviet){
    $sql = "INSERT INTO binhluan(id_nguoidung, id_phim, noidung, ngayviet) VALUES ({$id_nguoidung}, {$id_phim}, '{$noidung}','{$ngayviet}')";
    execute($sql);
}

function FindBinhLuanByPhim($id_phim){
    $sql = "SELECT * FROM binhluan as b INNER JOIN nguoidung as n ON b.id_nguoidung = n.id_nguoidung  WHERE b.id_phim = {$id_phim}";
    return query($sql);
}

function DeleteBinhLuanByUser($id_danhgia){
    $sql = "DELETE FROM binhluan WHERE id_danhgia = {$id_danhgia}";
    execute($sql);
}

?>