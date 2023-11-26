<div class="main-content">
    <div class="main-content-inner">
        

        <h1 style="margin-left:50px; ">Danh sách người dùng:</h1>
        <form action="/Nhom13_BookingVePhim_HPHCinemas/Controller/Admin/index.php?" id="formSubmit" method="get">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        
                        <th style="width: 5%;">Stt</th>
                        <th style="width: 10%;">Họ và tên</th>
                        <th>Email</th>
                        <th>Tên đăng nhập</th>
                        <th>Mật khẩu</th>
                        <th>Vai trò</th>
                        <th>Thao tác</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                        $stt = 0;
                    foreach ($listNguoiDung as $nguoiDung) {
                        $stt++;
                    ?>

                        <tr>
                         
                            <td><?php echo $stt ?></td>
                            <td><?php echo $nguoiDung['hovaten'] ?></td>
                            <td><?php echo $nguoiDung['email'] ?></td>
                            <td><?php echo $nguoiDung['tendangnhap'] ?></td>
                            <td><?php echo $nguoiDung['matkhau'] ?></td>
                            <td><?php echo $nguoiDung['tenvaitro'] ?></td>
                            <td><a href="/Nhom13_BookingVePhim_HPHCinemas/Controller/Admin/Taikhoan/delete.php?id_nguoidung=<?php echo $nguoiDung['id_nguoidung'] ?>"  onclick=" return confirm('Bạn có chắc chắn muốn xóa không')" class="btn btn-danger">Xóa</a></td>
                           
                            
                            
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>

            </table>
            <div class="container-fluid">
                <div class="row">
                   
                    <div class="col">
                        <ul class="pagination" id="pagination"></ul>
                        <input type="hidden" value="" id="page" name="page" />
                        <input type="hidden" value="" id="maxPageItem" name="maxPageItem" />
                        <input type="hidden" value="" id="sortName" name="sortName" />
                        <input type="hidden" value="" id="sortBy" name="sortBy" />
                        <input type="hidden" value="quanlytaikhoann" id="action" name="action" />
                    </div>

                </div>
            </div>


        </form>


    </div>
</div><!-- /.main-content -->
<script>
        var totalPage = <?php echo $totalPage ?>;
        var currentPage = <?php echo $page ?>;
        var limit = 5;
        $(function() {
            window.pagObj = $('#pagination').twbsPagination({
                totalPages: totalPage, // so luong page
                visiblePages: 5, // so nut hien tren màn hinh
                startPage: currentPage, // page bat dau
                onPageClick: function(event, page) {
                    if (currentPage != page) {
                        $('#maxPageItem').val(parseInt(limit));
                        $('#page').val(page);
                        $('#sortName').val('id_nguoidung');
					    $('#sortBy').val('desc');
                        $('#formSubmit').submit();
                    }
                }
            }).on('page', function(event, page) {
                console.info(page + ' (from event listening)');
            });
        });
    </script>