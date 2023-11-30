<div class="container oder">
  <h1 class="text-oder">Các đơn hàng của bạn</h1>
  <form id="formSubmit" action="/Nhom13_BookingVePhim_HPHCinemas/Controller/User/index.php?" method="get">
    <div class="accordion oder-sub" id="accordionExample">

      <?php
      $stt = 0;
      foreach ($listDonHang as $donhang) {
        $stt++;
      ?>
        <div class="accordion-item">
          <div class="row d-flex">
            <div class="col-12 d-flex align-items-center">
              <h2 class="accordion-header" id="heading<?php echo $stt ?>">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $stt ?>" aria-expanded="false" aria-controls="collapse<?php echo $stt ?>">
                  <div class=" rounded-3 ">
                    <div class=" ">
                      <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-1 ">
                          <img src="/Nhom13_BookingVePhim_HPHCinemas/Template/Admin/assets/img/<?php echo $donhang['anh'] ?>" class="img-fluid rounded-3" alt="Cotton T-shirt" style="width: 100%;">
                        </div>
                        <div class="col-4 ">
                          <p class="lead fw-normal mb-2"><?php echo $donhang['tenphim'] ?></p>

                        </div>
                        <div class="col-4">
                          <h5> Thời gian: <?php echo $donhang['thoigiandat'] ?></h5>
                        </div>
                        <div class="col-3 " style="text-align: center;">
                          <h5 style="color: green;"> Tổng tiền: <?php echo number_format($donhang['tongtien'], 0, '', '.')  ?> VNĐ </h5>

                        </div>
                      </div>
                    </div>
                  </div>
                </button>

              </h2>
            </div>


          </div>

          <div id="collapse<?php echo $stt ?>" class="accordion-collapse collapse " aria-labelledby="heading<?php echo $stt ?>" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <section class="h-100 h-custom" style="background-color: #eee;">
                <div class="container py-5 h-100">
                  <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-8 col-xl-6">
                      <div class="card border-top border-bottom border-3" style="border-color: #f37a27 !important;">
                        <div class="card-body p-5">

                          <p class="lead fw-bold mb-5" style="color: #f37a27;">Biên lai mua hàng</p>

                          <div class="row">
                            <div class="col-md-6 col-lg-6">
                              <p class="small text-muted mb-1">Ngày đặt vé</p>
                              <p><?php echo $donhang['thoigiandat'] ?></p>
                            </div>
                            <div class="col-md-6 col-lg-6">
                              <p class="small text-muted mb-1">Mã đơn hàng:</p>
                              <p><?php echo $donhang['madonhang'] ?></p>
                            </div>

                          </div>

                          <div class="mx-n5 px-5 py-4" style="background-color: #f2f2f2;">
                            <div class="row">
                              <div class="col-8">
                                <p><?php echo $donhang['tenphim'] ?> </p>
                                <p>Thể loại: <?php
                                              $count = 0;
                                              $listTheLoaiBySanPham = FindTheLoaiBySanPham($donhang['id_phim']);
                                              for ($i = 0; $i < sizeof($listTheLoaiBySanPham); $i++) {
                                                echo $listTheLoaiBySanPham[$i]['tentheloai'];
                                                if (++$count != sizeof($listTheLoaiBySanPham)) {
                                                  echo " , ";
                                                }
                                              }
                                              ?></p>
                                <p>Thời lượng phim: <?php echo $donhang['thoiluongphim'] ?> phút </p>
                              </div>
                              <div class="col-4">
                                <img src="/Nhom13_BookingVePhim_HPHCinemas/Template/Admin/assets/img/<?php echo $donhang['anh'] ?>" alt="" style="width: 100%; border-radius: 10px;">
                              </div>

                            </div>
                            <div class="row">
                              <div class="col-md-8">
                                <p class="mb-0">Thời gian:</p>
                              </div>
                              <div class="col-md-4">
                                <p class="mb-0"><?php echo date("Y-m-d H:i", strtotime($donhang['thoigianchieu'])) ?></p>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-8">
                                <p class="mb-0">Phòng:</p>
                              </div>
                              <div class="col-md-4">
                                <p class="mb-0"><?php echo $donhang['maphong'] ?></p>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-8">
                                <p class="mb-0">Mã ghế:</p>
                              </div>
                              <div class="col-md-4">
                                <p class="mb-0"><?php echo $donhang['soghedadat'] ?></p>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-8">
                                <p class="mb-0">Số lượng ghế:</p>
                              </div>
                              <div class="col-md-4">
                                <p class="mb-0"><?php echo $donhang['soluong'] ?></p>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-8">
                                <p class="mb-0">Giá vé:</p>
                              </div>
                              <div class="col-md-4">
                                <p class="mb-0"><?php echo number_format($donhang['giave'], 0, '', '.')  ?> VNĐ</p>
                              </div>
                            </div>
                          </div>

                          <div class="row my-4">
                            <div class="">
                              <p class="lead fw-bold mb-0" style="color: #f37a27;">Tổng tiền: <?php echo $donhang['tongtien'] ?> VNĐ</p>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
      <?php } ?>

    </div>
    <div class="row">
      <div class="col-12 py-4 d-flex justify-content-center">
        <ul class="pagination" id="pagination"></ul>
        <input type="hidden" value="" id="page" name="page" />
        <input type="hidden" value="" id="maxPageItem" name="maxPageItem" />
        <input type="hidden" value="" id="sortName" name="sortName" />
        <input type="hidden" value="" id="sortBy" name="sortBy" />
        <input type="hidden" value="quanlydonhang" id="action" name="action" />
      </div>
    </div>
  </form>




</div>
<style>
  .oder {
    height: 100%;
  }

  .text-oder {
    margin: 50px 0;
  }

  .oder-sub {
    padding: 50px;
    margin: 150px 0;
  }

  @media (min-width: 1025px) {
    .h-custom {
      height: 100vh !important;
    }
  }

  .horizontal-timeline .items {
    border-top: 2px solid #ddd;
  }

  .horizontal-timeline .items .items-list {
    position: relative;
    margin-right: 0;
  }

  .horizontal-timeline .items .items-list:before {
    content: "";
    position: absolute;
    height: 8px;
    width: 8px;
    border-radius: 50%;
    background-color: #ddd;
    top: 0;
    margin-top: -5px;
  }

  .horizontal-timeline .items .items-list {
    padding-top: 15px;
  }

  .received {
    text-decoration: none;
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
                    $('#sortName').val('id_donhang');
                    $('#sortBy').val('desc');
                    $('#formSubmit').submit();
                }
            }
        }).on('page', function(event, page) {
            console.info(page + ' (from event listening)');
        });
    });
</script>