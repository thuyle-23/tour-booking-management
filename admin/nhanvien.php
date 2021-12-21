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
    <p class="timkiemnhanvien"><b>TÌM KIẾM NHÂN VIÊN:</b></p><Br><Br>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Nhập mã nhân viên cần tìm...">
    <i class="fa fa-search" aria-hidden="true"></i>
     <!-- Insert Model -->
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#completeModal">Thêm nhân viên</button><Br><Br>

    <!-- Modal -->
    <div class="modal fade" id="completeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">THÊM NHÂN VIÊN</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="form-group">
                    <label for="completequyentruycap">Quyền truy cập</label>
                    <input type="text" class="form-control" id="completequyentruycap" placeholder="1">
                </div>
                <div class="form-group">
                    <label for="completeuser">Tên đăng nhập</label>
                    <input type="text" class="form-control" id="completeuser" placeholder="Nhập tên đăng nhập"
                        required>
                </div>
                <div class="form-group">
                    <label for="completepass">Mật khẩu</label>
                    <input type="text" class="form-control" id="completepass" placeholder="Nhập mật khẩu" required>
                </div>
                <div class="form-group">
                    <label for="completename">Họ và tên</label>
                    <input type="text" class="form-control" id="completename" placeholder="Nhập họ và tên" required>
                </div>
                <div class="form-group">
                    <label for="completeemail">Email</label>
                    <input type="text" class="form-control" id="completeemail" placeholder="Nhập email" required>
                </div>
                <div class="form-group">
                    <label for="completegioitinh">Giới tính</label>
                    <input type="text" class="form-control" id="completegioitinh" placeholder="Nhập giới tính" required>
                </div>
                <div class="form-group">
                    <label for="completengaysinh">Ngày sinh</label>
                    <input type="text" class="form-control" id="completengaysinh" placeholder="Nhập ngày sinh"
                        required>
                </div>
                <div class="form-group">
                    <label for="completesodt">Số điện thoại</label>
                    <input type="text" class="form-control" id="completesodt" placeholder="Nhập số điện thoại"
                        required>
                </div>
                <div class="form-group">
                    <label for="completediachi">Địa chỉ</label>
                    <input type="text" class="form-control" id="completediachi" placeholder="Nhập địa chỉ"
                        required>
                </div>
                <div class="form-group">
                    <label for="completetieusu">Tiểu sử</label>
                    <input type="text" class="form-control" id="completetieusu" placeholder="Nhập tiểu sử"
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
                    <h3 class="modal-title" id="exampleModalLabel">CẬP NHẬT NHÂN VIÊN</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="form-group">
                    <label for="updateuser">Tên đăng nhập</label>
                    <input type="text" class="form-control" id="updateuser" placeholder="Nhập tên đăng nhập"
                        required>
                </div>
                <div class="form-group">
                    <label for="updatepass">Mật khẩu</label>
                    <input type="text" class="form-control" id="updatepass" placeholder="Nhập mật khẩu" required>
                </div>
                <div class="form-group">
                    <label for="updatename">Họ và tên</label>
                    <input type="text" class="form-control" id="updatename" placeholder="Nhập họ và tên" required>
                </div>
                <div class="form-group">
                    <label for="updateemail">Email</label>
                    <input type="text" class="form-control" id="updateemail" placeholder="Nhập email" required>
                </div>
                <div class="form-group">
                    <label for="updategioitinh">Giới tính</label>
                    <input type="text" class="form-control" id="updategioitinh" placeholder="Nhập giới tính" required>
                </div>
                <div class="form-group">
                    <label for="updatengaysinh">Ngày sinh</label>
                    <input type="text" class="form-control" id="updatengaysinh" placeholder="Nhập ngày sinh"
                        required>
                </div>
                <div class="form-group">
                    <label for="updatesodt">Số điện thoại</label>
                    <input type="text" class="form-control" id="updatesodt" placeholder="Nhập số điện thoại"
                        required>
                </div>
                <div class="form-group">
                    <label for="updatediachi">Địa chỉ</label>
                    <input type="text" class="form-control" id="updatediachi" placeholder="Nhập địa chỉ"
                        required>
                </div>
                <div class="form-group">
                    <label for="updatetieusu">Tiểu sử</label>
                    <input type="text" class="form-control" id="updatetieusu" placeholder="Nhập tiểu sử"
                        required>
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
function DeleteUser(deleteid) {
    $.ajax({
        url: "deletenhanvien.php",
        type: 'post',
        data: {
            deletesend: deleteid
        },
        success: function(data, status) {
            displayData();
        }
    })
}

function GetDetails(updateid) {
    $('#hiddendata').val(updateid);

    $.post("updatenhanvien.php", {
        updateid: updateid
    }, function(data, status) {
        var userid = JSON.parse(data);
        $('#updateuser').val(userid.user);
        $('#updatepass').val(userid.pass);
        $('#updatename').val(userid.name);
        $('#updateemail').val(userid.email);
        $('#updategioitinh').val(userid.gioitinh);
        $('#updatengaysinh').val(userid.ngaysinh);
        $('#updatesodt').val(userid.sodt);
        $('#updatediachi').val(userid.diachi);
        $('#updatetieusu').val(userid.tieusu);
    });
    $('#updateModal').modal('show');
}

function updateDetails() {
    var updateuser = $('#updateuser').val();
    var updatepass = $('#updatepass').val();
    var updatename = $('#updatename').val();
    var updateemail = $('#updateemail').val();
    var updategioitinh = $('#updategioitinh').val();
    var updatengaysinh = $('#updatengaysinh').val();
    var updatesodt = $('#updatesodt').val();
    var updatediachi = $('#updatediachi').val();
    var updatetieusu = $('#updatetieusu').val();

    var hiddendata = $('#hiddendata').val();

    $.post("updatenhanvien.php", {
        updateuser: updateuser,
        updatepass: updatepass,
        updatename: updatename,
        updateemail: updateemail,
        updategioitinh: updategioitinh,
        updatengaysinh: updatengaysinh,
        updatesodt: updatesodt,
        updatediachi: updatediachi,
        updatetieusu: updatetieusu,
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
        url: "displaynhanvien.php",
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
    var themquyentruycap = $('#completequyentruycap').val();
    var themuser = $('#completeuser').val();
    var thempass = $('#completepass').val();
    var themname = $('#completename').val();
    var thememail = $('#completeemail').val();
    var themgioitinh = $('#completegioitinh').val();
    var themngaysinh = $('#completengaysinh').val();
    var themsodt = $('#completesodt').val();
    var themdiachi = $('#completediachi').val();
    var themtieusu = $('#completetieusu').val();

    $.ajax({
        url: "insertnhanvien.php",
        type: "post",
        data: {
            quyentruycapsend: themquyentruycap,
            usersend: themuser,
            passsend: thempass,
            namesend: themname,
            emailsend: thememail,
            gioitinhsend: themgioitinh,
            ngaysinhsend: themngaysinh,
            sodtsend: themsodt,
            diachisend: themdiachi,
            tieususend: themtieusu
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