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

        <h1 style="margin-left:50px; ">Thêm phòng:</h1>
        <div class="container">
            <?php
            if (isset($_GET['check']) && $_GET['check'] == "success") {
            ?>
                <div class="alert alert-success" role="alert">
                    Bạn đã thêm thành công phòng
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
            <form action="/Nhom13_BookingVePhim_HPHCinemas/Controller/Admin/Phong/add.php" method="post" enctype="multipart/form-data">


                <div class="row" style="">
                    <div class="col-sm-6" style="">
                        <label for="maphong" class="form-label">
                            <h3>Tên phòng:</h3>
                        </label>
                        <input type="text" class="form-control" id="maphong" placeholder="Mã phòng" name="maphong" required>

                        <!-- <div>
                            <label for="soluongghe" class="form-label">
                                <h3>Số lượng ghế:</h3>
                            </label>
                            <input type="number" min="0" max="100" class="form-control" id="soluongghe" placeholder="Số lượng ghế:" name="soluongghe" required>
                        </div> -->



                        
                    </div>






                </div>
                <div class="row">
                    
                    <div class="col-sm-6" style="margin:30px 0">

                        <button type="submit" class="form-control btn btn-primary">
                            Thêm
                        </button>

                    </div>
                </div>
            </form>

            <div class="row">
                <div class="col-sm-6">
                    <a class=" chuyentrang" href="/Nhom13_BookingVePhim_HPHCinemas/Controller/Admin/index.php?action=danhsachphong&page=1&maxPageItem=5&sortName=id_phong&sortBy=desc">Xem danh sách phòng</a>
                </div>
            </div>

        </div>

    </div>
</div><!-- /.main-content -->