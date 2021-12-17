<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <!-- link tags-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900|Work+Sans:300,400,500,600,700,800,900">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.min.css">
        <link rel="stylesheet" href="style2.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- title tag-->
        <title>Cityespaces</title>
    </head>
    <body id="post__single-page">
        <div class="container_wrapper">
            <section class="__colored" id="navigation_container">
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
        </div>