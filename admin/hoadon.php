<?php
include('Header.php');
?>
<div class="container-fluid al">
    <div id="clock"></div>
    <Br>
    <p class="timkiemnhanvien"><b>TÌM KIẾM HÓA ĐƠN:</b></p><Br><Br>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Nhập mã hóa đơn cần tìm...">
    <i class="fa fa-search" aria-hidden="true"></i>

    <table class="table table-bordered" id="myTable">
        <thead>
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
        </thead>
        <tbody>
            <?php
            include "../1connect.php";
            $str = "select * from hoadon";
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