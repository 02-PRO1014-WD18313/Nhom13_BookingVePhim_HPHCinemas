<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/duan1_nhom13/Template/Admin/assets/style.css">
    <link rel="stylesheet" href="/duan1_nhom13/Template/Admin/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/duan1_nhom13/Template/Admin/assets/font-awesome/4.2.0/css/font-awesome.min.css" />
    <!-- <link rel="stylesheet" href="/duan1_nhom13/Template/Admin/assets/fontawesome-icon/css/fontawesome.min.css" /> -->
    <link rel="stylesheet" href="/duan1_nhom13/Template/Admin/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
    <script src="/duan1_nhom13/Template/Admin/assets/js/ace-extra.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type='text/javascript' src='/duan1_nhom13/Template/Admin/js/jquery-2.2.3.min.js'></script>
    <script src="/duan1_nhom13/Template/Admin/assets/js/jquery.2.1.1.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="/duan1_nhom13/Template/Paging/jquery.twbsPagination.js"></script>
    <script src="/duan1_nhom13/ckeditor/ckeditor.js"></script>
</head>
<body class="no-skin">
<div id="navbar" class="navbar navbar-default          ace-save-state">
    <div class="navbar-container ace-save-state" id="navbar-container">
        <div class="navbar-header pull-left">
            <a href="/duan1_nhom13/Controller/Admin/index.php?" class="navbar-brand">
                <small>
                    <i class="fa fa-leaf"></i>
                    Trang quản trị
                </small>
            </a>
        </div>
        <div class="navbar-buttons navbar-header pull-right collapse navbar-collapse" role="navigation">
            <ul class="nav ace-nav">
                <li class="light-blue dropdown-modal">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <?php if(isset($_SESSION['nguoidung']) && $_SESSION['nguoidung']['mavaitro'] == "ADMIN"){ ?>
                        Xin chào, <?php echo $_SESSION['nguoidung']['hovaten'] ?>
                        <?php
                        }
                        ?>
                    </a>
                    <li class="light-blue dropdown-modal">
                        <a href='/duan1_nhom13/Controller/User/index.php?action=dangxuat'>
                            <i class="ace-icon fa fa-power-off"></i>
                            Thoát
                        </a>
                    </li>
                </li>
            </ul>
        </div>
    </div>
</div>