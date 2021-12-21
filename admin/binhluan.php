<?php
include('Header.php');
?>
<div class="container-fluid al">
    <div id="clock"></div>
    <Br>
    <p class="timkiemnhanvien"><b>TÌM KIẾM BÌNH LUẬN:</b></p><Br><Br>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Nhập mã bình luận cần tìm...">
    <i class="fa fa-search" aria-hidden="true"></i>

    <div id="displayDataTable"></div>

    <div id="pageNavPosition" class="text-right"></div>
    <script type="text/javascript">
        var pager = new Pager('myTable', 5);
        pager.init();
        pager.showPageNav('pager', 'pageNavPosition');
        pager.showPage(1);
    </script>
</div>
<script>
$(document).ready(function() {
    displayData();
});

//Delete record
function DeleteUser(deletema) {
    $.ajax({
        url: "deletebinhluan.php",
        type: 'post',
        data: {
            deletesend: deletema
        },
        success: function(data, status) {
            displayData();
        }
    })
}

// display function
function displayData() {
    var displayData = "true";
    $.ajax({
        url: "displaybinhluan.php",
        type: 'post',
        data: {
            displaySend: displayData
        },
        success: function(data, status) {
            $('#displayDataTable').html(data);
        }
    })
}
</script>

<?php
include('footer.php');
?>