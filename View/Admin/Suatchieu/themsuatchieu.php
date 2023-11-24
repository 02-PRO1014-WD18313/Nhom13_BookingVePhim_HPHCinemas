<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="/duan1_nhom13/Controller/Admin/index.php?action=suachieu">Trang Suất chiếu</a>
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
            <form action="/duan1_nhom13/Controller/Admin/SuatChieu/add.php" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">


                <div class="row" style="margin-bottom: 50px;">
                    <div class="col-sm-6" style="">
                        <div>
                        <h3>Phim:</h3>
                            <select name="phim" id="">

                                <?php
                                $check = false;
                                for ($i=0; $i < sizeof($listPhim) ; $i ++){    
                                    if($listPhim[$i]['id_lichchieu'] == null){
                                        $check = true;
                                ?>
                                    <option value="<?php echo $listPhim[$i]['id_phim'] ?>"><?php echo $listPhim[$i]['tenphim'] ?></option>
                                <?php
                                    }
                                }
                                if($check){
                                ?>
                                <p>Hết phim</p>
                                <?php
                                }
                                ?>

                            </select>
                        </div>

                        <div>
                        <h3>Phòng:</h3>
                            <select name="phong" id="">

                                <?php
                                $check = false;
                                for ($i=0; $i < sizeof($listPhong) ; $i ++){    

                                ?>
                                    <option value="<?php echo $listPhong[$i]['id_phong'] ?>"><?php echo $listPhong[$i]['maphong'] ?></option>
                                <?php
                                    
                                }
                                if($check){
                                ?>
                                <p>Hết phòng</p>
                                <?php
                                }
                                ?>

                            </select>
                        </div>

                        
                    </div>
                    <div class="col-sm-6" style="">
                        <label for=""><h3>Chọn giờ chiếu</h3></label>
                        <input type="time" name="thoigianchieu">
                    </div>

                    

                    <div class="col-sm-12">
                    
                        <button type="submit" class="form-control btn btn-primary" style="margin-top: 30px;">
                            Thêm
                        </button>
                    </div>



                </div>

            </form>

            <div class="row">
                <div class="col-sm-6">
                    <a class=" chuyentrang" href="/duan1_nhom13/Controller/Admin/index.php?action=danhsachsuatchieu&page=1&maxPageItem=5&sortName=id_phim&sortBy=desc">Xem danh sách suất chiếu</a>
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
        if(dateObj1 > dateObj2){
            document.getElementById('error_date').innerText = 'Ngày phát hành lớn hơn ngày kết thúc.';
            console.log("hihi");
            return false;
        }else{
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