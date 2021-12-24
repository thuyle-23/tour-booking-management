<?php
include('Header.php');
include "1connect.php";
$madiadiem = (int) $_POST['diadiem'];
$sqldiadiem = "select * from diadiem where madiadiem=$madiadiem";
$resultdiadiem = $connect->query($sqldiadiem);
$rowdiadiem = $resultdiadiem->fetch_row();

$sqltacgia = "select * from users where id=$rowdiadiem[7]";
$resulttacgia = $connect->query($sqltacgia);
$rowtacgia = $resulttacgia->fetch_row();

$sqlnguoidung = "select * from users where dangnhap=1";
$resultnguoidung = $connect->query($sqlnguoidung);
$rownguoidung = $resultnguoidung->fetch_row();

if (isset($_POST['nhapbl'])) {
    $mess = $_POST['mess'];
    $ngaydang = (String) date('m/d/Y', time());

    $sqlinsert = "INSERT INTO binhluan(id, madiadiem, noidung, ngaydangbl) VALUES ($rownguoidung[0], $madiadiem, '$mess', '$ngaydang')";
    $connect->query($sqlinsert);
}

$sqlbinhluan = "select users.name, binhluan.noidung, binhluan.ngaydangbl from binhluan, users where binhluan.id=users.id and madiadiem=$madiadiem";
$resultbinhluan = $connect->query($sqlbinhluan);
?>
<div class="container_wrapper">
    <section id="post-featured-image">
        <div class="post__featured-image1" style="background-image: url('<?php echo $rowdiadiem[1]; ?>');">
            <div class="post__title-container1">
                <h2><?php echo $rowdiadiem[2]; ?></h2>
                <p>Ngày <?php echo $rowdiadiem[5]; ?>  — <?php echo $rowtacgia[5]; ?>  — Lượt xem: <?php echo $rowdiadiem[6]; ?></p>
                <div class="post__avatar-container">
                    <div class="post__avatar"><a href="#">avatar</a></div>
                    <div class="post__avatar-name">
                        <h5>Được viết bởi</h5>
                        <p><?php echo $rowtacgia[5]; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php echo $rowdiadiem[4]; ?>
    <section id="post-author-bio">
        <div class="post__tags">
            <h6>TAGS</h6>
            <ul>
                <li><a href="#">CEBU,</a></li>
                <li><a href="#">CITYESACPE,</a></li>
                <li><a href="#">ELEGANT BEACH RESORT,</a></li>
                <li><a href="#">NORTH-CEBU,</a></li>
                <li><a href="#">RESORT,</a></li>
                <li><a href="#">REVIEW,</a></li>
                <li><a href="#">TRAVEL-REVIEW</a></li>
            </ul>
        </div>
        <div class="author-bio__container">
            <div class="author-bio__avatar"><a href="#">avatar </a></div>
            <div class="author-bio__description">
                <h2><?php echo $rowtacgia[5]; ?></h2>
                <p><?php echo $rowtacgia[11]; ?></p>
            </div>
            <div class="author-bio__social-media">
                <ul>
                    <li><a class="fa fa-facebook" href="#"></a></li>
                    <li><a class="fa fa-instagram" href="#"></a></li>
                    <li><a class="fa fa-envelope" href="#"></a></li>
                    <li><a class="fa fa-youtube" href="#"></a></li>
                    <li><a class="fa fa-link" href="#"></a></li>
                </ul>
            </div>
        </div>
    </section>

    <section id="post-comment">
        <div class="container jumbotron" style="margin-top:20px">
            <form method="post" action="1XuLyHoaDon.php">
                <h2><b>Du lịch bốn phương. Nhanh tay đặt ngay!</b></h2>
                <hr><br>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="dd"><b>ĐỊA ĐIỂM BẠN MUỐN ĐI</b></label>
                            <input type="text" class="form-control" id="dd" name="diadiemdi" placeholder="Select a location..." style="background: gainsboro" value="<?php echo $rownguoidung[10]; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="khoihanh"><b>NGÀY KHỞI HÀNH</b></label>
                            <input type="date" class="form-control" id="khoihanh" name="ngaykhoihanh" placeholder="Select date..." style="background: gainsboro">
                        </div>
                        <div class="form-group">
                            <label for="dt"><b>SỐ ĐIỆN THOẠI</b></label>
                            <input type="text" class="form-control" id="dt" name="dienthoai" placeholder="Your phone number..." value="<?php echo $rownguoidung[9]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="sotien"><b>SỐ TIỀN TRÊN MỘT NGƯỜI</b></label>
                            <input type="text" hidden name="sotientra" value="<?php echo $rowdiadiem[8]; ?>">
                            <input type="text" class="form-control" id="sotien" style="background: gainsboro" value="<?php echo $rowdiadiem[8]; ?>đ" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="ddd"><b>ĐỊA ĐIỂM BẠN MUỐN ĐẾN</b></label>
                            <input type="text" hidden name="diadiemden" value="<?php echo $rowdiadiem[2]; ?>">
                            <input type="text" class="form-control" id="ddd" style="background: gainsboro" value="<?php echo $rowdiadiem[2]; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="ketthuc"><b>NGÀY KẾT THÚC</b></label>
                            <input type="date" class="form-control" id="ketthuc" name="ngayketthuc" placeholder="Select date..." style="background: gainsboro">
                        </div>
                        <label for="nguoi"><b>SỐ LƯỢNG NGƯỜI</b></label>
                        <select class="form-control" id="nguoi" name="soluongnguoi" style="background: gainsboro">
                            <option selected>Số người cùng tham gia</option>
                            <option value="1">1 người</option>
                            <option value="2">2 người</option>
                            <option value="3">3 người</option>
                            <option value="4">4 người</option>
                            <option value="5">5 người</option>
                            <option value="6">6 người</option>
                            <option value="7">7 người</option>
                            <option value="8">8 người</option>
                            <option value="9">9 người</option>
                            <option value="10">10 người</option>
                        </select>
                        <br><br>
                        <button type="submit" class="btn btn-warning" name="dattour" style="width: 200px" value="<?php echo $rownguoidung[0]; ?>"><b>Đặt ngay</b></button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section id="post-comment">
        <h5>ĐÁNH GIÁ</h5>
        <?php
        while ($rowbinhluan = $resultbinhluan->fetch_row()) {
            ?>
            <div class="comment__container">
                <div class="comment__avatar"><a href="#">avatar </a></div>
                <div class="comment__description">
                    <h2><?php echo $rowbinhluan[0]; ?></h2><span><?php echo $rowbinhluan[2]; ?></span>
                    <p><?php echo $rowbinhluan[1]; ?></p>
                </div>
                <div class="comment__action"><a href="#">Trả lời</a></div>
            </div>
            <?php
        }
        ?>
    </section>
    <section id="comment-form">
        <h5>Để lại bình luận</h5>
        <form class="comment-form__container" method="post" action="Post.php">
            <input class="comment__message" placeholder="message" name="mess">
            <input hidden type="text" name="diadiem" value="<?php echo $madiadiem; ?>">
            <button class="comment__action" name="nhapbl" >Submit</button>
        </form>
    </section>
</div>
<?php
$connect->close();
include('Footer.php');
?>