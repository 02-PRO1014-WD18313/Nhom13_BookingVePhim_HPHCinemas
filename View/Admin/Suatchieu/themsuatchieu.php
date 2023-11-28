<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="/Nhom13_BookingVePhim_HPHCinemas/Controller/Admin/index.php?action=suachieu">Trang Suất chiếu</a>
                </li>
            </ul><!-- /.breadcrumb -->
        </div>

        <h1 style="margin-left:50px; ">Thêm suất chiếu:</h1>
        <div class="container">
            <?php
            if (isset($_GET['check']) && $_GET['check'] == "success") {
            ?>
                <div class="alert alert-success" role="alert">
                    Bạn đã thêm suất chiếu thành công
                </div>

            <?php
            }
            ?>
            <form action="/Nhom13_BookingVePhim_HPHCinemas/Controller/Admin/SuatChieu/add.php" method="get" onsubmit="return validateForm()" enctype="multipart/form-data">


                <div class="row" style="margin-bottom: 50px;">
                    <div class="col-sm-6" style="">
                        <div>
                            <h1>Phim: <?php echo $_GET['tenphim'] ?></h1>


                        </div>

                        <div>
                            <h1>Phòng:</h1>
                            <select name="phong" id="">

                                <?php

                                for ($i = 0; $i < sizeof($listPhong); $i++) {

                                ?>
                                    <option value="<?php echo $listPhong[$i]['id_phong'] ?>"><?php echo $listPhong[$i]['maphong'] ?></option>
                                <?php

                                }

                                ?>


                            </select>
                        </div>


                    </div>
                    <div class="col-sm-6" style="">
                        <div>
                            <label for="">
                                <h1>Chọn giờ chiếu</h1>
                            </label>
                            <input type="time" name="thoigianchieu" required>
                        </div>
                        <div>
                            <h1>Suất chiếu của phim</h1>
                            <?php
                            $listLichChieu = FindLichChieuByPhim($_GET['id_phim']);
                                foreach($listLichChieu as $lichChieu){
                                    $thoigianchieu = new DateTime($lichChieu['thoigianchieu']);

                            ?>
                            <h3><?php echo $thoigianchieu->format("d-m-Y H:i") ?></h3>
                            <?php
                                }
                            ?>
                        </div>
                    </div>



                    <div class="col-sm-12">
                        <input type="hidden" name="id_phim" value="<?php echo $_GET['id_phim'] ?>">
                        <input type="hidden" name="tenphim" value="<?php echo $_GET['tenphim'] ?>">
                        <button type="submit" class="form-control btn btn-primary" style="margin-top: 30px;">
                            Thêm
                        </button>
                    </div>



                </div>

            </form>

            <div class="row">
                <div class="col-sm-6">
                    <a class=" chuyentrang" href="/Nhom13_BookingVePhim_HPHCinemas/Controller/Admin/index.php?action=danhsachsuatchieu&page=1&maxPageItem=5&sortName=id_phim&sortBy=desc">Xem danh sách suất chiếu</a>
                </div>
            </div>

        </div>

    </div>
</div><!-- /.main-content -->

<script>
    function validateForm() {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        var ngayPhatHanh = document.getElementById('ngayphathanh').value;
        var ngayKetThuc = document.getElementById('ngayketthuc').value;

        var checked = false;
        var dateObj1 = new Date(ngayPhatHanh);
        var dateObj2 = new Date(ngayKetThuc);
        console.log(ngayPhatHanh);
        console.log(ngayKetThuc);
        if (dateObj1 > dateObj2) {
            document.getElementById('error_date').innerText = 'Ngày phát hành lớn hơn ngày kết thúc.';
            console.log("hihi");
            return false;
        } else {
            console.log("hoho");
        }


        checkboxes.forEach(function(checkbox) {
            if (checkbox.checked) {
                checked = true;
            }
        });



        if (!checked) {
            document.getElementById('error-message').innerText = 'Vui lòng chọn ít nhất một ô thể loại.';
            return false;
        } else {
            document.getElementById('error-message').innerText = '';
            // document.getElementById('myForm').submit();
            return true;
        }
    }
</script>