<div class="main-content">
    <div class="main-content-inner">
        
        <h1 style="margin-left:50px; ">Chỉnh Sửa Danh Mục:</h1>
        <form action="/duan1_nhom13/Controller/Admin/Danhmuc/update.php" method="post">
            <div class="row">
                <div class="col-6" style="margin:50px;">
                    <div class="mb-3 mt-3" style="width: 50%; margin-bottom:20px;">
                        <label for="tendanhmuc" class="form-label">Tên danh muc muốn sửa:</label>
                        <input type="text" class="form-control" id="tendanhmuc" value="<?php echo $danhMuc[0]['tendanhmuc'] ?>" placeholder="Tên danh mục" name="tendanhmuc" required>
                        <input type="hidden" name="id_danhmuc" value="<?php echo $_GET['id_danhmuc']?>">
                    </div>

                    <input type="submit" class="btn" name="btn" value="Sửa" />
                    <?php
                    if (isset($_GET['check']) && $_GET['check'] == "success") {
                    ?>
                        <div class="alert alert-success" role="alert">
                           Bạn đã sửa thành công danh mục
                        </div>

                    <?php
                    }
                    ?>
                       
                </div>
            </div>

        </form>
        <div class="row">
            <div class="col">
            <a class="danhsachdanhmuc" href="/duan1_nhom13/Controller/Admin/index.php?action=danhsachdanhmuc&page=1&maxPageItem=2&sortName=id_danhmuc&sortBy=asc">Xem danh sách danh mục</a>           
            </div>
        
        </div>
        
    </div>
</div><!-- /.main-content -->