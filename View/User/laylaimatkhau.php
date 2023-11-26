<div id="login">

    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <?php
                    if (isset($_GET['msg']) && $_GET['msg'] == "check") {
                    ?>
                        <div class="alert alert-success" role="alert">
                            Xin hay kiểm tra email của bạn.
                        </div>

                    <?php
                    }
                    ?>
                    
                    <form id="login-form" class="form" action="/duan1_nhom13/Controller/Admin/Taikhoan/LayLaiMatKhau.php" method="post">
                        <h1 class="text-center ">Lấy lại mật khẩu</h1>
                        <div class="form-group">
                            <label for="email" class="">email</label><br>
                            <input type="email" name="email" id="email" placeholder="Nhập email của bạn" class="form-control" required>
                        </div>
                       
                        <div class="form-group">

                            <input type="submit" name="submit" class="btn btn-success btn-md" value="Lấy lại mật khẩu">
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