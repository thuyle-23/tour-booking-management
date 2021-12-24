<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- link tags-->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900|Work+Sans:300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="style2.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js">
    </script>

    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="profile/css/main.min.css">
    <link rel="stylesheet" href="profile/css/style.css">
    <link rel="stylesheet" href="profile/css/color.css">
    <!-- title tag-->
    <title>Cityespaces</title>
</head>
<style>
.success {
   background: #D4EDDA;
   color: #40754C;
   padding: 10px;
   width: 100%;
   border-radius: 5px;
   margin: 20px auto;
   font-size: 15px;
}
</style>
<?php
    include "Header.php";
    include "1connect.php";

    if (isset($_POST['Update'])) {
        $id = (int) $_POST['Update'];
        $tk = $_POST['tk'];
        $hoten = $_POST['hoten'];
        $mail = $_POST['mail'];
        $sodt = (double) $_POST['sodt'];
        // $mk = $_POST['mk'];
        $gioitinh = $_POST['gioitinh'];
        $ngaysinh = $_POST['ngaysinh'];
        $tieusu = $_POST['tieusu'];
        $diachi = $_POST['diachi'];
        $sql = "update users set user='$tk', name='$hoten', email='$mail', gioitinh='$gioitinh', ngaysinh='$ngaysinh', sodt=$sodt, diachi='$diachi', tieusu='$tieusu' where id=$id";
        // $connect->query($sql);
        mysqli_query($connect, $sql);
        echo '<script>window.location="Setting.php?success=Cập nhật thông tin thành công"</script>';
        exit();
    }

    $strusers = "SELECT * FROM users WHERE dangnhap=1";
    $resultusers = $connect->query($strusers);
    $row = $resultusers->fetch_row();
    ?>
<div class="theme-layout">
    <section>
        <div class="gap2 gray-bg">
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row merged20" id="page-contents">
                            <div class="user-profile">
                                <figure>
                                    <div class="edit-pp">
                                        <label class="fileContainer">
                                            <i class="fa fa-camera"></i>
                                            <input type="file">
                                        </label>
                                    </div>
                                    <img src="profile/images/profile-image.jpg" alt="">
                                </figure>
                                <div class="profile-section">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3">
                                            <div class="profile-author">
                                                <div class="profile-author-thumb">
                                                    <img alt="author" src="profile/images/male.png">
                                                    <div class="edit-dp">
                                                        <label class="fileContainer">
                                                            <i class="fa fa-camera"></i>
                                                            <input type="file">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="author-content">
                                                    <a class="h4 author-name"><?php echo $row[5] ?></a>
                                                    <div class="country"><?php echo $row[10] ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-9">
                                            <div class="profile-menu">
                                                <a>Chào Mừng Bạn Đến Với Chúng Tôi</a>
                                            </div>
                                            <ol class="folw-detail">
                                                <li><span>Chúng một ngày tốt lành ^-^</span></li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- user profile banner  -->
                            <div class="col-lg-9">
                                <div class="central-meta">
                                    <div class="about">
                                        <div class="d-flex flex-row mt-2">
                                            <div class="tab-pane fade show active" id="edit-profile">
                                                <div class="set-title">
                                                    <h5>Chỉnh sửa hồ sơ</h5>
                                                    <span>Quản lý thông tin hồ sơ và tài khoản của bạn!</span>
                                                </div>
                                                <div class="setting-meta">
                                                    <div class="change-photo">
                                                        <figure><img src="profile/images/male.png" alt=""></figure>
                                                        <div class="edit-img">
                                                            <form class="edit-phto">
                                                                <label class="fileContainer">
                                                                    <i class="fa fa-camera-retro"></i>
                                                                    Ảnh đại diện
                                                                    <input type="file">
                                                                </label>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="stg-form-area">
                                                <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
                                                    <form method="post" class="c-form" action="Setting.php" id="form">
                                                        <div class="uzer-nam">
                                                            <label>Tên tài khoản<span class="text-danger"> *</span></label>
                                                            <input type="text" value="<?php echo $row[3] ?>" name="tk"
                                                                required readonly>
                                                        </div>
                                                        <div class="uzer-nam">
                                                            <label>Họ tên<span class="text-danger"> *</span></label>
                                                            <input type="text" value="<?php echo $row[5] ?>"
                                                                name="hoten" required>
                                                        </div>
                                                        <div>
                                                            <label>Địa chỉ mail<span class="text-danger"> *</span></label>
                                                            <input type="text" value="<?php echo $row[6] ?>"
                                                                name="email" required>
                                                        </div>
                                                        <div>
                                                            <label>Số điện thoại</label>
                                                            <input type="text" value="<?php echo $row[9] ?>"
                                                                name="sodt">
                                                        </div>
                                                        <div>
                                                            <label>Giới tính<span class="text-danger"> *</span></label>
                                                            <input type="text" value="<?php echo $row[7] ?>"
                                                                name="gioitinh" required>
                                                        </div>
                                                        <div>
                                                            <label>Ngày sinh</label>
                                                            <input type="date" value="<?php echo $row[8] ?>"
                                                                name="ngaysinh">
                                                        </div>
                                                        <div>
                                                            <label>Tiểu sử</label>
                                                            <input type="text" style="height: 50px"
                                                                value="<?php echo $row[11] ?>" name="tieusu">
                                                        </div>
                                                        <div>
                                                            <label>Địa chỉ</label>
                                                            <input type="text" value="<?php echo $row[10] ?>"
                                                                name="diachi">
                                                        </div>
                                                        <button type="submit" data-ripple="" name="thoat"
                                                            formaction="1Xulydangxuat.php">Thoát</button>
                                                        <button type="submit" name="Update"
                                                            value="<?php echo $row[0] ?>">Lưu</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <aside class="sidebar static">
                                    <div class="widget">
                                        <h4 class="widget-title">Trang của bạn</h4>
                                        <div class="your-page">
                                            <figure><a title="" href="#"><img alt="" src="profile/images/male.png"></a>
                                            </figure>
                                            <div class="page-meta">
                                                <a class="underline" title="" href="#">Trang của tôi</a>
                                                <span><i class="ti-comment"></i>Tin <em class="bg-blue">9</em></span>
                                                <span><i class="ti-bell"></i>Thông báo <em
                                                        class="bg-purple">2</em></span>
                                            </div>
                                            <div class="page-likes">
                                                <ul class="nav nav-tabs likes-btn">
                                                    <li class="nav-item"><a data-toggle="tab" href="#link1"
                                                            class="active">thích</a></li>
                                                    <li class="nav-item"><a data-toggle="tab" href="#link2"
                                                            class="">xem</a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div><!-- sidebar -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<div class="container jumbotron" style="margin-top:20px">
    <table class="table table-bordered" id="myTable">

        <tr class="ex">
            <th width="auto">Mã hóa đơn</th>
            <th width="auto">Mã thành viên</th>
            <th width="auto">Địa điểm đi</th>
            <th width="auto">Địa điểm đến</th>
            <th width="auto">Ngày khởi hành</th>
            <th width="auto">Ngày kết thúc</th>
            <th width="auto">Số điện thoại</th>
            <th width="auto">Số lượng người</th>
            <th width="auto">Tổng tiền</th>
        </tr>


        <?php
            include "1connect.php";
            $str = "select* from hoadon, users where hoadon.id=users.id and dangnhap=1 ";
            $result = $connect->query($str);
            while ($row = $result->fetch_row()) {
                ?>
        <tr>
            <td><?php echo $row[2]; ?></td>
            <td><?php echo $row[3]; ?></td>
            <td><?php echo $row[4]; ?></td>
            <td><?php echo $row[5]; ?></td>
            <td><?php echo $row[6]; ?></td>
            <td><?php echo $row[7]; ?></td>
            <td><?php echo $row[8]; ?></td>
        </tr>
        <?php
            }
            ?>

    </table>
</div>
<?php
    $connect->close();
    include('Footer.php');
    ?>