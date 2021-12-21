
<?php
include "../1connect.php";

if(isset($_POST['displaySend'])){
    $table='<table class="table table-bordered" id="myTable">
    <thead>
    <tr class="ex">
    <th width="auto">Mã khách hàng</th>
    <th width="auto">Trạng thái đăng nhập</th>
    <th width="auto">Tên đăng nhập</th>
    <th width="auto">Mật khẩu</th>
    <th width="auto">Họ và tên</th>
    <th width="auto">Email</th>
    <th width="auto">Giới tính</th>
    <th width="auto">Ngày sinh</th>
    <th width="auto">Số điện thoại</th>
    <th width="auto">Địa chỉ</th>
    <th width="auto">Tiểu sử</th>
    <th width="auto">Sửa</th>
    <th width="90px">Xóa</th>
</tr>
    </thead>';
    $sql="SELECT * FROM `users` where quyentruycap=0";
    $result=mysqli_query($connect,$sql);
    // $number=1;
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $dangnhap=$row['dangnhap'];
        $user=$row['user'];
        $pass=$row['pass'];
        $name=$row['name'];
        $email=$row['email'];
        $gioitinh=$row['gioitinh'];
        $ngaysinh=$row['ngaysinh'];
        $sodt=$row['sodt'];
        $diachi=$row['diachi'];
        $tieusu=$row['tieusu'];

        $table.=' <tr>
        <td scope="row">'.$id.'</td>
        <td>'.$dangnhap.'</td>
        <td>'.$user.'</td>
        <td>'.$pass.'</td>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$gioitinh.'</td>
        <td>'.$ngaysinh.'</td>
        <td>'.$sodt.'</td>
        <td>'.$diachi.'</td>
        <td>'.$tieusu.'</td>

        <td>
        <button class="btn btn-success" data-toggle="modal" data-target="#updateModal" onclick="GetDetails('.$id.')">Sửa</button>
        </td>
        <td>
        <button class="btn btn-danger" onclick="DeleteUser('.$id.')">Xóa</button>
        </td>
      </tr>';
      // $number++;
    }
    $table.='</table>';
    echo $table;
}
?>
<div id="pageNavPosition" class="text-right"></div>
<script type="text/javascript">
var pager = new Pager('myTable', 5);
pager.init();
pager.showPageNav('pager', 'pageNavPosition');
pager.showPage(1);
</script>
</div>