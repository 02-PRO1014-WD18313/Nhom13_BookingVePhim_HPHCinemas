<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dự án 1</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="/duan1_nhom13/Template/User/assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="/duan1_nhom13/Template/User/css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <script src="/duanmau/template/admin/assets/js/ace-extra.min.js"></script> -->
    <!-- <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css"> -->
    <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="/duan1_nhom13/Template/Paging/jquery.twbsPagination.js"></script>


</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-black">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!"><img class="" src="" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">

                    <li class="nav-item" ><a class="nav-link active" style="color: white;" href="/duan1_nhom13/Controller/User/index.php?">Phim</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="!#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white; ">Danh mục phim</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php
                            foreach ($listDanhMuc as $danhMuc) {
                            ?>
                                
                                    <li><a class="dropdown-item" href="/duan1_nhom13/Controller/User/index.php?action=danhmuc&id_danhmuc=<?php echo $danhMuc['id_danhmuc'] ?>"><?php echo $danhMuc['tendanhmuc'] ?></a></li>

                            <?php
                            }
                            ?>


                        </ul>
                    </li>
                </ul>

                <?php if (isset($_SESSION['nguoidung']) && $_SESSION['nguoidung']['mavaitro'] == "USER") { ?>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $_SESSION['nguoidung']['hovaten'] ?>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Đơn hàng của tôi</a></li>
                            <li><a class="dropdown-item" href="/duan1_nhom13/Controller/User/index.php?action=thaydoimatkhau">Thay đổi mật khẩu</a></li>
                            <li><a class="dropdown-item" href="/duan1_nhom13/Controller/User/index.php?action=thaydoithongtin">Thay đổi thông tin</a></li>
                            <li><a class="dropdown-item" href="/duan1_nhom13/Controller/User/index.php?action=dangxuat">Đăng xuất</a></li>
                        </ul>
                    </div>

                <?php
                } else {
                ?>
                <a class="login" href="/duan1_nhom13/Controller/User/index.php?action=dangnhap">Đăng Nhập</a>
                <a class="sign-up" href="/duan1_nhom13/Controller/User/index.php?action=dangky">Đăng Ký</a>

                <?php
                }
                ?>
            </div>
        </div>
    </nav>
<style>
.logo{
  width: 150px;
}

.login, .sign-up{
  text-decoration: none;
  color: white;
  margin: 0 8px;
  border: 1px solid white;
  padding: 5px;
  border-radius: 10px;
  font-weight: 500;
}

</style>