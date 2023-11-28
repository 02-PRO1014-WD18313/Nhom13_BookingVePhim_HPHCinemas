<section class="py-5">
    <div class="container">
        <h1 style="margin-left:50px; ">Chi tiết phim:</h1>
        <div class="row " style="margin: 50px 0;">
            <div class="col-md-4"><img src="/Nhom13_BookingVePhim_HPHCinemas/Template/Admin/assets/img/<?php echo $phim[0]['anh'] ?>" alt="..." style="width: 100%;" /></div>
            <div class="col-md-8">
                <h1 class=""><?php echo $phim[0]['tenphim'] ?></h1>

                <p class="lead"><?php echo $phim[0]['mota'] ?></p>
                <h5>Đạo diễn: <?php echo $phim[0]['daodien'] ?></h5>
                <h5>Diễn viên: <?php echo $phim[0]['dienvien'] ?></h5>
                <h5>Thời lượng phim: <?php echo $phim[0]['thoiluongphim'] ?> phút</h5>
                <h5>Ngày khởi chiếu: <?php echo $phim[0]['ngayphathanh'] ?></h5>
                <h5>Ngày kết thúc: <?php echo $phim[0]['ngayketthuc'] ?></h5>

                <h5>Thể loại:
                    <?php
                    $count = 0;
                    for ($i = 0; $i < sizeof($listTheLoaiBySanPham); $i++) {
                        echo $listTheLoaiBySanPham[$i]['tentheloai'];
                        if (++$count != sizeof($listTheLoaiBySanPham)) {
                            echo " , ";
                        }
                    }
                    ?>
                </h5>
                <h5>Danh mục: <?php echo $phim[0]['tendanhmuc'] ?></h5>

            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="/Nhom13_BookingVePhim_HPHCinemas/Controller/Admin/index.php?action=danhsachphim&page=1&maxPageItem=5&sortName=id_phim&sortBy=desc" class="btn btn-primary">Quay lại</a>
            </div>
        </div>
        <div class="row">
            <h1>Bình luận của người dùng</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>

                        <th style="width: 5%;">Stt</th>
                        <th style="width: 10%;">Họ và tên</th>
                        <th>Nội dung</th>
                        <th>Thời gian bình luận</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $stt = 0;
                    foreach ($listBinhLuan as $binhLuan) {
                        $stt++;
                    ?>

                        <tr>

                            <td><?php echo $stt ?></td>
                            <td><?php echo $binhLuan['hovaten'] ?></td>
                            <td><?php echo $binhLuan['noidung'] ?></td>
                            <td><?php echo $binhLuan['ngayviet'] ?></td>
                            <td><a onclick=" return confirm('Bạn có chắc chắn muốn xóa không')" href="/Nhom13_BookingVePhim_HPHCinemas/Controller/Admin/Sanpham/delete.php?id_phim=<?php echo $phim['id_phim'] ?>" class="btn btn-danger">Xóa</a></td>

                        </tr>
                    <?php
                    }
                    ?>
                </tbody>

            </table>
        </div>
    </div>
</section>