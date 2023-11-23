<div class="main-content">
    <div class="main-content-inner">
        

        <h1 style="margin-left:50px; ">Chi tiết suất chiếu của phim:</h1>
        <form action="/duan1_nhom13/Controller/Admin/index.php?" id="formSubmit" method="get">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        
                        <th style="width: 5%;">ID</th>
                        <th style="width: 10%;">Ảnh</th>
                        <th>Tên phim</th>
                        <th>Phòng</th>
                        <th>Số dãy</th>
                        <th>Suất chiếu</th>
                        <th>Thao tác</th>

                    </tr>
                </thead>
                <tbody>
                    

                        <tr>
                         
                            <td><?php echo $lichChieu[0]['id_lichchieu'] ?></td>
                            <td><img src="/duan1_nhom13/Template/Admin/assets/img/<?php echo $lichChieu[0]['anh'] ?>" alt="" width="100%"></td>
                            <td><?php echo $lichChieu[0]['tenphim'] ?></td>
                            <td><?php echo $lichChieu[0]['maphong'] ?></td>
                            <td><?php echo $lichChieu[0]['soluongday'] ?></td>
                            <td><?php echo $lichChieu[0]['thoigianchieu'] ?></td>
                            <td><a href="/duan1_nhom13/Controller/Admin/Suatchieu/delete.php?id=<?php echo $lichChieu[0]['id_lichchieu'] ?>" onclick=" return confirm('Bạn có chắc chắn muốn xóa không')" class="btn btn-danger">Xóa</a></td>
                        </tr>
                    
                </tbody>

            </table>
            <div class="container-fluid">
                <div class="row">
                   <div class="col">
                    <a href="/duan1_nhom13/Controller/Admin/index.php?action=danhsachsuatchieu&page=1&maxPageItem=5&sortName=id_phim&sortBy=desc" class="btn btn-primary">Quay lại</a>
                   </div>
                    
                </div>
            </div>


        </form>


    </div>
</div><!-- /.main-content -->
