<div class="main-content">
    <div class="main-content-inner">
        

        <h1 style="margin-left:50px; ">Chi tiết doanh thu:</h1>
        <form action="/Nhom13_BookingVePhim_HPHCinemas/Controller/Admin/index.php?" id="formSubmit" method="get">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        
                        <th>STT</th>
                        <th>Tên phim</th>
                        <th>Thời gian</th>
                        <th>Tiền</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $stt = 0;
                    $tongtien = 0;
                    foreach ($listDoanhThu as $doanhThu) {
                        $stt++;
                        $tongtien += $doanhThu['tien'];
                    ?>

                        <tr>
                         
                            <td><?php echo $stt ?></td>
                            <td><?php echo $doanhThu['tenphim'] ?></td>
                            <td><?php echo $doanhThu['ngay'] ?></td>
                            <td><?php echo  number_format($doanhThu['tien'], 0, '', '.') ?>  VNĐ</td>
                         
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>

            </table>
            <h2>Tổng tiền: <span style="color: red;"><?php echo number_format($tongtien, 0, '', '.')  ?> VNĐ</span></h2>
            <div class="container-fluid">
                <div class="row">
                   <div class="col">
                    <a href="/Nhom13_BookingVePhim_HPHCinemas/Controller/Admin/index.php?action=thongkedoanhthu&ngay=<?php echo $_GET['ngayketthuc'] ?>&phim=<?php echo $_GET['phim'] ?>" class="btn btn-primary">Quay lại</a>
                   </div>
                    <div class="col">
                        <ul class="pagination" id="pagination"></ul>
                        <input type="hidden" value="" id="page" name="page" />
                        <input type="hidden" value="" id="maxPageItem" name="maxPageItem" />
                        <input type="hidden" value="" id="sortName" name="sortName" />
                        <input type="hidden" value="" id="sortBy" name="sortBy" />
                        <input type="hidden" value="danhsachdanhmuc" id="action" name="action" />
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
                        $('#sortName').val('id_danhmuc');
					    $('#sortBy').val('asc');
                        $('#formSubmit').submit();
                    }
                }
            }).on('page', function(event, page) {
                console.info(page + ' (from event listening)');
            });
        });
    </script>