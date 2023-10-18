<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/duanmau/template/admin/assets/style.css">
    <link rel="stylesheet" href="/duanmau/template/admin/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/duanmau/template/admin/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/duanmau/template/admin/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
    <script src="/duanmau/template/admin/assets/js/ace-extra.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type='text/javascript' src='/duanmau/template/admin/js/jquery-2.2.3.min.js'></script>
    <script src="/duanmau/template/admin/assets/js/jquery.2.1.1.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="/duanmau/template/paging/jquery.twbsPagination.js"></script>
    
    <script src="/duanmau/ckeditor/ckeditor.js"></script>
</head>
<body class="no-skin">
<div id="navbar" class="navbar navbar-default          ace-save-state">
    <div class="navbar-container ace-save-state" id="navbar-container">
        <div class="navbar-header pull-left">
            <a href="/duanmau/controller/admin/admin.php?" class="navbar-brand">
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
                        <?php if(isset($_SESSION['nguoidung']) && $_SESSION['nguoidung']['code'] == "ADMIN"){ ?>
                        Xin chào, <?php echo $_SESSION['nguoidung']['hovaten'] ?>
                        <?php
                        }
                        ?>
                    </a>
                    <li class="light-blue dropdown-modal">
                        <a href='/duanmau/controller/web/index.php?action=logout'>
                            <i class="ace-icon fa fa-power-off"></i>
                            Thoát
                        </a>
                    </li>
                </li>
            </ul>
        </div>
    </div>
</div>