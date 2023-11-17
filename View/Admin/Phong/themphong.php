<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="/duan1_nhom13/Controller/Admin/index.php?action=phong">Trang phòng</a>
                </li>
            </ul><!-- /.breadcrumb -->
        </div>

        <h1 style="margin-left:50px; ">Thêm phòng:</h1>
        <div class="container">
            <?php
            if (isset($_GET['check']) && $_GET['check'] == "success") {
            ?>
                <div class="alert alert-success" role="alert">
                    Bạn đã thêm thành công phòng
                </div>

            <?php
            } else if (isset($_GET['check']) && $_GET['check'] == "full") {
            ?>
                <div class="alert alert-danger" role="alert">
                    Số lượng ghế trong dãy vướt quá số lượng ghế của phòng
                </div>
            <?php
            }else if (isset($_GET['check']) && $_GET['check'] == "danger") {
            ?>
            <div class="alert alert-danger" role="alert">
                    Mã phòng đã tồn tại
                </div>
            <?php
            }
            ?>
            <form action="/duan1_nhom13/Controller/Admin/Phong/add.php" method="post" enctype="multipart/form-data">


                <div class="row" style="">
                    <div class="col-sm-6" style="">
                        <label for="maphong" class="form-label">
                            <h3>Tên phòng:</h3>
                        </label>
                        <input type="text" class="form-control" id="maphong" placeholder="Mã phòng" name="maphong" required>

                        <div>
                            <label for="soluongghe" class="form-label">
                                <h3>Số lượng ghế:</h3>
                            </label>
                            <input type="number" min="0" max="100" class="form-control" id="soluongghe" placeholder="Số lượng ghế:" name="soluongghe" required>
                        </div>



                        <div>
                            <h3>Trạng thái phòng:</h3>
                            <select name="trangthaiphong" id="">

                                <?php
                                foreach ($listTrangThai as $trangThai) {

                                ?>
                                    <option value="<?php echo $trangThai['id_trangthaiphong'] ?>"><?php echo $trangThai['tentrangthaiphong'] ?></option>
                                <?php
                                }
                                ?>

                            </select>
                        </div>
                    </div>






                </div>
                <div class="row">
                    <?php
                    $char = 65;
                    $length = 10;
                    $seat = 10;
                    for ($i = 0; $i < $length; $i++) {

                    ?>

                        <div class="col-sm-1" style="">
                            <h3>Dãy <?php echo chr($char) ?></h3>
                            <select name="<?php echo chr($char) ?>" id="">
                                <?php
                                for ($j = 1; $j <= $seat; $j++) {
                                ?>
                                    <option value="<?php echo $j ?>"><?php echo $j ?> ghế</option>
                                <?php
                                }
                                ?>
                            </select>

                        </div>
                    <?php
                        $char++;
                    }
                    ?>
                    <div class="col-sm-6" style="margin:30px 0">

                        <button type="submit" class="form-control btn btn-primary">
                            Thêm
                        </button>

                    </div>
                </div>
            </form>

            <div class="row">
                <div class="col-sm-6">
                    <a class=" chuyentrang" href="/duan1_nhom13/Controller/Admin/index.php?action=danhsachphong">Xem danh sách phòng</a>
                </div>
            </div>

        </div>

    </div>
</div><!-- /.main-content -->