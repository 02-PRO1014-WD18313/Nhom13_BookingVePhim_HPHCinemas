<div class="main-content">
    <div class="main-content-inner">

        <h1 style="margin-left:50px; ">Thêm Danh Mục:</h1>
        <form action="/Nhom13_BookingVePhim_HPHCinemas/Controller/Admin/Danhmuc/add.php" method="post">
            <div class="row">
                <div class="col-6" style="margin:50px;">
                    <div class="mb-3 mt-3" style="width: 50%; margin-bottom:20px;">
                        <label for="tendanhmuc" class="form-label">Tên danh muc muốn thêm:</label>
                        <input type="text" class="form-control" id="tendanhmuc" placeholder="Tên danh mục" name="tendanhmuc" required>
                    </div>

                    <input type="submit" class="btn" name="btn" value="Thêm" />
                    <?php
                    if (isset($_GET['check']) && $_GET['check'] == "success") {
                    ?>
                        <div class="alert alert-success" role="alert">
                           Bạn đã thêm thành công danh mục
                        </div>

                    <?php
                    }
                    ?>
                       
                </div>
            </div>

        </form>
        <div class="row">
            <div class="col">
            <a class="danhsachdanhmuc" href="/Nhom13_BookingVePhim_HPHCinemas/Controller/Admin/index.php?action=danhsachdanhmuc&page=1&maxPageItem=2&sortName=id_danhmuc&sortBy=asc">Xem danh sách danh mục</a>           
            </div>
        
        </div>
        
    </div>
</div><!-- /.main-content -->