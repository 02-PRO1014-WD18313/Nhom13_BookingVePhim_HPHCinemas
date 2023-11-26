<section class="py-5">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/Nhom13_BookingVePhim_HPHCinemas/Controller/User/index.php?">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Trang chi tiết</li>
            </ol>
        </nav>
        <h2 style="margin-left:50px; ">Chi tiết phim:</h2>
        <div class="row  " style="margin: 50px 0;">
            <div class="col-md-4"><img src="/Nhom13_BookingVePhim_HPHCinemas/Template/Admin/assets/img/<?php echo $phim[0]['anh'] ?>" alt="..." style="width: 100%; border-radius: 30px;" /></div>
            <div class="col-md-8">
                <h1 class=""><?php echo $phim[0]['tenphim'] ?></h1>

                <p class="mota"><?php echo $phim[0]['mota'] ?></p>
                <div class="row information">
                    <div class="col-4">
                        <h5>Đạo diễn:</h5>
                    </div>
                    <div class="col-8">
                        <p> <?php echo $phim[0]['daodien'] ?></p>
                    </div>
                    <div class="col-4">
                        <h5>Diễn viên:</h5>
                    </div>
                    <div class="col-8">
                        <p> <?php echo $phim[0]['dienvien'] ?></p>
                    </div>
                    <div class="col-4">
                        <h5>Thời lượng phim:</h5>
                    </div>
                    <div class="col-8">
                        <p> <?php echo $phim[0]['thoiluongphim'] ?> phút</p>
                    </div>
                    <div class="col-4">
                        <h5>Ngày khởi chiếu:</h5>
                    </div>
                    <div class="col-8">
                        <p> <?php echo $phim[0]['ngayphathanh'] ?></p>
                    </div>
                    <div class="col-4">
                        <h5>Thể loại:</h5>
                    </div>
                    <div class="col-8">
                        <p> <?php
                            $count = 0;
                            $listTheLoaiBySanPham = FindTheLoaiBySanPham($phim[0]['id_phim']);
                            for ($i = 0; $i < sizeof($listTheLoaiBySanPham); $i++) {
                                echo $listTheLoaiBySanPham[$i]['tentheloai'];
                                if (++$count != sizeof($listTheLoaiBySanPham)) {
                                    echo " , ";
                                }
                            }
                            ?></p>
                    </div>
                </div>





            </div>
        </div>

        <div class="row">
            <div class="col-12" style="margin: 30px 0;">
                <h3>Thời gian chiếu:</h3>
            </div>
        </div>
        <div class="row ">
            <?php
            $stt = 0;
            foreach ($listSuatChieu as $suatChieu) {
                $stt++;
            ?>

                <div class="col-2 date-<?php echo $stt ?>">

                    <a href="/Nhom13_BookingVePhim_HPHCinemas/Controller/User/index.php?action=chitietphim&id_phim=<?php echo $_GET['id_phim'] ?>&time=<?php echo $suatChieu ?>">
                        <h5><?php echo $suatChieu ?></h5>
                    </a>
                </div>

            <?php
            }
            ?>
        </div>
        <div class="row" style="margin: 30px 0;">
            <?php
            foreach ($times as $time) {

            ?>
                <div class="col-1">
                    <form id="myForm" action="/Nhom13_BookingVePhim_HPHCinemas/Controller/User/index.php?" method="GET">
                        <input type="hidden" name="id_lichchieu" value="<?php echo $time['id_lichchieu'] ?>">
                        <input type="hidden" name="action" value="datve">
                        <input type="hidden" name="id_lichchieu" value="<?php echo $time['id_lichchieu'] ?>">
                        <button type="submit" class="time"><?php echo date("H:i", strtotime($time['thoigianchieu'])); ?></button>
                    </form>

                </div>
            <?php
            }
            ?>
        </div>

        <div style="margin-top: 100px;">
				<h1>Đánh giá của khách hàng</h1>
				<section>
					<div class="container my-5 py-5">
						<div class="row d-flex justify-content-center">
							<div class="col-md-12 col-lg-10">
								<div class="card text-dark">
									<?php
										foreach($listBinhLuan AS $binhLuan){
									?>
									<div class="card-body p-4">


										<div class="d-flex flex-start">

											<div>
												<h6 class="fw-bold mb-1"><?php echo $binhLuan['hovaten'] ?></h6>
												<div class="d-flex align-items-center mb-3">
													<p class="mb-0">
													<?php echo $binhLuan['ngayviet'] ?>

													</p>
												</div>
												<p class="mb-0">
												<?php echo $binhLuan['noidung'] ?>
												</p>
												<?php 
													if(isset($_SESSION['nguoidung']) && $_SESSION['nguoidung']['id_nguoidung'] == $binhLuan['id_nguoidung']){
												?>
                                                    <a href="/Nhom13_BookingVePhim_HPHCinemas/Controller/Admin/Binhluan/DeleteByUser.php?id_binhluan=<?php echo $binhLuan['id_danhgia']?>&id_phim=<?php echo $_GET['id_phim'] ?>">Xóa</a>
												<?php
													}
												?>
											</div>
										</div>
									</div>

									<hr class="my-0" />
									<?php
										}
									?>



								<?php 
									if(isset($_SESSION['nguoidung'])){
								?>
								<h3 style="margin-top: 50px;"><?php echo $_SESSION['nguoidung']['hovaten'] ?></h3>
									<form class="comment" action="/Nhom13_BookingVePhim_HPHCinemas/Controller/Admin/Binhluan/add.php" >
										<div class="mb-3 mt-3">
											<label for="noidung">Bình luận:</label>
											<textarea class="form-control" rows="3" id="noidung" name="noidung"></textarea>
										</div>
										<span id="check"></span>
										<input type="hidden" value="<?php echo $_GET['id_phim'] ?>" name="id_phim">
										<input type="hidden" value="<?php echo $_SESSION['nguoidung']['id_nguoidung'] ?>" name="id_nguoidung">
										<button  type="submit" class="btn btn-primary">Gửi<i class="fas fa-long-arrow-alt-right ms-1"></i></button>
									</form>
								</div>
								<?php
									}
								?>
							</div>
						</div>
					</div>
				</section>
			</div>

    </div>
</section>
<style>
    <?php
    if (empty($_GET['time'])) {
    ?>.date-1 {
        border-bottom: 5px solid black;
    }

    .date-1 a {
        text-align: center;
        text-decoration: none;
        color: black;
    }

    <?php
    }
    ?>.mota {
        font-size: 22px;
        font-weight: 600;
    }

    .information p {
        font-size: 18px;
    }

    .time {
        background-color: #ccc;
        color: black;
        text-decoration: none;
        padding: 5px 20px;
    }
</style>
<!-- <script>
    document.getElementById('myForm').addEventListener('submit', function(event) {
        event.preventDefault();

        // Lấy dữ liệu từ biểu mẫu
        var formData = new FormData(event.target);

        // Chuyển đổi FormData thành chuỗi query parameters
        var queryString = new URLSearchParams(formData).toString();

        // Gửi dữ liệu đến API sử dụng fetch
        fetch('http://localhost/Nhom13_BookingVePhim_HPHCinemas/Controller/Api/GheApi.php?' + queryString)
            .then(response => response.json())
            .then(data => {
                // Xử lý dữ liệu trả về từ API nếu cần
                console.log(data);
            })
            .catch(error => {
                console.error('Error:', error);
            });
    document.getElementById('myForm').submit();
    });
</script> -->