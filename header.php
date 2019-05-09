<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?> - Petvn</title>
    <link rel="shortcut icon" href="imgs/favicon-19.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/uikit-3.0.3/css/uikit.min.css">
    <link rel="stylesheet" href="css/layout.css">
    <!--JS-->
    <script src="assets/jquery/jquery-3.3.1.js"></script>
    <script src="assets/uikit-3.0.3/js/uikit.min.js"></script>
    <script src="assets/uikit-3.0.3/js/uikit-icons.min.js"></script>
</head>
<body>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function () {
        FB.init({
            xfbml: true,
            version: 'v3.2'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="2428809380682169"
     theme_color="#24892d">
</div>
<section id="root" class="uk-height-viewport uk-offcanvas-content">
<div class="uk-section uk-background-cover" style="background-image: url(imgs/cockapoo2.jpg)"></div>
<div class="uk-container uk-section-xsmall">
    <div class="uk-flex uk-flex-middle uk-flex-between">
        <a href="#"><img class="logo1" src="imgs/logo-02.png" alt=""></a>
        <div class="uk-flex-middle uk-flex">
            <div class="time2">
                Thứ Hai 20/3/2019 15:20
            </div>
            <div class="uk-position-relative uk-margin-left">
                <input class="uk-input form1_txt uk-width-small" type="text" placeholder="Tìm kiếm">
                <button type="submit" class="uk-position-center-right btn2-timkiem"><img src="imgs/pasted-svg-452109x457.svg" alt=""></button>
            </div>
        </div>
    </div>
</div>
<div class="uk-container uk-margin-bottom">
    <nav id="nav1" class="uk-navbar-container uk-navbar-transparent" uk-navbar="" uk-sticky>
        <div class="uk-navbar-left uk-width-1-1">

            <ul class="uk-navbar-nav uk-flex-auto uk-flex-between">
                <li class="uk-active"><a href="#"><img src="imgs/home%20-v-01.png" alt=""></a></li>
                <li>
                    <a href="#">Tin tức</a>
                    <div class="uk-navbar-dropdown uk-margin-remove uk-padding-remove">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li class="uk-active"><a href="#">Trong nước</a></li>
                            <li><a href="#">Quốc tế</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#">bảo vệ động vật</a>
                    <div class="uk-navbar-dropdown uk-navbar-dropdown-width-3 uk-margin-remove" style="min-width: 767px;">
                        <div class="uk-child-width-1-4 uk-grid-medium" uk-grid>
                            <?php
                            $cars = array
                            (
                                'imgs/news1.jpg',
                                'imgs/news2.png',
                                'imgs/news3.jpg',
                                'imgs/news4.jpg',
                            );
                            foreach ($cars as $k => $v) { ?>
                                <div>
                                    <div class="uk-cover-container">
                                        <img src="<?= $v; ?>" alt="" uk-cover>
                                        <canvas width="152" height="107"></canvas>
                                    </div>
                                    <h5 class="title3 uk-margin-small"><a href="#">Dịch heo tràn lan</a></h5>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </li>
                <li><a href="#">khoảnh khắc</a></li>
                <li><a href="#">nhật ký</a></li>
                <li><a href="#">khỏe - đẹp</a></li>
                <li><a href="#">khám phá</a></li>
            </ul>

        </div>
    </nav>
</div>