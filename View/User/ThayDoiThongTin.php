<div id="check"></div>
<div id="error"></div>
<div>
    <form name="signin" action="/duan1_nhom13/Controller/Admin/Taikhoan/UpdateInformation.php" method="post" onsubmit="return validateForm()">
        <div class="container ">

            <div class="form-row" style="margin: 50px 0;">
                <h1 style="margin-bottom: 20px;">Thay đổi thông tin</h1>
                <?php
                if (isset($_GET['check']) && $_GET['check'] == "success") {
                ?>
                    <div class="form-group col-md-6" style="margin-bottom: 20px;">
                        <div class="alert alert-success" role="alert">
                            Thay đổi thông tin thành công!
                        </div>
                    </div>
                <?php
                } else if (isset($_GET['check']) && $_GET['check'] == "email") {
                ?>
                    <div class="form-group col-md-6" style="margin-bottom: 20px;">
                        <div class="alert alert-danger" role="alert">
                            Email này đã tồn tại.
                        </div>
                    </div>
                <?php
                } else if (isset($_GET['check']) && $_GET['check'] == "danger") {
                ?>
                    <div class="form-group col-md-6" style="margin-bottom: 20px;">
                        <div class="alert alert-danger" role="alert">
                            Mật khẩu xác nhận không chính xác!
                        </div>
                    </div>
                <?php
                }
                ?>

                <div class="form-group col-md-6" style="margin-bottom: 20px;">
                    <label for="hovaten">Họ và tên</label>
                    <input type="text" class="form-control" id="hovaten" value="<?php echo $nguoiDung['hovaten'] ?>" name="hovaten">
                </div>
                <div class="form-group col-md-6" style="margin-bottom: 20px;">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" value="<?php echo $nguoiDung['email'] ?>" name="email">
                </div>

                <div class="form-group col-md-6" style="margin-bottom: 20px;">
                    <label for="matkhau">Nhập mật khẩu xác nhận</label>
                    <input type="password" class="form-control" id="matkhau" name="matkhau">
                </div>

                <input type="submit" class="btn btn-primary" name="btn" value="Thay đổi">
            </div>
        </div>
    </form>
</div>

<script>
    function validateForm() {
        var checkpass = document.getElementById("check_pass");
        var check = document.getElementById("check");
        var error = document.getElementById("error");
        var message = "<div class=\"alert alert-danger \" role=\"alert /\"> Bạn chưa điền đủ thông tin </div>";

        let signin = document.getElementsByClassName('signin');
        let hovaten = document.forms["signin"]["hovaten"].value;
        let email = document.forms["signin"]["email"].value;

        let matKhau = document.forms["signin"]["matkhau"].value;


        if (hovaten == "" || email == "" || matKhau == "") {
            check.innerHTML = message;
            return false;
        } else {
            check.innerHTML = "";
        }




    }
</script>