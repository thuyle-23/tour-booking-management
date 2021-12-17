<?php
include('header.php');
?>
<div class="container-fluid al">
    <div id="clock"></div>
    <Br>
    <p class="timkiemnhanvien"><b>TÌM KIẾM BÌNH LUẬN:</b></p><Br><Br>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Nhập mã bình luận cần tìm">
    <i class="fa fa-search" aria-hidden="true"></i>

    <table class="table table-bordered" id="myTable">
        <thead>
            <tr class="ex">
                <th width="150px">Mã bình luận</th>
                <th width="150px">Mã thành viên</th>
                <th width="150px">Mã địa danh</th>
                <th width="auto">Nội dung</th>
                <th width="auto">Ngày đăng</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "../1connect.php";
            $str = "select * from binhluan";
            $result = $connect->query($str);
            while ($row = $result->fetch_row()) {
                ?>
                <tr>
                    <td><?php echo $row[0]; ?></td>
                    <td><?php echo $row[1]; ?></td>
                    <td><?php echo $row[2]; ?></td>
                    <td><?php echo $row[3]; ?></td>
                    <td><?php echo $row[4]; ?></td>
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