<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="/duan1_nhom13/Controller/Admin/index.php?action=danhmuc">Trang Phim</a>
                </li>
            </ul><!-- /.breadcrumb -->
        </div>

        <h1 style="margin-left:50px; ">Thêm Phim:</h1>
        <div class="container">
            <?php
            if (isset($_GET['check']) && $_GET['check'] == "success") {
            ?>
                <div class="alert alert-success" role="alert">
                    Bạn đã thêm thành công phim
                </div>

            <?php
            }
            ?>
            <form action="/duan1_nhom13/Controller/Admin/SanPham/add.php" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">


                <div class="row" style="margin-bottom: 50px;">
                    <div class="col-sm-6" style="">
                        <div>
                            <label for="tensanpham" class="form-label">
                                <h3>Tên phim:</h3>
                            </label>
                            <input type="text" class="form-control" id="tensanpham" placeholder="Tên sản phẩm" name="tensanpham" required>
                        </div>

                        <div>
                            <label for="daodien" class="form-label">
                                <h3>Tên đạo diện:</h3>
                            </label>
                            <input type="text" class="form-control" id="daodien" placeholder="Tên đạo diện" name="daodien" required>
                        </div>

                        <div>
                            <label for="dienvien" class="form-label">
                                <h3>Tên diễn viên:</h3>
                            </label>
                            <input type="text" class="form-control" id="dienvien" placeholder="Tên diễn viên" name="dienvien" required>
                        </div>


                        <div>
                            <label for="thoiluongphim" class="form-label">
                                <h3>Thời lượng phim:</h3>
                            </label>
                            <input type="number" min="0" class="form-control" id="thoiluongphim" placeholder="Thời lượng phim:" name="thoiluongphim" required>
                        </div>
                        <div>
                            <label for="hinhanh" class="form-label">
                                <h3>Ảnh:</h3>
                            </label>
                            <input type="file" class="" id="hinhanh" name="hinhanh" required>
                        </div>

                        <div>
                            <label for="gia" class="form-label">
                                <h3>Giá:</h3>
                            </label>
                            <input type="number" min="0" class="form-control" id="gia" placeholder="giá" name="gia" required>
                        </div>

                        <div>
                            <div>
                                <label for="ngayphathanh" class="form-label">
                                    <h3>Ngày phát hành:</h3>
                                </label>
                                <input type="date" class="form-control" id="ngayphathanh" name="ngayphathanh" required>
                            </div>
                        </div>
                        <div>
                            <div>
                                <label for="ngayketthuc" class="form-label">
                                    <h3>Ngày kết thúc:</h3>
                                </label>
                                <input type="date" class="form-control" id="ngayketthuc" name="ngayketthuc" required>

                            </div>
                            <span style="color: red;" id="error_date"></span>
                        </div>
                    </div>
                    <div class="col-sm-6" style="">

                        <div>
                            <h3>Thể loại:</h3>
                            <?php
                            foreach ($listTheLoai as $theLoai) {

                            ?>
                                <input type="checkbox" id="<?php echo $theLoai['id_theloai'] ?>" name="theloai[]" value="<?php echo $theLoai['id_theloai'] ?>">
                                <label for="<?php echo $theLoai['id_theloai'] ?>"> <?php echo $theLoai['tentheloai'] ?></label><br>
                            <?php
                            }
                            ?>
                            <p class="error-message" id="error-message" style="color: red;"></p>
                        </div>

                        <div>
                            <h3>Danh mục:</h3>
                            <select name="danhmuc" id="">

                                <?php
                                foreach ($listDanhMuc as $danhMuc) {

                                ?>
                                    <option value="<?php echo $danhMuc['id_danhmuc'] ?>"><?php echo $danhMuc['tendanhmuc'] ?></option>
                                <?php
                                }
                                ?>

                            </select>
                        </div>

                    </div>

                    <div class="col-sm-12">
                        <div class="">
                            <label for="mota" class="form-label">
                                <h3>Mô tả phim:</h3>
                            </label>
                            <textarea class="form-control ip" rows="5" id="mota" name="mota"></textarea>
                        </div>

                    </div>

                    <div class="col-sm-12">
                        <button type="submit" class="form-control btn btn-primary">
                            Thêm
                        </button>
                    </div>



                </div>

            </form>

            <div class="row">
                <div class="col-sm-6">
                    <a class=" chuyentrang" href="/duan1_nhom13/Controller/Admin/index.php?action=danhsachphim&page=1&maxPageItem=5&sortName=id_phim&sortBy=desc">Xem danh sách sản phẩm</a>
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