<?php
include "../1connect.php";

if(isset($_POST['deletesend'])){
    $unique=$_POST['deletesend'];

    $sql="DELETE FROM `hoadon` WHERE mahoadon=$unique";

    $result=mysqli_query($connect, $sql);
}
?>