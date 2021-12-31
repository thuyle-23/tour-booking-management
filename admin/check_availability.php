<?php
# create database connection
include "../1connect.php";
if(!empty($_POST["updateuser"])) {
  $query = "SELECT * FROM `users` WHERE user='" . $_POST["updateuser"] . "'";
  $result = mysqli_query($connect,$query);
  $count = mysqli_num_rows($result);
  if($count>0) {
    echo "<span style='color:red'>Tên đăng nhập đã tồn tại</span>";
    // echo "<script>$('#submit').prop('disabled',true);</script>";
  }else{
    // echo "<span style='color:green'>Tên đăng nhập </span>";
    // echo "<script>$('#submit').prop('disabled',false);</script>";
  }
}
?>