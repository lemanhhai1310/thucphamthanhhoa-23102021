<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thực phẩm tỉnh Thanh Hóa - <?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">



    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/js/uikit.min.js"></script>
</head>
<body class="">
<!--app-->
<div id="app" class="">
    <!--header-->
    <div class="header">

        <!--header__top-->
        <div class="header__top">
            <div class="container">
                <div class="text-center">
                    <h1 class="header__top__title">TRANG THÔNG TIN AN TOÀN THỰC PHẨM <br> TỈNH THANH HÓA</h1>
                    <div class="header__top__grid">
                        <div class="header__top__form">
                            <input type="text" class="form-control" placeholder="Tìm kiếm">
                            <button class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header__top-->

        <!--header__bottom-->
        <div class="header__bottom">
            <div class="container">
                <nav class="header__bottom__navbar">
                    <div class="header__bottom__navbar__left">
                        <ul class="header__bottom__navbar__nav">
                            <li class="active"><a href=".">Trang Chủ</a></li>
                            <li><a href="">Sản Phẩm</a></li>
                            <li><a href="donvi.php">Đơn vị phân phối</a></li>
                            <li><a href="">Chuỗi thực phẩm an toàn</a></li>
                            <li><a href="">Trợ giúp</a></li>
                            <li><a href="">Giới thiệu</a></li>
                        </ul>
                    </div>
                    <div class="header__bottom__navbar__right">
                        <div class="header__bottom__navbar__navitem">

                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!--/header__bottom-->

    </div>
    <!--/header-->