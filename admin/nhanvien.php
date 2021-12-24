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

.container {
    margin-top: 30px;
}
</style>

<link rel="stylesheet" type="text/css" href="http://parsleyjs.org/src/parsley.css" />

<div class="container-fluid al">
    <div id="clock"></div>
    <Br>
    <p class="timkiemnhanvien"><b>TÌM KIẾM NHÂN VIÊN:</b></p><Br><Br>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Nhập mã nhân viên cần tìm...">
    <i class="fa fa-search" aria-hidden="true"></i>
    <!-- Insert Model -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#completeModal">Thêm nhân
        viên</button><Br><Br>

    <!-- Modal -->
    <div class="modal fade" id="completeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form id="doctor_form">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-header">
                            <h3 class="modal-title" id="exampleModalLabel">THÊM NHÂN VIÊN</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="form-group">
                            <br>
                            <label for="completequyentruycap">Quyền truy cập</label>
                            <input type="text" class="form-control" id="completequyentruycap" value="1" readonly>
                        </div>
                        <div class="form-group">
                            <label for="completeuser">Tên đăng nhập<span class="text-danger"> *</span></label>
                            <input type="text" id="completeuser" placeholder="Nhập tên đăng nhập" required
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="completepass">Mật khẩu<span class="text-danger"> *</span></label>
                            <input type="password" class="form-control" id="completepass" placeholder="Nhập mật khẩu"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="completename">Họ và tên<span class="text-danger"> *</span></label>
                            <input type="text" class="form-control" id="completename" placeholder="Nhập họ và tên"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="completeemail">Email<span class="text-danger"> *</span></label>
                            <input type="email" class="form-control" id="completeemail" placeholder="Nhập email"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="completegioitinh">Giới tính<span class="text-danger"> *</span></label>
                            <select class="form-control" id="completegioitinh" name="completegioitinh">
                                <option selected>Chọn giới tính</option>
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="completengaysinh">Ngày sinh</label>
                            <input type="date" class="form-control" id="completengaysinh" placeholder="Nhập ngày sinh"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="completesodt">Số điện thoại</label>
                            <input type="text" class="form-control" id="completesodt" placeholder="Nhập số điện thoại">
                        </div>
                        <div class="form-group">
                            <label for="completediachi">Địa chỉ</label>
                            <input type="text" class="form-control" id="completediachi" placeholder="Nhập địa chỉ">
                        </div>
                        <div class="form-group">
                            <label for="completetieusu">Tiểu sử</label>
                            <input type="text" class="form-control" id="completetieusu" placeholder="Nhập tiểu sử">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="adduser()">Xác nhận</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Update Modal -->
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
                        <br>
                        <label for="updateuser">Tên đăng nhập<span class="text-danger"> *</span></label>
                        <input type="text" class="form-control" id="updateuser" placeholder="Nhập tên đăng nhập"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="updatepass">Mật khẩu<span class="text-danger"> *</span></label>
                        <input type="password" class="form-control" id="updatepass" placeholder="Nhập mật khẩu" required>
                    </div>
                    <div class="form-group">
                        <label for="updatename">Họ và tên<span class="text-danger"> *</span></label>
                        <input type="text" class="form-control" id="updatename" placeholder="Nhập họ và tên" required>
                    </div>
                    <div class="form-group">
                        <label for="updateemail">Email<span class="text-danger"> *</span></label>
                        <input type="email" class="form-control" id="updateemail" placeholder="Nhập email" required>
                    </div>
                    <div class="form-group">
                        <label for="updategioitinh">Giới tính<span class="text-danger"> *</span></label>
                        <select class="form-control" id="updategioitinh" name="updategioitinh">
                            <option selected>Chọn giới tính</option>
                            <option value="Nam">Nam</option>
                            <option value="Nữ">Nữ</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="updatengaysinh">Ngày sinh</label>
                        <input type="date" class="form-control" id="updatengaysinh" placeholder="Nhập ngày sinh"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="updatesodt">Số điện thoại</label>
                        <input type="text" class="form-control" id="updatesodt" placeholder="Nhập số điện thoại"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="updatediachi">Địa chỉ</label>
                        <input type="text" class="form-control" id="updatediachi" placeholder="Nhập địa chỉ" required>
                    </div>
                    <div class="form-group">
                        <label for="updatetieusu">Tiểu sử</label>
                        <input type="text" class="form-control" id="updatetieusu" placeholder="Nhập tiểu sử" required>
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
            Swal.fire({
                title: "Xóa thành công",
                icon: "success",
                timer: 2000
            });
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

    var reg_user = /^[A-Za-z0-9_\.]{1,31}$/;
    var reg_pass = /^([\w_\.!@#$%^&*()]+){4,31}$/;
    var reg_number = /^[0-9]{0,31}$/;
    var reg_email = /^[A-Za-z0-9_.]{6,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/;
    var reg_name = /^([\w_\.!@#$%^&*()]+)*/;

    if (updateuser.trim() == '') {
        alert('Không để trống Tên đăng nhập.');
        $('#updateuser').focus();
        return false;
    } else if (!reg_user.test(updateuser)) {
        alert('Tên đăng nhập chỉ được chứa ký tự thường, in hoa và số.');
        $('#updateuser').focus();
        return false;
    } else if (updatepass.trim() == '') {
        alert('Không để trống Mật khẩu.');
        $('#updatepass').focus();
        return false;
    } else if (!reg_pass.test(updatepass)) {
        alert('Mật khẩu phải có độ dài từ 6 đến 32 và không chứa ký tự đặc biệt.');
        $('#updatepass').focus();
        return false;
    } else if (updatename.trim() == '') {
        alert('Không để trống Họ và tên.');
        $('#updatename').focus();
        return false;
    } else if (!reg_name.test(updatename)) {
        alert('Họ và tên chỉ chứa ký tự chữ cái (a-z)(A-Z) và khoảng trắng.');
        $('#updatename').focus();
        return false;
    } else if (!reg_email.test(updateemail)) {
        alert('Nhập sai định dạng email.');
        $('#updateemail').focus();
        return false;
    } else if (updategioitinh.trim() == '') {
        alert('Không để trống Giới tính.');
        $('#updategioitinh').focus();
        return false;
    } else if (!reg_number.test(updatesodt)) {
        alert('Nhập sai định dạng số điện thoại.');
        $('#updatesodt').focus();
        return false;
    } else {
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
            Swal.fire({
                title: "Cập nhật thành công",
                icon: "success",
                timer: 3000
            });
        });
    }
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


    var reg_user = /^[A-Za-z0-9_\.]{1,31}$/;
    var reg_pass = /^([\w_\.!@#$%^&*()]+){4,31}$/;
    var reg_number = /^[0-9]{0,31}$/;
    var reg_email = /^[A-Za-z0-9_.]{6,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/;
    var reg_name = /^([\w_\.!@#$%^&*()]+)*/;

    if (themuser.trim() == '') {
        alert('Không để trống Tên đăng nhập.');
        $('#completeuser').focus();
        return false;
    } else if (!reg_user.test(themuser)) {
        alert('Tên đăng nhập chỉ được chứa ký tự thường, in hoa và số.');
        $('#completeuser').focus();
        return false;
    } else if (thempass.trim() == '') {
        alert('Không để trống Mật khẩu.');
        $('#completepass').focus();
        return false;
    } else if (!reg_pass.test(thempass)) {
        alert('Mật khẩu phải có độ dài từ 6 đến 32 và không chứa ký tự đặc biệt.');
        $('#completepass').focus();
        return false;
    } else if (themname.trim() == '') {
        alert('Không để trống Họ và tên.');
        $('#completename').focus();
        return false;
    } else if (!reg_name.test(themname)) {
        alert('Họ và tên chỉ chứa ký tự chữ cái (a-z)(A-Z) và khoảng trắng.');
        $('#completename').focus();
        return false;
    } else if (!reg_email.test(thememail)) {
        alert('Nhập sai định dạng email.');
        $('#completeemail').focus();
        return false;
    } else if (themgioitinh.trim() == '') {
        alert('Không để trống Giới tính.');
        $('#completegioitinh').focus();
        return false;
    } else if (!reg_number.test(themsodt)) {
        alert('Nhập sai định dạng số điện thoại.');
        $('#completesodt').focus();
        return false;
    } else {
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
                displayData();
                Swal.fire({
                    title: "Thêm nhân viên thành công",
                    icon: "success",
                    timer: 3000
                });
            }
        })
    }

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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>