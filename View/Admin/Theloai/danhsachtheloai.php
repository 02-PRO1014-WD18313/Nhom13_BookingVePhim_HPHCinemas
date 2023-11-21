<div class="main-content">
    <div class="main-content-inner">
        

        <h1 style="margin-left:50px; ">Danh sách thể loại:</h1>
        <form action="/duan1_nhom13/Controller/Admin/index.php?" id="formSubmit" method="get">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        
                        <th>Id</th>
                        <th>Tên thể loại</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                    foreach ($listTheLoai as $theLoai) {
                        
                    ?>

                        <tr>
                         
                            <td><?php echo $theLoai['id_theloai'] ?></td>
                            <td><?php echo $theLoai['tentheloai'] ?></td>
                            <td><a onclick=" return confirm('Bạn có chắc chắn muốn xóa không')" href="/duan1_nhom13/Controller/Admin/Theloai/delete.php?id_theloai=<?php echo $theLoai['id_theloai'] ?>" class="btn btn-danger">Xóa</a> | 
                            <a  href="/duan1_nhom13/Controller/Admin/index.php?action=suatheloai&id_theloai=<?php echo $theLoai['id_theloai'] ?>" class="btn btn-warning">Sửa</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>

            </table>
            <div class="container-fluid">
                <div class="row">
                   <div class="col">
                    <a href="/duan1_nhom13/Controller/Admin/index.php?action=theloai" class="btn btn-primary">Quay lại</a>
                   </div>
                    <div class="col">
                        <ul class="pagination" id="pagination"></ul>
                        <input type="hidden" value="" id="page" name="page" />
                        <input type="hidden" value="" id="maxPageItem" name="maxPageItem" />
                        <input type="hidden" value="" id="sortName" name="sortName" />
                        <input type="hidden" value="" id="sortBy" name="sortBy" />
                        <input type="hidden" value="danhsachtheloai" id="action" name="action" />
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
                        $('#sortName').val('id_theloai');
					    $('#sortBy').val('asc');
                        $('#formSubmit').submit();
                    }
                }
            }).on('page', function(event, page) {
                console.info(page + ' (from event listening)');
            });
        });
    </script>