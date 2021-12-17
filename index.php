<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- link tags-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900|Work+Sans:300,400,500,600,700,800,900">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.min.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.html">

        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/datepicker.css">
        <link rel="stylesheet" href="css/tooplate-style.css">
        <link rel="Shortcut Icon" href="images/logo-i.png"  type="img/x-icon" /> 

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

        <!-- title tag-->
        <title>Cityespaces</title>
    </head>
    <body>
        <section id="above-the-fold">
            <div class="container_wrapper">
                <section id="navigation_container">
                    <div id="branding"><a href="index.php" style='text-decoration: none;'>
                            <div class="logo-container __center __colored">
                                <h2 class="city">City</h2>
                                <h2 class="es">es</h2>
                                <h2 class="cape">cape</h2>
                            </div>
                        </a>
                    </div>
                    <label for="menu_icon"> <i class="fa fa-bars"></i></label>
                    <input id="menu_icon" type="checkbox">
                    <menu style="list-style: none;">
                        <li><a href="index.php" style='text-decoration: none;'>Du lịch</a></li>
                        <li><a href="Anhchup.php" style='text-decoration: none;'> Ảnh chụp</a></li>
                        <?php
                        include "1connect.php";
                        $str = "select * from users where dangnhap=1 and quyentruycap=1";
                        $result = $connect->query($str);
                        if ($row = $result->fetch_row()) {
                            echo "<li><a href='admin/khachhang.php' style='text-decoration: none;'>Chào $row[5]</a></li>";
                        } else {
                            $str1 = "select * from users where dangnhap=1";
                            $result1 = $connect->query($str1);
                            if ($row1 = $result1->fetch_row()) {
                                echo "<li><a href='Setting.php' style='text-decoration: none;'>Chào $row1[5]</a></li>";
                            } else {
                                echo "<li><a href='Signin.php' style='text-decoration: none;'> Đăng nhập</a></li>";
                            }
                        }
                        ?>
                    </menu>
                </section>
                <h1 id="above-the-fold__description">
                    Khám phá những điều mới mẻ xung quanh ta <br>
                    Gặp gỡ những người bạn thân thiện <br>
                    Chào mừng bạn đến với chúng tôi!
                </h1>
            </div>
        </section>
        <div class="container_wrapper">
            <section id="latest-review">
                <div class="section-title">
                    <h2 class="color-city">Khám </h2>
                    <h2 class="color-cape">Phá</h2>
                </div>
                <div style="padding-left: 250px;">
                    <form class="form-inline" action="index.php" method="post">
                        <input class="form-control mr-sm-2" type="text" style="width: 600px;" placeholder="Nhập địa điểm cần tìm..." name="tukhoa">
                        <button class="btn btn-outline-info" type="submit" name="timkiem">Tìm kiếm</button>
                    </form>
                </div>
                <br><br>
                <div class="container_wrapper">
                    <div class="grid_post_container">
                        <?php
                        if (isset($_POST['timkiem'])) {
                            $tukhoa = $_POST['tukhoa'];
                            $strdiadiem = "select madiadiem, hinhanhdd, tendiadiem, tieude, name from diadiem, users where diadiem.id=users.id and tendiadiem like '%$tukhoa%'";
                            $resultdiadiem = $connect->query($strdiadiem);
                            while ($row1 = $resultdiadiem->fetch_row()) {
                                ?>
                                <div class="post-card1"><a class="post-card__category1" href="Post.php">Thể loại</a>
                                    <div class="post-card__featured-image1" style="background-image: url('<?php echo $row1[1]; ?>');"></div>                     
                                    <div class="post-card__details1">
                                        <form method="post" action="Post.php">
                                            <h2><button type="submit" name="diadiem" value="<?php echo $row1[0]; ?>" style="border: none; background-color:#ffffff;"><?php echo $row1[2]; ?></button></h2>
                                        </form>
                                        <p><?php echo $row1[3]; ?></p><div class="post-card__avatar">
                                            <div class="avatar__circle"></div>
                                            <div class="avatar__name"><?php echo $row1[4]; ?></div>
                                            <div class="avatar__muted-line"></div></div>
                                    </div>
                                </div>
                                <?php
                            }
                            $connect->close();
                        } else {
                            $strdiadiem = "select madiadiem, hinhanhdd, tendiadiem, tieude, name from diadiem, users where diadiem.id=users.id";
                            $resultdiadiem = $connect->query($strdiadiem);
                            while ($row1 = $resultdiadiem->fetch_row()) {
                                ?>
                                <div class="post-card1"><a class="post-card__category1" href="Post.php">Thể loại</a>
                                    <div class="post-card__featured-image1" style="background-image: url('<?php echo $row1[1]; ?>');"></div>                     
                                    <div class="post-card__details1">
                                        <form method="post" action="Post.php">
                                            <h2><button type="submit" name="diadiem" value="<?php echo $row1[0]; ?>" style="border: none; background-color:#ffffff;"><?php echo $row1[2]; ?></button></h2>
                                        </form>
                                        <p><?php echo $row1[3]; ?></p><div class="post-card__avatar">
                                            <div class="avatar__circle"></div>
                                            <div class="avatar__name"><?php echo $row1[4]; ?></div>
                                            <div class="avatar__muted-line"></div></div>
                                    </div>
                                </div>
                                <?php
                            }
                            $connect->close();
                        }
                        ?>
                    </div>
                </div>
            </section>
        </div>

        <div class="tabs-content" id="weather">
            <div class="container_wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h1>Check Weather For 5 NEXT Days</h1>
                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="col-md-12">
                            <div class="weather-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="tabs clearfix" data-tabgroup="second-tab-group">
                                            <li><a href="#monday" class="active">Monday</a></li>
                                            <li><a href="#tuesday">Tuesday</a></li>
                                            <li><a href="#wednesday">Wednesday</a></li>
                                            <li><a href="#thursday">Thursday</a></li>
                                            <li><a href="#friday">Friday</a></li>
                                        </ul>    
                                    </div>
                                    <div class="col-md-12">
                                        <section id="second-tab-group" class="weathergroup">
                                            <div id="monday">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="weather-item">
                                                            <h6>Tam Đảo</h6>
                                                            <div class="weather-icon">
                                                                <img src="img/weather-icon-03.png" alt="">
                                                            </div>
                                                            <span>32&deg;C</span>
                                                            <ul class="time-weather">
                                                                <li>6AM <span>26&deg;</span></li>
                                                                <li>12PM <span>32&deg;</span></li>
                                                                <li>6PM <span>28&deg;</span></li>
                                                                <li>12AM <span>22&deg;</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="weather-item">
                                                            <h6>Vịnh Hạ Long</h6>
                                                            <div class="weather-icon">
                                                                <img src="img/weather-icon-02.png" alt="">
                                                            </div>
                                                            <span>28&deg;C</span>
                                                            <ul class="time-weather">
                                                                <li>6AM <span>20&deg;</span></li>
                                                                <li>12PM <span>28&deg;</span></li>
                                                                <li>6PM <span>26&deg;</span></li>
                                                                <li>12AM <span>18&deg;</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="weather-item">
                                                            <h6>Phú Quốc</h6>
                                                            <div class="weather-icon">
                                                                <img src="img/weather-icon-01.png" alt="">
                                                            </div>
                                                            <span>33&deg;C</span>
                                                            <ul class="time-weather">
                                                                <li>6AM <span>26&deg;</span></li>
                                                                <li>12PM <span>33&deg;</span></li>
                                                                <li>6PM <span>29&deg;</span></li>
                                                                <li>12AM <span>27&deg;</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="tuesday">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="weather-item">
                                                            <h6>Tam Đảo</h6>
                                                            <div class="weather-icon">
                                                                <img src="img/weather-icon-02.png" alt="">
                                                            </div>
                                                            <span>28&deg;C</span>
                                                            <ul class="time-weather">
                                                                <li>6AM <span>18&deg;</span></li>
                                                                <li>12PM <span>27&deg;</span></li>
                                                                <li>6PM <span>25&deg;</span></li>
                                                                <li>12AM <span>17&deg;</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="weather-item">
                                                            <h6>Vịnh Hạ Long</h6>
                                                            <div class="weather-icon">
                                                                <img src="img/weather-icon-03.png" alt="">
                                                            </div>
                                                            <span>31&deg;C</span>
                                                            <ul class="time-weather">
                                                                <li>6AM <span>19&deg;</span></li>
                                                                <li>12PM <span>28&deg;</span></li>
                                                                <li>6PM <span>22&deg;</span></li>
                                                                <li>12AM <span>18&deg;</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="weather-item">
                                                            <h6>Phú Quốc</h6>
                                                            <div class="weather-icon">
                                                                <img src="img/weather-icon-01.png" alt="">
                                                            </div>
                                                            <span>26&deg;C</span>
                                                            <ul class="time-weather">
                                                                <li>6AM <span>19&deg;</span></li>
                                                                <li>12PM <span>26&deg;</span></li>
                                                                <li>6PM <span>22&deg;</span></li>
                                                                <li>12AM <span>20&deg;</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="wednesday">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="weather-item">
                                                            <h6>Tam Đảo</h6>
                                                            <div class="weather-icon">
                                                                <img src="img/weather-icon-03.png" alt="">
                                                            </div>
                                                            <span>31&deg;C</span>
                                                            <ul class="time-weather">
                                                                <li>6AM <span>19&deg;</span></li>
                                                                <li>12PM <span>28&deg;</span></li>
                                                                <li>6PM <span>22&deg;</span></li>
                                                                <li>12AM <span>18&deg;</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="weather-item">
                                                            <h6>Vinh Hạ Long</h6>
                                                            <div class="weather-icon">
                                                                <img src="img/weather-icon-01.png" alt="">
                                                            </div>
                                                            <span>34&deg;C</span>
                                                            <ul class="time-weather">
                                                                <li>6AM <span>28&deg;</span></li>
                                                                <li>12PM <span>34&deg;</span></li>
                                                                <li>6PM <span>30&deg;</span></li>
                                                                <li>12AM <span>29&deg;</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="weather-item">
                                                            <h6>Phú Quốc</h6>
                                                            <div class="weather-icon">
                                                                <img src="img/weather-icon-02.png" alt="">
                                                            </div>
                                                            <span>28&deg;C</span>
                                                            <ul class="time-weather">
                                                                <li>6AM <span>18&deg;</span></li>
                                                                <li>12PM <span>27&deg;</span></li>
                                                                <li>6PM <span>25&deg;</span></li>
                                                                <li>12AM <span>17&deg;</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="thursday">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="weather-item">
                                                            <h6>Tam Đảo</h6>
                                                            <div class="weather-icon">
                                                                <img src="img/weather-icon-01.png" alt="">
                                                            </div>
                                                            <span>27&deg;C</span>
                                                            <ul class="time-weather">
                                                                <li>6AM <span>21&deg;</span></li>
                                                                <li>12PM <span>27&deg;</span></li>
                                                                <li>6PM <span>22&deg;</span></li>
                                                                <li>12AM <span>18&deg;</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="weather-item">
                                                            <h6>Vịnh Hạ Long</h6>
                                                            <div class="weather-icon">
                                                                <img src="img/weather-icon-02.png" alt="">
                                                            </div>
                                                            <span>28&deg;C</span>
                                                            <ul class="time-weather">
                                                                <li>6AM <span>18&deg;</span></li>
                                                                <li>12PM <span>27&deg;</span></li>
                                                                <li>6PM <span>25&deg;</span></li>
                                                                <li>12AM <span>17&deg;</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="weather-item">
                                                            <h6>Phú Quốc</h6>
                                                            <div class="weather-icon">
                                                                <img src="img/weather-icon-03.png" alt="">
                                                            </div>
                                                            <span>31&deg;C</span>
                                                            <ul class="time-weather">
                                                                <li>6AM <span>19&deg;</span></li>
                                                                <li>12PM <span>28&deg;</span></li>
                                                                <li>6PM <span>22&deg;</span></li>
                                                                <li>12AM <span>18&deg;</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="friday">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="weather-item">
                                                            <h6>Tam Đảo</h6>
                                                            <div class="weather-icon">
                                                                <img src="img/weather-icon-03.png" alt="">
                                                            </div>
                                                            <span>33&deg;C</span>
                                                            <ul class="time-weather">
                                                                <li>6AM <span>28&deg;</span></li>
                                                                <li>12PM <span>33&deg;</span></li>
                                                                <li>6PM <span>29&deg;</span></li>
                                                                <li>12AM <span>27&deg;</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="weather-item">
                                                            <h6>Vịnh Hạ Long</h6>
                                                            <div class="weather-icon">
                                                                <img src="img/weather-icon-02.png" alt="">
                                                            </div>
                                                            <span>31&deg;C</span>
                                                            <ul class="time-weather">
                                                                <li>6AM <span>24&deg;</span></li>
                                                                <li>12PM <span>31&deg;</span></li>
                                                                <li>6PM <span>26&deg;</span></li>
                                                                <li>12AM <span>23&deg;</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="weather-item">
                                                            <h6>Phú Quốc</h6>
                                                            <div class="weather-icon">
                                                                <img src="img/weather-icon-01.png" alt="">
                                                            </div>
                                                            <span>28&deg;C</span>
                                                            <ul class="time-weather">
                                                                <li>6AM <span>24&deg;</span></li>
                                                                <li>12PM <span>28&deg;</span></li>
                                                                <li>6PM <span>26&deg;</span></li>
                                                                <li>12AM <span>22&deg;</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="most-visited">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h1>Most Visited Places</h1>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div id="owl-mostvisited" class="owl-carousel owl-theme">
                            <div class="item col-md-12">
                                <div class="visited-item">
                                    <img src="img/place-01.jpg" alt="">
                                    <div class="text-content">
                                        <h4>Thị trấn</h4>
                                        <span>Tam Đảo</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-md-12">
                                <div class="visited-item">
                                    <img src="img/place-02.jpg" alt="">
                                    <div class="text-content">
                                        <h4>Sông nước</h4>
                                        <span>Vịnh Hạ Long</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-md-12">
                                <div class="visited-item">
                                    <img src="img/place-03.jpg" alt="">
                                    <div class="text-content">
                                        <h4>Chợ Đêm</h4>
                                        <span>Phú Quốc</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-md-12">
                                <div class="visited-item">
                                    <img src="img/place-04.jpg" alt="">
                                    <div class="text-content">
                                        <h4>Bản làng</h4>
                                        <span>Sapa</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-md-12">
                                <div class="visited-item">
                                    <img src="img/place-06.jpg" alt="">
                                    <div class="text-content">
                                        <h4>Hòn Trống Mái</h4>
                                        <span>Vịnh Hạ Long</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-md-12">
                                <div class="visited-item">
                                    <img src="img/place-07.jpg" alt="">
                                    <div class="text-content">
                                        <h4>Hồ Xạ Hương</h4>
                                        <span>Tam Đảo</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-md-12">
                                <div class="visited-item">
                                    <img src="img/place-08.jpg" alt="">
                                    <div class="text-content">
                                        <h4>Thiền Viện Trúc Lâm</h4>
                                        <span>Phú Quốc</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-md-12">
                                <div class="visited-item">
                                    <img src="img/place-09.jpg" alt="">
                                    <div class="text-content">
                                        <h4>Bản Cát Cát</h4>
                                        <span>Sapa</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-md-12">
                                <div class="visited-item">
                                    <img src="img/place-10.jpg" alt="">
                                    <div class="text-content">
                                        <h4>Ba đỉnh núi</h4>
                                        <span>Tam Đảo</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-md-12">
                                <div class="visited-item">
                                    <img src="img/place-05.jpg" alt="">
                                    <div class="text-content">
                                        <h4>Động Thiên Cung</h4>
                                        <span>Vịnh Hạ Long</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="js/script.min.js"></script>
        <script src="../../../ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/datepicker.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                // navigation click actions 
                $('.scroll-link').on('click', function (event) {
                    event.preventDefault();
                    var sectionID = $(this).attr("data-id");
                    scrollToID('#' + sectionID, 750);
                });
                // scroll to top action
                $('.scroll-top').on('click', function (event) {
                    event.preventDefault();
                    $('html, body').animate({scrollTop: 0}, 'slow');
                });
                // mobile nav toggle
                $('#nav-toggle').on('click', function (event) {
                    event.preventDefault();
                    $('#main-nav').toggleClass("open");
                });
            });
            // scroll function
            function scrollToID(id, speed) {
                var offSet = 0;
                var targetOffset = $(id).offset().top - offSet;
                var mainNav = $('#main-nav');
                $('html,body').animate({scrollTop: targetOffset}, speed);
                if (mainNav.hasClass("open")) {
                    mainNav.css("height", "1px").removeClass("in").addClass("collapse");
                    mainNav.removeClass("open");
                }
            }
            if (typeof console === "undefined") {
                console = {
                    log: function () { }
                };
            }
        </script>
        <?php
        include('Footer.php');
        ?>