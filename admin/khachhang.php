<?php
include('Header.php');
?>
<div class="container-fluid al">
    <div id="clock"></div>
    <Br>
    <p class="timkiemnhanvien"><b>TÌM KIẾM THÀNH VIÊN:</b></p><Br><Br>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Nhập mã thành viên cần tìm...">
    <i class="fa fa-search" aria-hidden="true"></i>

    <table class="table table-bordered" id="myTable">
        <thead>
            <tr class="ex">
                <th width="60px">Mã thành viên</th>
                <th width="60px">Quyền truy cập</th>
                <th width="60px">Đăng nhập</th>
                <th width="90px">Tên đăng nhập</th>
                <th width="60px">Mật khẩu</th>
                <th width="150px">Tên người dùng</th>
                <th width="120px">Email</th>
                <th width="40px">Giới tính</th>
                <th width="60px">Ngày sinh</th>
                <th width="70px">Số điện thoại</th>
                <th width="100px">Địa chỉ</th>
                <th width="auto">Tiểu sử</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "../1connect.php";
            $str = "select * from users";
            $result = $connect->query($str);
            while ($row = $result->fetch_row()) {
                ?>
                <tr>
                    <td><?php echo $row[0]; ?></td>
                    <td><?php echo $row[1]; ?></td>
                    <td><?php echo $row[2]; ?></td>
                    <td><?php echo $row[3]; ?></td>
                    <td><?php echo $row[4]; ?></td>
                    <td><?php echo $row[5]; ?></td>
                    <td><?php echo $row[6]; ?></td>
                    <td><?php echo $row[7]; ?></td>
                    <td><?php echo $row[8]; ?></td>
                    <td><?php echo $row[9]; ?></td>
                    <td><?php echo $row[10]; ?></td>
                    <td><?php echo $row[11]; ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <?php
    $connect->close();
    ?>
    <div id="pageNavPosition" class="text-right"></div>
    <script type="text/javascript">
        var pager = new Pager('myTable', 5);
        pager.init();
        pager.showPageNav('pager', 'pageNavPosition');
        pager.showPage(1);
    </script>
</div>
<?php
include('footer.php');
?>