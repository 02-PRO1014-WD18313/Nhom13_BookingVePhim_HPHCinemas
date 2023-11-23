<div class="main-content">
    <div class="main-content-inner">
        

        <h1 style="margin-left:50px; ">Danh sách suất chiếu:</h1>
        <form action="/duan1_nhom13/Controller/Admin/index.php?" id="formSubmit" method="get">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        
                        <th style="width: 5%;">Stt</th>
                        <th style="width: 10%;">Ảnh</th>
                        <th>Tên phim</th>
                        <th>Suất chiếu</th>

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
                            <td><img src="/duan1_nhom13/Template/Admin/assets/img/<?php echo $phim['anh'] ?>" alt="" width="100%"></td>
                            <td><?php echo $phim['tenphim'] ?></td>
                            <td>
                            <?php
                            $lichChieu = FindLichChieuByPhim($phim['id_phim']);
                            for($i = 0; $i < sizeof($lichChieu); $i ++){

                            
                            ?>
                            <div>
                                <a href="/duan1_nhom13/Controller/Admin/index.php?action=chitietsuatchieu&id=<?php echo $lichChieu[$i]['id_lichchieu'] ?>" class="btn btn-primary" ><?php echo $lichChieu[$i]['thoigianchieu'] ?></a>
                            </div>
                                

                            <?php
                                }
                            ?></td>
                            
                            
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>

            </table>
            <div class="container-fluid">
                <div class="row">
                   <div class="col">
                    <a href="/duan1_nhom13/Controller/Admin/index.php?action=suatchieu" class="btn btn-primary">Quay lại</a>
                   </div>
                    <div class="col">
                        <ul class="pagination" id="pagination"></ul>
                        <input type="hidden" value="" id="page" name="page" />
                        <input type="hidden" value="" id="maxPageItem" name="maxPageItem" />
                        <input type="hidden" value="" id="sortName" name="sortName" />
                        <input type="hidden" value="" id="sortBy" name="sortBy" />
                        <input type="hidden" value="danhsachsuatchieu" id="action" name="action" />
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