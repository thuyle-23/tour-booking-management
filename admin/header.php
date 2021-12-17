
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
              integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="author" content="Bin-It">
        <meta property="og:url" />
        <meta property="og:type" content="truongbinit" />
        <meta property="og:title" content="Website TruongBin" />
        <meta property="og:description" content="Wellcome to my Website" />



        <title>Nhân Viên | Quản Lý Đặt Tour</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
              integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <!--===============================================================================================-->
        <link rel="stylesheet" href="css/style.css">
        <!-- Latest compiled and minified CSS -->
        <!--===============================================================================================-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <!-- jQuery library -->
        <!--===============================================================================================-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <!--===============================================================================================-->
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
        <!--===============================================================================================-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
        <!--===============================================================================================-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!--===============================================================================================-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


        <script type="text/javascript">
            //Phân Trang Cho Table
            function Pager(tableName, itemsPerPage) {
                this.tableName = tableName;
                this.itemsPerPage = itemsPerPage;
                this.currentPage = 1;
                this.pages = 0;
                this.inited = false;

                this.showRecords = function (from, to) {
                    var rows = document.getElementById(tableName).rows;
                    for (var i = 1; i < rows.length; i++) {
                        if (i < from || i > to)
                            rows[i].style.display = 'none';
                        else
                            rows[i].style.display = '';
                    }
                }

                this.showPage = function (pageNumber) {
                    if (!this.inited) {
                        alert("not inited");
                        return;
                    }
                    var oldPageAnchor = document.getElementById('pg' + this.currentPage);
                    oldPageAnchor.className = 'pg-normal';

                    this.currentPage = pageNumber;
                    var newPageAnchor = document.getElementById('pg' + this.currentPage);
                    newPageAnchor.className = 'pg-selected';

                    var from = (pageNumber - 1) * itemsPerPage + 1;
                    var to = from + itemsPerPage - 1;
                    this.showRecords(from, to);
                }

                this.prev = function () {
                    if (this.currentPage > 1)
                        this.showPage(this.currentPage - 1);
                }

                this.next = function () {
                    if (this.currentPage < this.pages) {
                        this.showPage(this.currentPage + 1);
                    }
                }

                this.init = function () {
                    var rows = document.getElementById(tableName).rows;
                    var records = (rows.length - 1);
                    this.pages = Math.ceil(records / itemsPerPage);
                    this.inited = true;
                }
                this.showPageNav = function (pagerName, positionId) {
                    if (!this.inited) {
                        alert("not inited");
                        return;
                    }
                    var element = document.getElementById(positionId);

                    var pagerHtml = '<span onclick="' + pagerName +
                            '.prev();" class="pg-normal">&#171</span> | ';
                    for (var page = 1; page <= this.pages; page++)
                        pagerHtml += '<span id="pg' + page + '" class="pg-normal" onclick="' + pagerName +
                                '.showPage(' + page + ');">' + page + '</span> | ';
                    pagerHtml += '<span onclick="' + pagerName + '.next();" class="pg-normal">&#187;</span>';

                    element.innerHTML = pagerHtml;
                }
            }
        </script>
    </head>

    <body onload="time()">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <i class="fas fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="#"><i class="fa fa-user-circle" aria-hidden="true"></i> QUẢN
                        LÝ THÀNH VIÊN</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="khachhang.php" data-toggle="tooltip" data-placement="bottom" title="THÀNH VIÊN">THÀNH VIÊN</a></li>
                        <li><a href="diadanh.php" data-toggle="tooltip" data-placement="bottom" title="ĐỊA DANH">ĐỊA DANH</a></li>
                        <li><a href="hoadon.php" data-toggle="tooltip" data-placement="bottom" title="HÓA ĐƠN ĐẶT TOUR">HÓA ĐƠN ĐẶT TOUR</a></li>
                        <li><a href="binhluan.php" data-toggle="tooltip" data-placement="bottom" title="BÁO CÁO">BÌNH LUẬN</a></li>
                        <li><a href="../index.php" data-toggle="tooltip" data-placement="bottom" title="QUAY LẠI TRANG CHỦ">QUAY LẠI TRANG CHỦ</a></li>
                        <li>
                            <form action="../1Xulydangxuat.php" method="post">
                                <button type="submit" name='thoat' style="border: none; background-color: white; margin-top: 13px"><b>ĐĂNG XUẤT</b></button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>