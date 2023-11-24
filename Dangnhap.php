<div id="loginCheck"></div>
<div id="loginError"></div>
<div>
    <form id="loginForm" action="/duan1_nhom13/Controller/Admin/Taikhoan/login.php" method="post">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="form-row" style="margin: 50px 0;">
                    <h1 style="margin-bottom: 20px;">ĐĂNG NHẬP</h1>
                    <?php
                    // Bạn có thể xử lý các lỗi đăng nhập tương tự nếu cần
                    ?>
                    <div class="form-group col-md-6" style="margin-bottom: 20px;">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="loginEmail" name="email">
                    </div>
                    <div class="form-group col-md-6" style="margin-bottom: 20px;">
                        <label for="matkhau">Mật khẩu</label>
                        <input type="password" class="form-control" id="loginMatKhau" name="matkhau">
                    </div>

                    <button type="submit" class="btn btn-primary">Đăng nhập</button>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    document.getElementById("loginForm").addEventListener("submit", function(event) {
        // Lấy các phần tử của biểu mẫu
        var loginCheck = document.getElementById("loginCheck");
        var loginError = document.getElementById("loginError");
        var loginMessage = "<div class=\"alert alert-danger\" role=\"alert\"> Bạn chưa điền đủ thông tin </div>";
        let loginEmail = document.getElementById("loginEmail");
        let loginMatKhau = document.getElementById("loginMatKhau");

        // Kiểm tra xem các trường email và mật khẩu có trống không
        if (loginEmail.value.trim() === "" || loginMatKhau.value.trim() === "") {
            loginCheck.innerHTML = loginMessage;
            event.preventDefault(); // Ngăn chặn việc gửi biểu mẫu
        }
    });
</script>