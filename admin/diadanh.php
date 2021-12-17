<?php
include('Header.php');
?>
<div class="container-fluid al">
    <div id="clock"></div>
    <Br>
    <p class="timkiemnhanvien"><b>TÌM KIẾM ĐỊA DANH:</b></p><Br><Br>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Nhập mã địa danh cần tìm...">
    <i class="fa fa-search" aria-hidden="true"></i>

    <table class="table table-bordered" id="myTable">
        <thead>
            <tr class="ex">
                <th width="60px">Mã địa điểm</th>
                <th width="200px">Tên địa điểm</th>
                <th width="auto">Tiêu đề</th>
                <th width="90px">Ngày đăng</th>
                <th width="60px">Lượt xem</th>
                <th width="60px">Mã người dùng đăng</th>
                <th width="200px">Số tiền đặt tour</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "../1connect.php";
            $str = "select * from diadiem";
            $result = $connect->query($str);
            while ($row = $result->fetch_row()) {
                ?>
                <tr>
                    <td><?php echo $row[0]; ?></td>
                    <td><?php echo $row[2]; ?></td>
                    <td><?php echo $row[3]; ?></td>
                    <td><?php echo $row[5]; ?></td>
                    <td><?php echo $row[6]; ?></td>
                    <td><?php echo $row[7]; ?></td>
                    <td><?php echo $row[8]; ?></td>
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