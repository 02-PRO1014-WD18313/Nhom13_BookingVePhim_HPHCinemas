<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="/Nhom13_BookingVePhim_HPHCinemas/Controller/Admin/index.php?action=theloai">Trang thể loại</a>
                </li>
            </ul><!-- /.breadcrumb -->
        </div>
        
        <h1 style="margin-left:50px; ">Thêm thể loại:</h1>
        <form action="/Nhom13_BookingVePhim_HPHCinemas/Controller/Admin/Theloai/add.php" method="post">
            <div class="row">
                <div class="col-6" style="margin:50px;">
                    <div class="mb-3 mt-3" style="width: 50%; margin-bottom:20px;">
                        <label for="tentheloai" class="form-label">Tên thể loại muốn thêm:</label>
                        <input type="text" class="form-control" id="tentheloai" placeholder="Tên thể loại" name="tentheloai" required>
                    </div>

                    <input type="submit" class="btn" name="btn" value="Thêm" />
                    <?php
                    if (isset($_GET['check']) && $_GET['check'] == "success") {
                    ?>
                        <div class="alert alert-success" role="alert">
                           Bạn đã thêm thành công thể loại phim
                        </div>

                    <?php
                    }
                    ?>
                       
                </div>
            </div>

        </form>
        <div class="row">
            <div class="col">
            <a class="danhsachdanhmuc" href="/Nhom13_BookingVePhim_HPHCinemas/Controller/Admin/index.php?action=danhsachtheloai&page=1&maxPageItem=2&sortName=id_theloai&sortBy=asc">Xem danh sách thể loại phim</a>           
            </div>
        
        </div>
        
    </div>
</div><!-- /.main-content -->