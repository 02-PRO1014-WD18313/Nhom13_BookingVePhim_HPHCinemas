<div class="container">
    <h1 style="margin-left:50px; ">Chi tiết phim:</h1>
    <div class="row"  style="margin: 50px 0;">
        <div class="div">
            <h3>Thông tin phòng :</h3>
            <p>Mã phòng: <?php echo $phong[0]['maphong'] ?></p>
            <p>Số lượng ghế: <?php echo $phong[0]['soluongghe'] ?></p>
            <p>Số lượng dãy: <?php echo $phong[0]['soluongday'] ?></p>

        </div>
    </div>
    <div class="row " style="margin: 50px 0;">
        <div class="col-sm-12" style="background-color: #ccc; margin-bottom: 50px;">
            <h3 style="text-align: center;">Màn hình</h3>
        </div>
        <?php
        foreach ($listDayGhe as $dayGhe) {
        ?>
            <div class="row" style="margin: 30px 0;">
                <div class="col-sm-2" style="text-align: center ;height:30px; ">
                    <p style="background-color: #ccc; padding: 10px;">
                        <i class="fa fa-user-o" aria-hidden="true"></i>Day ghe <?php echo $dayGhe['maday'] ?>
                    </p>
                </div>
                <?php
                $listGhe =  SelectGheByDayGhe($dayGhe['id_dayghe']);
                foreach ($listGhe as $ghe) {
                ?>
                    <?php
                    if ($ghe['trangthaighe'] == 1) {
                    ?>

                        <div class="col-sm-1" style="text-align: center ;height:30px;">
                            <p style="background-color: #ccc; padding: 10px;"><?php echo $ghe['maghe'] ?></p>
                        </div>
                    <?php
                    } else if ($ghe['trangthaighe'] == 2) {

                    ?>
                        <div class="col-sm-1" style="text-align: center ;height:30px;">
                            <p style="background-color: red; padding: 10px; color: white;"><?php echo $ghe['maghe'] ?></p>
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class="col-sm-1" style="text-align: center ;height:30px;">
                            <p style="background-color: blue; padding: 10px; color: white;"><?php echo $ghe['maghe'] ?></p>
                        </div>

                    <?php
                    }
                    ?>
                <?php
                }
                ?>
            </div>
        <?php
        }
        ?>
    </div>
    <div class="row">
        <div class="col">
            <a href="/duan1_nhom13/Controller/Admin/index.php?action=danhsachphong&page=1&maxPageItem=5&sortName=id_phong&sortBy=desc" class="btn btn-primary">Quay lại</a>
        </div>
    </div>
</div>