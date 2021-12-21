<?php
include('Header.php');
?>
<style>
table,
th,
td {
    border: 1px solid white;
}

h3 {
    text-align: center,
        color: #1E90FF;
}
</style>

<div class="container-fluid al">
    <div id="clock"></div>
    <Br>
    <p class="timkiemnhanvien"><b>TÌM KIẾM ĐỊA DANH:</b></p><Br><Br>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Nhập mã địa danh cần tìm...">
    <i class="fa fa-search" aria-hidden="true"></i>
     <!-- Insert Model -->
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#completeModal">Thêm địa
        danh</button><Br><Br>

    <!-- Modal -->
    <div class="modal fade" id="completeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">THÊM ĐỊA DANH</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="form-group">
                    <label for="completetendiadiem">Tên địa điểm</label>
                    <input type="text" class="form-control" id="completetendiadiem" placeholder="Nhập tên địa điểm"
                        required>
                </div>
                <div class="form-group">
                    <label for="completetieude">Tiêu đề</label>
                    <input type="text" class="form-control" id="completetieude" placeholder="Nhập tiêu đề" required>
                </div>
                <!-- <div class="form-group">
                    <label for="completenoidung">Nội dung</label>
                    <input type="text" class="form-control" id="completenoidung" placeholder="Nhập nội dung">
                </div> -->
                <div class="form-group">
                    <label for="completengaydang">Ngày đăng</label>
                    <input type="text" class="form-control" id="completengaydang" placeholder="Nhập ngày đăng" required>
                </div>
                <div class="form-group">
                    <label for="completeluotxem">Lượt xem</label>
                    <input type="text" class="form-control" id="completeluotxem" placeholder="Nhập lượt xem" required>
                </div>
                <div class="form-group">
                    <label for="completeid">ID</label>
                    <input type="text" class="form-control" id="completeid" placeholder="Nhập ID" required>
                </div>
                <div class="form-group">
                    <label for="completesotien1nguoi">Số tiền 1 người</label>
                    <input type="text" class="form-control" id="completesotien1nguoi" placeholder="Nhập số tiền"
                        required>
                </div>
            </div>
                <div class="modal-footer">
					<button type="button" class="btn btn-primary" onclick="adduser()">Xác nhận</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

     <!-- Update Model -->
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">CẬP NHẬT ĐỊA DANH</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="form-group">
                    <label for="updatetendiadiem">Tên địa điểm</label>
                    <input type="text" class="form-control" id="updatetendiadiem" placeholder="Nhập tên địa điểm">
                </div>
                <div class="form-group">
                    <label for="updatetieude">Tiêu đề</label>
                    <input type="text" class="form-control" id="updatetieude" placeholder="Nhập tiêu đề">
                </div>
                <div class="form-group">
                    <label for="updatenoidung">Nội dung</label>
                    <input type="text" class="form-control" id="updatenoidung" placeholder="Nhập nội dung">
                </div>
                <div class="form-group">
                    <label for="updatengaydang">Ngày đăng</label>
                    <input type="text" class="form-control" id="updatengaydang" placeholder="Nhập ngày đăng">
                </div>
                <div class="form-group">
                    <label for="updateluotxem">Lượt xem</label>
                    <input type="text" class="form-control" id="updateluotxem" placeholder="Nhập lượt xem">
                </div>
                <div class="form-group">
                    <label for="updateid">ID</label>
                    <input type="text" class="form-control" id="updateid" placeholder="Nhập ID">
                </div>
                <div class="form-group">
                    <label for="updatesotien1nguoi">Số tiền 1 người</label>
                    <input type="text" class="form-control" id="updatesotien1nguoi" placeholder="Nhập số tiền">
                </div>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="updateDetails()">Xác nhận</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <input type="hidden" id="hiddendata">
                </div>
            </div>
        </div>
    </div>


    <div id="displayDataTable"></div>
</div>

<script>
$(document).ready(function() {
    displayData();
});

//Delete record
function DeleteUser(deletemahoadon) {
    $.ajax({
        url: "deletediadanh.php",
        type: 'post',
        data: {
            deletesend: deletemahoadon
        },
        success: function(data, status) {
            displayData();
        }
    })
}

function GetDetails(updatemadiadiem) {
    $('#hiddendata').val(updatemadiadiem);

    $.post("updatediadanh.php", {
        updatemadiadiem: updatemadiadiem
    }, function(data, status) {
        var userid = JSON.parse(data);
        $('#updatetendiadiem').val(userid.tendiadiem);
        $('#updatetieude').val(userid.tieude);
        $('#updatenoidung').val(userid.noidung);
        $('#updatengaydang').val(userid.ngaydang);
        $('#updateluotxem').val(userid.luotxem);
        $('#updateid').val(userid.id);
        $('#updatesotien1nguoi').val(userid.sotien1nguoi);
    });
    $('#updateModal').modal('show');
}

function updateDetails() {
    var updatetendiadiem = $('#updatetendiadiem').val();
    var updatetieude = $('#updatetieude').val();
    var updatenoidung = $('#updatenoidung').val();
    var updatengaydang = $('#updatengaydang').val();
    var updateluotxem = $('#updateluotxem').val();
    var updateid = $('#updateid').val();
    var updatesotien1nguoi = $('#updatesotien1nguoi').val();

    var hiddendata = $('#hiddendata').val();

    $.post("updatediadanh.php", {
        updatetendiadiem: updatetendiadiem,
        updatetieude: updatetieude,
        updatenoidung: updatenoidung,
        updatengaydang: updatengaydang,
        updateluotxem: updateluotxem,
        updateid: updateid,
        updatesotien1nguoi: updatesotien1nguoi,
        hiddendata: hiddendata
    }, function(data, status) {
        // $('#updateModal').modal('hide');
        displayData();
        // alert('Successfully')
        Swal.fire({
            title: "Cập nhật thành công",
            icon: "success",
            timer: 2000
        });
    });
}
// display function
function displayData() {
    var displayData = "true";
    $.ajax({
        url: "displaydiadanh.php",
        type: 'post',
        data: {
            displaySend: displayData
        },
        success: function(data, status) {
            $('#displayDataTable').html(data);
        }
    })
}


function adduser() {
    // var themhinhanhdd = $('#completehinhanhdd').val();
    var themtendiadiem = $('#completetendiadiem').val();
    var themtieude = $('#completetieude').val();
    // var themnoidung = $('#completenoidung').val();
    var themngaydang = $('#completengaydang').val();
    var themluotxem = $('#completeluotxem').val();
    var themid = $('#completeid').val();
    var themsotien1nguoi = $('#completesotien1nguoi').val();

    $.ajax({
        url: "insertdiadanh.php",
        type: "post",
        data: {
            // hinhanhddsend: themhinhanhdd,
            tendiadiemsend: themtendiadiem,
            tieudesend: themtieude,
            // noidungsend: themnoidung,
            ngaydangsend: themngaydang,
            luotxemsend: themluotxem,
            idsend: themid,
            sotien1nguoisend: themsotien1nguoi
        },
        success: function(data, status) {
            //function to display data
            // $('#completeModal').modal('hide');
            displayData();
            Swal.fire({
            title: "Thêm thành công",
            icon: "success",
            timer: 2000
        });
        }
    })
}
</script>

<?php
include('footer.php');
?>
<script>
const myFunction = () => {
    let filter = document.getElementById('myInput').value.toUpperCase();

    let myTable = document.getElementById('myTable');

    let tr = myTable.getElementsByTagName('tr');

    for (var i = 0; i < tr.length; i++) {
        let td = tr[i].getElementsByTagName('td')[0];

        if (td) {
            let textvalue = td.textContent || td.innerHTML;
            if (textvalue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>