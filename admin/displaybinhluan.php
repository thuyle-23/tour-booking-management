<?php
include "../1connect.php";

if(isset($_POST['displaySend'])){
    $table='<table class="table table-bordered" id="myTable">
    <thead>
    <tr class="ex">
    <th width="auto">Mã bình luận</th>
    <th width="auto">Mã thành viên</th>
    <th width="auto">Mã địa điểm</th>
    <th width="auto">Nội dung</th>
    <th width="auto">Ngày đăng bình luận</th>
    <th width="90px">Xóa</th>
</tr>
    </thead>';
    $sql="SELECT * FROM `binhluan`";
    $result=mysqli_query($connect,$sql);
    while($row=mysqli_fetch_assoc($result)){
        $ma=$row['ma'];
        $id=$row['id'];
        $madiadiem=$row['madiadiem'];
        $noidung=$row['noidung'];
        $ngaydangbl=$row['ngaydangbl'];

        $table.=' <tr>
        <td scope="row">'.$ma.'</td>
        <td>'.$id.'</td>
        <td>'.$madiadiem.'</td>
        <td>'.$noidung.'</td>
        <td>'.$ngaydangbl.'</td>
        <td>
        <button class="btn btn-danger" onclick="DeleteUser('.$ma.')">Xóa</button>
        </td>
      </tr>';
    }
    $table.='</table>';
    echo $table;
}
?>