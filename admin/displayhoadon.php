<?php
include "../1connect.php";

if(isset($_POST['displaySend'])){
    $table='<table class="table table-bordered" id="myTable">
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
    <th width="auto">Xác nhận hóa đơn</th>
    <th width="90px">Xóa</th>
</tr>
    </thead>';
    $sql="SELECT * FROM `hoadon`";
    $result=mysqli_query($connect,$sql);
    // $number=1;
    while($row=mysqli_fetch_assoc($result)){
        $mahoadon=$row['mahoadon'];
        $id=$row['id'];
        $diadiemdi=$row['diadiemdi'];
        $diadiemden=$row['diadiemden'];
        $ngaykhoihanh=$row['ngaykhoihanh'];
        $ngayketthuc=$row['ngayketthuc'];
        $sodienthoai=$row['sodienthoai'];
        $soluongnguoi=$row['soluongnguoi'];
        $tongtien=$row['tongtien'];
        $trangthai=$row['trangthai'];

        $table.=' <tr>
        <td scope="row">'.$mahoadon.'</td>
        <td>'.$id.'</td>
        <td>'.$diadiemdi.'</td>
        <td>'.$diadiemden.'</td>
        <td>'.$ngaykhoihanh.'</td>
        <td>'.$ngayketthuc.'</td>
        <td>'.$sodienthoai.'</td>
        <td>'.$soluongnguoi.'</td>
        <td>'.$tongtien.'</td>
        <td> <a href=cancel_hoadon.php?mahoadon=".$mahoadon." class="btn btn-danger">Xác nhận</a>
        </td>
        <td>
        <button class="btn btn-danger" onclick="DeleteUser('.$mahoadon.')">Xóa</button>
        </td>
      </tr>';
    //   $number++;
    }
    $table.='</table>';
    echo $table;
}
?>