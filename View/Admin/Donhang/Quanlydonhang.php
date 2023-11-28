<div class="main-content">
    <div class="main-content-inner">
        

        <h1 style="margin-left:50px; ">Danh sách đơn hàng:</h1>
        <form action="/Nhom13_BookingVePhim_HPHCinemas/Controller/Admin/index.php?" id="formSubmit" method="get">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        
                        <th>Id</th>
                        <th>Mã đơn hàng</th>
                        <th>Họ và tên</th>
                        <th>Tên phim</th>
                        <th>Thời gian chiếu</th>
                        <th>Phòng</th>
                        <th>Mã ghế</th>
                        <th>Tổng tiền</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                    foreach ($listDonHang as $donHang) {
                        
                    ?>

                        <tr>
                         
                            <td><?php echo $donHang['id_donhang'] ?></td>
                            <td><?php echo $donHang['madonhang'] ?></td>
                            <td><?php echo $donHang['hovaten'] ?></td>
                            <td><?php echo $donHang['tenphim'] ?></td>
                            <td><?php echo $donHang['thoigianchieu'] ?></td>
                            <td><?php echo $donHang['maphong'] ?></td>
                            <td><?php echo $donHang['soghedadat'] ?></td>
                            <td><?php echo $donHang['tongtien'] ?> VNĐ</td>
                           
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
                        <input type="hidden" value="quanlydonhang" id="action" name="action" />
                    </div>

                </div>
            </div>


        </form>


    </div>
</div><!-- /.main-content -->
<script>
        var totalPage = <?php echo $totalPage ?>;
        var currentPage = <?php echo $page ?>;
        var limit = 2;
        $(function() {
            window.pagObj = $('#pagination').twbsPagination({
                totalPages: totalPage, // so luong page
                visiblePages: 5, // so nut hien tren màn hinh
                startPage: currentPage, // page bat dau
                onPageClick: function(event, page) {
                    if (currentPage != page) {
                        $('#maxPageItem').val(parseInt(limit));
                        $('#page').val(page);
                        $('#sortName').val('id_donhang');
					    $('#sortBy').val('desc');
                        $('#formSubmit').submit();
                    }
                }
            }).on('page', function(event, page) {
                console.info(page + ' (from event listening)');
            });
        });
    </script>