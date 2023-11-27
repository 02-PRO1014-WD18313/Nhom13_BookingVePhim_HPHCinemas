<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="/Nhom13_BookingVePhim_HPHCinemas/Controller/Admin/index.php?action=phong">Trang phòng</a>
                </li>
            </ul><!-- /.breadcrumb -->
        </div>

        <h1 style="margin-left:50px; ">Chỉnh sửa phòng:</h1>
        <div class="container">
            <?php
            if (isset($_GET['check']) && $_GET['check'] == "success") {
            ?>
                <div class="alert alert-success" role="alert">
                    Bạn đã chỉnh sửa thành công
                </div>

            <?php
            } else if (isset($_GET['check']) && $_GET['check'] == "full") {
            ?>
                <div class="alert alert-danger" role="alert">
                    Số lượng ghế trong dãy vướt quá số lượng ghế của phòng
                </div>
            <?php
            }else if (isset($_GET['check']) && $_GET['check'] == "danger") {
            ?>
            <div class="alert alert-danger" role="alert">
                    Mã phòng đã tồn tại
                </div>
            <?php
            }
            ?>
            <form action="/Nhom13_BookingVePhim_HPHCinemas/Controller/Admin/Phong/update.php" method="post" enctype="multipart/form-data">


                <div class="row" style="">
                    <div class="col-sm-6" style="">
                        <label for="maphong" class="form-label">
                            <h3>Tên phòng:</h3>
                        </label>
                        <input type="text" class="form-control" id="maphong" placeholder="Mã phòng" value="<?php echo $phong[0]['maphong'] ?>" name="maphong" required>
                       
                    </div>
                </div>
                <div class="row">
                   
                    <input type="hidden" name="id_phong" value="<?php echo $phong[0]['id_phong'] ?>">
                    <div class="col-sm-6" style="margin:30px 0">

                        <button type="submit" class="form-control btn btn-primary">
                            Sửa
                        </button>

                    </div>
                </div>
            </form>

            <div class="row">
                <div class="col-sm-6">
                    <a class=" chuyentrang" href="/Nhom13_BookingVePhim_HPHCinemas/Controller/Admin/index.php?action=danhsachphong&page=1&maxPageItem=5&sortName=id_phong&sortBy=desc">Quay lại</a>
                </div>
            </div>

        </div>

    </div>
</div><!-- /.main-content -->