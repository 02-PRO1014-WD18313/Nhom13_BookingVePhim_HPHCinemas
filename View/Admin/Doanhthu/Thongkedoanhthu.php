<div class="main-content">
    <div class="main-content-inner">

        <h1 style="margin-left:50px; font-weight: 700; ">Doanh thu của rạp</h1>
        <form action="/Nhom13_BookingVePhim_HPHCinemas/Controller/Admin/index.php?" method="GET">
            <div class="container">
                <div class="row search ">
                    <div class="col-sm-6">
                        <div class="mb-3 mt-3" style="width: 70%; margin-bottom:20px;">
                            <label for="ngaybatdau" class="form-label">Nhập ngày bắt đầu</label>
                            <input type="date" class="form-control" id="ngaybatdau" value="<?php echo (!empty($_GET['ngaybatdau']) ? $_GET['ngaybatdau'] : "") ?>" placeholder="Nhập ngày bắt đầu" name="ngaybatdau" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3 mt-3" style="width: 70%; margin-bottom:20px;">
                            <label for="ngayketthuc" class="form-label">Nhập ngày kết thúc</label>
                            <input type="date" class="form-control" id="ngayketthuc" value="<?php echo (!empty($_GET['ngayketthuc']) ? $_GET['ngayketthuc'] : "") ?>" placeholder="Nhập ngày kết thúc" name="ngayketthuc" required>
                        </div>
                    </div>

                </div>
                <div class="row search">
                    <div class="col-sm-6">
                        <div class="mb-3 mt-3" style="width: 70%; margin-bottom:20px;">
                            <label for="phim" class="form-label">Chọn phim: </label>

                            <select name="phim" id="phim">
                                <option value="">Chọn tất cả</option>
                                <?php

                                foreach ($listPhim as $phim) {

                                ?>
                                    <option value="<?php echo $phim['id_phim'] ?>" <?php echo (!empty($_GET['phim']) &&$_GET['phim'] == $phim['id_phim'] ? "selected" : "") ?>><?php echo $phim['tenphim'] ?></option>
                                <?php

                                }

                                ?>


                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3 mt-3 button" style="width: 50%; margin-bottom:20px;">
                            <input type="hidden" name="action" value="thongkedoanhthu">
                            <button class=" btn btn-success">Xem doanh thu</button>
                        </div>
                    </div>
                </div>
            </div>


        </form>
        <div>

            <?php
            if (!empty($_GET['ngaybatdau']) && !empty($_GET['ngayketthuc'])) {
            ?>
                <table class="table table-bordered">
                    <thead>
                        <tr>

                            <th>STT</th>
                            <th>Thòi gian</th>
                            <th>Tiền</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $ngayBatDau = new DateTime($_GET['ngaybatdau']);
                        $ngayKetThuc = new DateTime($_GET['ngayketthuc']);
                        if ($_GET['phim'] == null) {
                            $tongtien = 0;
                            $stt = 0;
                            while ($ngayBatDau <= $ngayKetThuc) {

                                $ngay = $ngayBatDau->format("Y-m-d");
                                // echo $ngay;
                                $doanhthus =  FindDoanhThuByDate($ngay);
                                $tien = 0;
                                if ($doanhthus != null) {
                                    $stt++;
                                    foreach ($doanhthus as $doanhthu) {
                                        $tien += $doanhthu['tien'];
                                    }
                        ?>
                                    <tr>
                                        <td><?php echo $stt ?></td>
                                        <td><?php echo $ngay ?></td>
                                        <td><?php echo $tien ?> VNĐ</td>
                                        <td><a href="/Nhom13_BookingVePhim_HPHCinemas/Controller/Admin/index.php?action=chitietdoanhthu&ngaybatdau=<?php echo $_GET['ngaybatdau'] ?>&ngayketthuc=<?php echo $_GET['ngayketthuc'] ?>&phim=<?php echo $_GET['phim'] ?>&ngay=<?php echo $ngay ?>" class="btn btn-primary">Chi tiết</a></td>
                                    </tr>

                            <?php
                                    $tongtien += $tien;
                                }
                                $ngayBatDau->modify('+1 day');
                            }
                            ?>
                    </tbody>
                </table>
                <h2>Tổng tiền: <span style="color: red;"><?php echo $tongtien ?> VNĐ </span> </h2>

                <?php
                        } else {
                            $tongtien = 0;
                            $stt = 0;
                            while ($ngayBatDau <= $ngayKetThuc) {

                                $ngay = $ngayBatDau->format("Y-m-d");
                                // echo $ngay;
                                $doanhthus =  FindDoanhThuByDateAndPhim($ngay, $_GET['phim']);
                                $tien = 0;
                                if ($doanhthus != null) {
                                    $stt++;
                                    foreach ($doanhthus as $doanhthu) {
                                        $tien += $doanhthu['tien'];
                                    }
                ?>

                        <tr>
                            <td><?php echo $stt ?></td>
                            <td><?php echo $ngay ?></td>
                            <td><?php echo $tien ?> VNĐ</td>
                            <td><a href="/Nhom13_BookingVePhim_HPHCinemas/Controller/Admin/index.php?action=chitietdoanhthu&ngaybatdau=<?php echo $_GET['ngaybatdau'] ?>&ngayketthuc=<?php echo $_GET['ngayketthuc'] ?>&phim=<?php echo $_GET['phim'] ?>&ngay=<?php echo $ngay ?>" class="btn btn-primary">Chi tiết</a></td>
                        </tr>
                <?php
                                    $tongtien += $tien;
                                }
                                $ngayBatDau->modify('+1 day');
                            }
                ?>
                </tbody>
                </table>
                <h2>Tổng tiền: <span style="color: red;"><?php echo $tongtien ?> VNĐ </span> </h2>

        <?php
                        }
                    }
        ?>




        </div>



    </div>
</div><!-- /.main-content -->
<style>
    form {
        border-bottom: 3px solid black;
    }

    .search {
        display: flex;
        align-items: center;
        margin: 50px 0;

    }

    .button {

        justify-content: center;

    }

    label {
        font-size: 25px;
        font-weight: 500;
    }
</style>