<div class="main-content">
    <div class="main-content-inner">

        <h1 style="margin-left:50px; font-weight: 700; ">Doanh thu của rạp</h1>
        <form action="/Nhom13_BookingVePhim_HPHCinemas/Controller/Admin/index.php?" method="GET">
            <div class="container">
                <div class="row search ">
                    <div class="col-sm-6">
                    <label for="phim" class="form-label">Chọn thời gian thống kê: </label>
                        <select name="ngay" id="">
                            <option value="7" <?php echo (!empty($_GET['ngay']) &&$_GET['ngay'] == 7 ? "selected" : "") ?>>7 Ngày trước</option>
                            <option value="15" <?php echo (!empty($_GET['ngay']) &&$_GET['ngay'] == 15 ? "selected" : "") ?>>15 Ngày trước</option>
                            <option value="30" <?php echo (!empty($_GET['ngay']) &&$_GET['ngay'] == 30 ? "selected" : "") ?>>30 Ngày trước</option>
                            <option value="60" <?php echo (!empty($_GET['ngay']) &&$_GET['ngay'] == 60 ? "selected" : "") ?>>60 Ngày trước</option>
                            <option value="90" <?php echo (!empty($_GET['ngay']) &&$_GET['ngay'] == 90 ? "selected" : "") ?>>90 Ngày trước</option>
                        </select>
                    
                    </div>
                    <div class="col-sm-6">
                   
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
                <div class="row search">
                    <div class="col-sm-6">
                       
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
            if (!empty($_GET['ngay'])) {
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
                        $ngayHienTai = new DateTime();
                        $ngay = $ngayHienTai;
                        $ngayKetThuc = $_GET['ngay'];
                        
                        if ($_GET['phim'] == null) {
                            $tongtien = 0;
                            $stt = 0;
                            for ($i = 1; $i <= $ngayKetThuc; $i++ ) {
                                $ngayBatDau = $ngay->format('Y-m-d');
                                // echo $ngayBatDau;
                                // echo $ngay;
                                $doanhthus =  FindDoanhThuByDate($ngayBatDau);
                                // print_r($doanhthus);
                                $tien = 0;
                                if ($doanhthus != null) {
                                    $stt++;
                                    foreach ($doanhthus as $doanhthu) {
                                        $tien += $doanhthu['tien'];
                                    }
                        ?>
                                    <tr>
                                        <td><?php echo $stt ?></td>
                                        <td><?php echo $ngayBatDau ?></td>
                                        <td><?php echo number_format($tien, 0, '', '.') ?> VNĐ</td>
                                        <td><a href="/Nhom13_BookingVePhim_HPHCinemas/Controller/Admin/index.php?action=chitietdoanhthu&ngayketthuc=<?php echo $_GET['ngay'] ?>&phim=<?php echo $_GET['phim'] ?>&ngay=<?php echo $ngayBatDau ?>" class="btn btn-primary">Chi tiết</a></td>
                                    </tr>

                            <?php
                                    $tongtien += $tien;
                                }
                                $ngayHienTai->modify('-1 day');
                            }
                            ?>
                    </tbody>
                </table>
                <h2>Tổng tiền: <span style="color: red;"><?php echo number_format($tongtien, 0, '', '.') ?> VNĐ </span> </h2>

                <?php
                        } else {
                            $tongtien = 0;
                            $stt = 0;
                            for ($i = 1; $i<=$ngayKetThuc; $i++ ) {
                                $ngayBatDau = $ngay->format('Y-m-d');
                                // $ngay = $ngayBatDau->format("Y-m-d");
                                // echo $ngay;
                                $doanhthus =  FindDoanhThuByDateAndPhim($ngayBatDau, $_GET['phim']);
                                $tien = 0;
                                if ($doanhthus != null) {
                                    $stt++;
                                    foreach ($doanhthus as $doanhthu) {
                                        $tien += $doanhthu['tien'];
                                    }
                ?>

                        <tr>
                            <td><?php echo $stt ?></td>
                            <td><?php echo $ngayBatDau ?></td>
                            <td><?php echo $tien ?> VNĐ</td>
                            <td><a href="/Nhom13_BookingVePhim_HPHCinemas/Controller/Admin/index.php?action=chitietdoanhthu&ngayketthuc=<?php echo $_GET['ngay'] ?>&phim=<?php echo $_GET['phim'] ?>&ngay=<?php echo $ngayBatDau ?>" class="btn btn-primary">Chi tiết</a></td>
                        </tr>
                <?php
                                    $tongtien += $tien;
                                }
                                $ngay->modify('-1 day');
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