<div class="main-content">
    <div class="main-content-inner">
        
        <h1 style="margin-left:50px; ">Chỉnh Sửa Thể Loại:</h1>
        <form action="/duan1_nhom13/Controller/Admin/Theloai/update.php" method="post">
            <div class="row">
                <div class="col-6" style="margin:50px;">
                    <div class="mb-3 mt-3" style="width: 50%; margin-bottom:20px;">
                        <label for="tentheloai" class="form-label">Tên thể loại muốn sửa:</label>
                        <input type="text" class="form-control" id="tentheloai" value="<?php echo $danhMuc[0]['tentheloai'] ?>" placeholder="Tên the loai" name="tentheloai" required>
                        <input type="hidden" name="id_theloai" value="<?php echo $_GET['id_theloai']?>">
                    </div>

                    <input type="submit" class="btn" name="btn" value="Sửa" />
                    <?php
                    if (isset($_GET['check']) && $_GET['check'] == "success") {
                    ?>
                        <div class="alert alert-success" role="alert">
                           Bạn đã sửa thành công thể loại
                        </div>

                    <?php
                    }
                    ?>
                       
                </div>
            </div>

        </form>
        <div class="row">
            <div class="col">
            <a class="danhsachdanhmuc" href="/duan1_nhom13/Controller/Admin/index.php?action=danhsachtheloai&page=1&maxPageItem=2&sortName=id_theloai&sortBy=asc">Xem danh sách thể loại</a>           
            </div>
        
        </div>
        
    </div>
</div><!-- /.main-content -->