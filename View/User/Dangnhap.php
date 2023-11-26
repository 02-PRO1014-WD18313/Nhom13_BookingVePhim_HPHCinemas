<div id="login">

    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <?php
                    if (isset($_GET['check']) && $_GET['check'] == "danger") {
                    ?>
                        <div class="alert alert-danger" role="alert">
                            Tài khoản hoặc mật khẩu không chính xác!
                        </div>

                    <?php
                    }
                    ?>
                    <?php
                    if (isset($_GET['msg']) && $_GET['msg'] == "success") {
                    ?>
                        <div class="alert alert-success" role="alert">
                            Bạn đã đăng ký thành công, giờ xin hay đăng nhập lại!
                        </div>

                    <?php
                    }
                    ?>
                    
                    <form id="login-form" class="form" action="/duan1_nhom13/Controller/Admin/Taikhoan/Check.php" method="post">
                        <h1 class="text-center ">Đăng nhập</h1>
                        <div class="form-group">
                            <label for="tendangnhap" class="">Tên đăng nhập:</label><br>
                            <input type="text" name="tendangnhap" id="tendangnhap" placeholder="Tên đăng nhập" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="matkhau" class="">Mật khẩu:</label><br>
                            <input type="password" name="matkhau" id="matkhau" placeholder="Mật khẩu" class="form-control" required> 
                        </div>
                        <div class="form-group">

                            <input type="submit" name="submit" class="btn btn-success btn-md" value="Đăng nhập">
                        </div>

                        <div class="row">
                            <div class="col d-flex justify-content-between">
                                <a href="/duan1_nhom13/Controller/User/index.php?action=dangky">Đăng ký</a>
                                <a href="/duan1_nhom13/Controller/User/index.php?action=laylaimatkhau">Quên mật khẩu</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
	#login{
		margin: 10% 0;

		/* box-shadow: ; */
	}
	#login-form{
		background-color: #ccc;
		border: none;
		padding: 30px;
		border-radius: 20px;
		
	}
	#login-form label{
		margin-bottom: 10px;
		font-size: 22px;
		font-weight: 700;
	}
	.form-group{
		margin: 30px 0;
	}
</style>