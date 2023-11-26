<!-- main -->
<header class="bg-dark ">
    <div class="container px-4 px-lg-5 ">
        <div class="text-center text-white">
            <!-- <h1 class="display-4 fw-bolder">Shop in style</h1>
				<p class="lead fw-normal text-white-50 mb-0">With this shop
					hompeage template</p> -->
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="/Nhom13_BookingVePhim_HPHCinemas/Template/User/img/banner-1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="/Nhom13_BookingVePhim_HPHCinemas/Template/User/img/banner-2.jpg" class="d-block w-100" alt="...">
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</header>
<!-- Section-->



<section class="py-0">
    <div class="container px-4 px-lg-5 mt-5">

        <div class="row ">
            <div class="col py-4 d-flex justify-content-center">
                <?php
                foreach ($listDanhMuc as $danhMuc) {
                ?>
                    <a class="danhmuc" href="/Nhom13_BookingVePhim_HPHCinemas/Controller/User/index.php?action=danhmuc&id_danhmuc=<?php echo $danhMuc['id_danhmuc'] ?>" style="">
                        <h3><?php echo $danhMuc['tendanhmuc'] ?></h3>
                    </a>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="row">
            <form action="/Nhom13_BookingVePhim_HPHCinemas/Controller/User/index.php?" method="get">
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Bộ lọc
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <?php
                        foreach ($listTheLoai as $theLoai) {
                        ?>
                            <li>
                                <input type="checkbox" id="<?php echo $theLoai['id_theloai'] ?>" name="theloai[]" value="<?php echo $theLoai['id_theloai'] ?>">
                                <label for="<?php echo $theLoai['id_theloai'] ?>"> <?php echo $theLoai['tentheloai'] ?></label>
                            </li>
                        <?php
                        }
                        ?>
                        <input type="hidden" name="action" value="timkiem">
                            <li><button type="submit" class="btn btn-primary">Tìm</button></li>
                    </ul>
                </div>
            </form>

        </div>
        <form action="/Nhom13_BookingVePhim_HPHCinemas/Controller/User/index.php?" method="get">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3  justify-content-center">


                <?php
                foreach ($listPhim as $phim) {
                ?>
                    <div class="col-4 mb-5 d-flex justify-content-center" style="margin-top: 15px;">
                        <div class="card h-100" style="width: 80%;">
                            <!-- Product image-->
                            <img class="card-img-top" src="/Nhom13_BookingVePhim_HPHCinemas/Template/Admin/assets/img/<?php echo $phim['anh'] ?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo $phim['tenphim'] ?></h5>
                                    <p>Thể loại:
                                        <span>
                                            <?php
                                            $listTheLoaiBySanPham = FindTheLoaiBySanPham($phim['id_phim']);
                                            $count = 0;
                                            for ($i = 0; $i < sizeof($listTheLoaiBySanPham); $i++) {
                                                echo $listTheLoaiBySanPham[$i]['tentheloai'];
                                                if (++$count != sizeof($listTheLoaiBySanPham)) {
                                                    echo " , ";
                                                }
                                            }
                                            ?>
                                        </span>

                                    </p>
                                    <!-- Product reviews-->
                                    <!-- <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div> -->
                                    <!-- Product price-->
                                    <P>Thời lượng phim: <span><?php echo $phim['thoiluongphim'] ?> phút</span></P>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class=" form-control btn btn-outline-dark mt-auto" href="/Nhom13_BookingVePhim_HPHCinemas/Controller/User/index.php?action=chitietphim&id_phim=<?php echo $phim['id_phim'] ?> ">Mua vé</a></div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>
            <div class="row">
                <div class="col-12 py-4 d-flex justify-content-center">
                    <ul class="pagination" id="pagination"></ul>
                    <input type="hidden" value="" id="page" name="page" />
                    <input type="hidden" value="" id="maxPageItem" name="maxPageItem" />
                    <input type="hidden" value="" id="sortName" name="sortName" />
                    <input type="hidden" value="" id="sortBy" name="sortBy" />
                    <input type="hidden" value="phantrang" id="action" name="action" />
                </div>
            </div>
        </form>

    </div>
</section>


<style>
    .danhmuc {
        margin: 0 10px;
        border-bottom: 5px solid black;
        text-decoration: none;
        color: black;
    }

    .card-body p {
        font-weight: 700;
    }

    .card-body span {
        font-weight: 400;
    }
</style>
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