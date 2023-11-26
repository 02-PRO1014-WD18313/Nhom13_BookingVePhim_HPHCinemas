<div id="check"></div>
<div id="error"></div>
<div>
    <form id="myForm" action="/Nhom13_BookingVePhim_HPHCinemas/Controller/Admin/Taikhoan/add.php" method="post">
        <div class="container ">
            <div class="row   ">
                <div class="col ">
                    <div class="form-row" style="margin: 50px 0;">
                        <h1 style="margin-bottom: 20px;">ĐĂNG KÝ</h1>
                        <?php
                        if (isset($_GET['check']) && $_GET['check'] == "tontai") {
                        ?>
                            <div class="form-group col-md-6" style="margin-bottom: 20px;">
                                <div class="alert alert-danger" role="alert">
                                    Tên tài khoản hoặc email đã tồn tại!
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        <div class="form-group col-md-6" style="margin-bottom: 20px;">
                            <label for="hovaten">Họ và tên</label>
                            <input type="text" class="form-control" id="hovaten" name="hovaten">
                        </div>
                        <div class="form-group col-md-6" style="margin-bottom: 20px;">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>


                        <div class="form-group col-md-6" style="margin-bottom: 20px;">
                            <label for="tendangnhap">Tên đăng nhập</label>
                            <input type="text" class="form-control" id="tendangnhap" name="tendangnhap">
                        </div>
                        <div class="form-group col-md-6" style="margin-bottom: 20px;">
                            <label for="matkhau">Mật khẩu</label>
                            <input type="password" class="form-control" id="matkhau" name="matkhau">
                        </div>
                        <div class="form-group col-md-6" style="margin-bottom: 20px;">
                            <label for="xacnhanmatkhau">Nhập lại mật khẩu</label>
                            <input type="password" class="form-control" id="xacnhanmatkhau" name="xacnhanmatkhau">
                            <span id="check_pass" style="color: red;"></span>
                        </div>

                        <button type="submit" class="btn btn-danger">Đăng ký</button>
                    </div>
                </div>

            </div>

        </div>
    </form>
</div>

<script>
    document.getElementById("myForm").addEventListener("submit", function(event) {
        // Get the form elements
        var checkpass = document.getElementById("check_pass");
        var check = document.getElementById("check");
        var error = document.getElementById("error");
        var message = "<div class=\"alert alert-danger \" role=\"alert /\"> Bạn chưa điền đủ thông tin </div>";
        var message_error = "<div class=\"alert alert-danger \" role=\"alert /\"> Bạn nhập sai số điện thoại </div>";
        let hovaten = document.getElementById("hovaten");
        let email = document.getElementById("email");
        let tenDangNhap = document.getElementById("tendangnhap");
        let matKhau = document.getElementById("matkhau");
        let nhapLaiMatKhau = document.getElementById("xacnhanmatkhau");

        // Check if the name field is empty
        if (hovaten.value.trim() === "" || email.value.trim() === "" || tenDangNhap.value.trim() === "" || matKhau.value.trim() === "" || nhapLaiMatKhau.value.trim() === "") {
            check.innerHTML = message;
            event.preventDefault(); // Prevent form submission
            return;
        }

        console.log("----------------------------------------");
        if (matKhau.value.trim() != nhapLaiMatKhau.value.trim()) {
            checkpass.innerHTML = "Bạn nhập sai mật khẩu xác nhận!";
            event.preventDefault(); // Prevent form submission
            return;
        }





    });
</script>