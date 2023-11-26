<div class="main-content">
    <div class="main-content-inner">
        

        <h1 style="margin-left:50px; ">Danh sách phim:</h1>
        <form action="/Nhom13_BookingVePhim_HPHCinemas/Controller/Admin/index.php?" id="formSubmit" method="get">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        
                        <th style="width: 5%;">Stt</th>
                        <th style="width: 10%;">Ảnh</th>
                        <th>Tên phim</th>
                        <th>Thời lượng phim</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $stt = 0;
                    foreach ($listPhim as $phim) {
                        $stt++;
                    ?>

                        <tr>
                         
                            <td><?php echo $stt ?></td>
                            <td><img src="/Nhom13_BookingVePhim_HPHCinemas/Template/Admin/assets/img/<?php echo $phim['anh'] ?>" alt="" width="100%"></td>
                            <td><?php echo $phim['tenphim'] ?></td>
                            <td><?php echo $phim['thoiluongphim'] ?> phút</td>
                            <td><a onclick=" return confirm('Bạn có chắc chắn muốn xóa không')" href="/Nhom13_BookingVePhim_HPHCinemas/Controller/Admin/Sanpham/delete.php?id_phim=<?php echo $phim['id_phim'] ?>" class="btn btn-danger">Xóa</a> | 
                            <a  href="/Nhom13_BookingVePhim_HPHCinemas/Controller/Admin/index.php?action=chinhsuaphim&id_phim=<?php echo $phim['id_phim'] ?>" class="btn btn-warning">Sửa</a> | 
                            <a href="/Nhom13_BookingVePhim_HPHCinemas/Controller/Admin/index.php?action=chitietphim&id_phim=<?php echo $phim['id_phim'] ?>" class="btn btn-primary">Chi tiết</a></td> 
                            
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>

            </table>
            <div class="container-fluid">
                <div class="row">
                   <div class="col">
                    <a href="/Nhom13_BookingVePhim_HPHCinemas/Controller/Admin/index.php?action=sanpham" class="btn btn-primary">Quay lại</a>
                   </div>
                    <div class="col">
                        <ul class="pagination" id="pagination"></ul>
                        <input type="hidden" value="" id="page" name="page" />
                        <input type="hidden" value="" id="maxPageItem" name="maxPageItem" />
                        <input type="hidden" value="" id="sortName" name="sortName" />
                        <input type="hidden" value="" id="sortBy" name="sortBy" />
                        <input type="hidden" value="danhsachphim" id="action" name="action" />
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
                        $('#sortName').val('id_phim');
					    $('#sortBy').val('desc');
                        $('#formSubmit').submit();
                    }
                }
            }).on('page', function(event, page) {
                console.info(page + ' (from event listening)');
            });
        });
    </script>