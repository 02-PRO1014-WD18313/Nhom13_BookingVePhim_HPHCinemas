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
        <div class="col-8">
            <div class="col-sm-12" style="background-color: #ccc; margin-bottom: 50px;  border-radius: 50px; ">
                <h3 style="text-align: center;">Màn hình</h3>
            </div>
            <div style="margin: 30px 0;">
                <div id="seat-container" class="row">

                </div>
            </div>


        </div>
        <div class="col-4 ">
            <div class="row gx-5  d-flex" style="border-bottom: 2px dashed #ccc;">
                <div class="col-6">

                    <img src="/duan1_nhom13/Template/Admin/assets/img/<?php echo $information[0]['anh'] ?>" alt="" style="width: 100%; border-radius: 10px;">
                </div>
                <div class="col-6">
                    <h3><?php echo $information[0]['tenphim'] ?></h3>
                </div>
                <div class="col-6">

                    <h5>Thể loại</h5>
                </div>
                <div class="col-6">
                    <p> <?php
                        $count = 0;
                        $listTheLoaiBySanPham = FindTheLoaiBySanPham($information[0]['id_phim']);
                        for ($i = 0; $i < sizeof($listTheLoaiBySanPham); $i++) {
                            echo $listTheLoaiBySanPham[$i]['tentheloai'];
                            if (++$count != sizeof($listTheLoaiBySanPham)) {
                                echo " , ";
                            }
                        }
                        ?></p>
                </div>
                <div class="col-6">

                    <h5>Thời lượng</h5>
                </div>
                <div class="col-6">
                    <p><?php echo $information[0]['thoiluongphim'] ?> phút</p>
                </div>

            </div>

            <div class="row gx-5 d-flex">
                <div class="col-6">
                    <h5>Ngày chiếu</h5>
                </div>
                <div class="col-6">
                    <p><?php echo date("d-m-Y", strtotime($information[0]['thoigianchieu'])); ?></p>
                </div>
                <div class="col-6">
                    <h5>Giờ chiếu</h5>
                </div>
                <div class="col-6">
                    <p><?php echo date("H:i", strtotime($information[0]['thoigianchieu'])); ?></p>
                </div>
                <div class="col-6">
                    <h5>Phòng chiếu</h5>
                </div>
                <div class="col-6">
                    <p><?php echo $information[0]['maphong']; ?></p>
                </div>
            </div>

        </div>

    </div>
    <div class="row ">
        <div class="col-8 "></div>
        <div class="col-4 d-flex  align-items-center">
            <p class="total" style="margin-right: 10px;">Tổng tiền: </p>
            <p class="price">0</p> <span>VNĐ</span>
        </div>
    </div>

    <div class="row">
        <h2>Chọn phương thức thanh toán:</h2>
    </div>

</div>
<style>
    .seat {
        text-align: center;
        padding: 10px 0;
        border-radius: 50px;
        margin-bottom: 10px;

    }

    .total {
        font-size: 32px;
        font-weight: 700;
    }

    .price {
        font-size: 32px;
        font-weight: 400;
    }

    .available {
        background-color: #ccc;
        
    }

    .reserved {
        background-color: blue;
        color: white;
    }

    .booked {
        background-color: red;
        color: white;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var selectedSeats = [];
        var idSeats = [];

        const seatContainer = document.getElementById('seat-container');
        var price = document.querySelector('.price');
        var currentValue = parseInt(price.textContent);
        var priceMovie = parseInt(<?php  echo $information[0]['giave']?>);
        price.innerText = 0
        function getQueryParam(param) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }

        function displaySeats(id_lichchieu) {
            fetch('http://localhost/duan1_nhom13/Controller/Api/GheApi.php?id_lichchieu=' + id_lichchieu)
                .then(response => response.json())
                .then(seats => {
                    seats.forEach(seat => {
                        const seatElement = document.createElement('div');
                        seatElement.classList.add('seat', seat.trangthaighe, 'col-2');

                        seatElement.innerText = seat.maghe;

                        seatElement.addEventListener('click', () => toggleSeat(seatElement, seat.maghe, seat.trangthaighe, seat.id_ghe));

                        seatContainer.appendChild(seatElement);
                    });
                });


        }
        // Lấy giá trị tham số action từ URL
        const actionParam = getQueryParam('id_lichchieu');

        // Kiểm tra xem actionParam có giá trị không và gọi hàm hiển thị ghế
        if (actionParam) {
            displaySeats(actionParam);
        }

        function bookSeat(seatNumber) {

            if (customerName) {
                fetch('api.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify({
                            idGhes: idSeats,
                            soGhe: arr.idSeats,
                            idLichChieu: actionParam,
                            idNguoiDung: <?php echo $_SESSION['nguoidung']['id_nguoidung'] ?>,
                        }),
                    })
                    .then(response => response.json())
                    .then(data => {
                        alert(data.message);

                        location.reload();
                    });
            }
        }

        function toggleSeat(seatElement, seatNumber, seatStatus, idSeat) {
            if (seatStatus === 'booked') {
                alert('Ghế này đã được đặt, vui lòng chọn ghế khác.');
            } else {
                if (selectedSeats.includes(seatNumber)) {
                    // Nếu ghế đã được chọn, hủy chọn ghế
                    const index = selectedSeats.indexOf(seatNumber);
                    const idIndex = idSeats.indexOf(idSeat);
                    idSeats.splice(idIndex, 1);
                    selectedSeats.splice(index, 1);
                    seatElement.classList.remove('reserved');
                    currentValue -= priceMovie
                    price.textContent = currentValue;
                } else {
                    // Nếu ghế chưa được chọn, kiểm tra xem có tối đa 5 ghế đã được chọn chưa
                    if (selectedSeats.length < 5) {
                        selectedSeats.push(seatNumber);
                        idSeats.push(idSeat);
                        seatElement.classList.add('reserved');
                        // price.innerText +=2;
                        currentValue += priceMovie
                        price.textContent = currentValue;

                    } else {
                        alert('Bạn chỉ có thể chọn tối đa 5 ghế.');
                    }
                }
            }

        }
    });
</script>