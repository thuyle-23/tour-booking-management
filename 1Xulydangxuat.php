<?php

include "1connect.php";
if (isset($_POST['thoat'])) {
    $str = "UPDATE users SET dangnhap=0 where dangnhap=1";
    $result = $connect->query($str);
    include('index.php');
}
//$connect->close();
?>