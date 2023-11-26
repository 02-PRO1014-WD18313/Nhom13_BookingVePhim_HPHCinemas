<div id="login">

    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">

                    <form id="myForm" class="form" action="/duan1_nhom13/Controller/Admin/Taikhoan/UpdatePassWordNew.php" method="post">
                        <h1 class="text-center ">Nhập mật khẩu mới</h1>
                        <div class="form-group " style="margin-bottom: 20px;">
                            <label for="matkhaumoi">Mật khẩu mới</label>
                            <input type="password" class="form-control" id="matkhaumoi" name="matkhaumoi" required>
                        </div>
                        <div class="form-group" style="margin-bottom: 20px;">
                            <label for="xacnhanmatkhau">Nhập lại mật khẩu</label>
                            <input type="password" class="form-control" id="xacnhanmatkhau" name="xacnhanmatkhau" required>
                            <span id="check_pass" style="color: red;"></span>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="id_nguoidung" value="<?php echo $_GET['id_nguoidung'] ?>">
                            <input type="submit" name="btn" class="btn btn-success btn-md" value="Thay đổi">
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    #login {
        margin: 10% 0;

        /* box-shadow: ; */
    }

    .form {
        background-color: #ccc;
        border: none;
        padding: 30px;
        border-radius: 20px;

    }

    .form label {
        margin-bottom: 10px;
        font-size: 22px;
        font-weight: 700;
    }

    .form-group {
        margin: 30px 0;
    }
</style>
<script>
    document.getElementById("myForm").addEventListener("submit", function(event) {
        // Get the form elements
        var checkpass = document.getElementById("check_pass");


        var message = "<div class=\"alert alert-danger \" role=\"alert /\"> Bạn chưa điền đủ thông tin </div>";
        let matKhau = document.getElementById("matkhaumoi");

        let nhapLaiMatKhau = document.getElementById("xacnhanmatkhau");



        if (matKhau.value.trim() != nhapLaiMatKhau.value.trim()) {
            checkpass.innerHTML = "Bạn nhập sai mật khẩu xác nhận!";

            event.preventDefault(); // Prevent form submission
            return;
        }




    });
</script>