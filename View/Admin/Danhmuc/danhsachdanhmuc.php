<div class="main-content">
    <div class="main-content-inner">
        

        <h1 style="margin-left:50px; ">Danh sách danh mục:</h1>
        <form action="/Nhom13_BookingVePhim_HPHCinemas/Controller/Admin/index.php?" id="formSubmit" method="get">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        
                        <th>Id</th>
                        <th>Tên danh mục</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                    foreach ($listDanhMuc as $danhMuc) {
                        
                    ?>

                        <tr>
                         
                            <td><?php echo $danhMuc['id_danhmuc'] ?></td>
                            <td><?php echo $danhMuc['tendanhmuc'] ?></td>
                            <td><a onclick=" return confirm('Bạn có chắc chắn muốn xóa không')" href="/Nhom13_BookingVePhim_HPHCinemas/Controller/Admin/Danhmuc/delete.php?id_danhmuc=<?php echo $danhMuc['id_danhmuc'] ?>" class="btn btn-danger">Xóa</a> | 
                            <a  href="/Nhom13_BookingVePhim_HPHCinemas/Controller/Admin/index.php?action=suadanhmuc&id_danhmuc=<?php echo $danhMuc['id_danhmuc'] ?>" class="btn btn-warning">Sửa</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>

            </table>
            <div class="container-fluid">
                <div class="row">
                   <div class="col">
                    <a href="/Nhom13_BookingVePhim_HPHCinemas/Controller/Admin/index.php?action=danhmuc" class="btn btn-primary">Quay lại</a>
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