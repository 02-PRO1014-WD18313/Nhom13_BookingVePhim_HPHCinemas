<div class="container">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/duan1_nhom13/Controller/User/index.php?">Home</a></li>
            <li class="breadcrumb-item"><a href="/duan1_nhom13/Controller/User/index.php?action=chitietphim&id_phim=<?php echo $information[0]['id_phim'] ?>"><?php echo $information[0]['tenphim'] ?></a></li>
            <li class="breadcrumb-item active" aria-current="page">Trang chi tiết</li>
        </ol>
    </nav>
    <h1 style="margin-left:50px; ">Đặt vé:</h1>

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

                        <div class="col-sm-2" style="text-align: center ;height:30px;">
                            <p style="background-color: #ccc; padding: 10px;"><?php echo $ghe['maghe'] ?></p>
                        </div>
                    <?php
                    } else if ($ghe['trangthaighe'] == 2) {

                    ?>
                        <div class="col-sm-2" style="text-align: center ;height:30px;">
                            <p style="background-color: red; padding: 10px; color: white;"><?php echo $ghe['maghe'] ?></p>
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class="col-sm-2" style="text-align: center ;height:30px;">
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

</div>