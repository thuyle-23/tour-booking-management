<?php
  
    include "1connect.php";

    if (isset($_GET['mahoadon'])){
  
        $mahoadon1=$_GET['mahoadon'];
  
        $str="UPDATE `hoadon` SET trangthai = 2 WHERE mahoadon=$mahoadon1";

        mysqli_query($connect,$str);
    }
    header('location: Setting.php');
?>