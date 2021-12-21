
<?php
include "../1connect.php";

if(isset($_POST['displaySend'])){
    $table='<table class="table table-bordered" id="myTable">
    <thead>
      <tr>
        <th width="60px">Mã địa điểm</th>
        <th width="200px">Tên địa điểm</th>
        <th width="520px">Tiêu đề</th>
        <th width="90px">Ngày đăng</th>
        <th width="50px">Lượt xem</th>
        <th width="100px">Mã người dùng</th>
        <th width="90px">Số tiền đặt tour</th>
        <th width="90px">Sửa</th>
        <th width="90px">Xóa</th>
      </tr>
    </thead>';
    $sql="SELECT * FROM `diadiem`";
    $result=mysqli_query($connect,$sql);
    // $number=1;
    while($row=mysqli_fetch_assoc($result)){
        $madiadiem=$row['madiadiem'];
        $tendiadiem=$row['tendiadiem'];
        $tieude=$row['tieude'];
        // $noidung=$row['noidung'];
        $ngaydang=$row['ngaydang'];
        $luotxem=$row['luotxem'];
        $id=$row['id'];
        $sotien1nguoi=$row['sotien1nguoi'];

        $table.=' <tr>
        <td scope="row">'.$madiadiem.'</td>
        <td>'.$tendiadiem.'</td>
        <td>'.$tieude.'</td>
        
        <td>'.$ngaydang.'</td>
        <td>'.$luotxem.'</td>
        <td>'.$id.'</td>
        <td>'.$sotien1nguoi.'</td>

        <td>
        <button class="btn btn-success" data-toggle="modal" data-target="#updateModal" onclick="GetDetails('.$madiadiem.')">Sửa</button>
        </td>
        <td>
        <button class="btn btn-danger" onclick="DeleteUser('.$madiadiem.')">Xóa</button>
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