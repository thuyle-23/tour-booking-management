<?php

include "1connect.php";
if (isset($_POST['dangnhap'])) {
    $str = "select * from users where user='" . $_POST['user'] . "'and pass='" . $_POST['pass'] . "'";
    $result = $connect->query($str);
    if ($result->fetch_row()) {
        $str1 = "UPDATE users SET dangnhap=1 WHERE user='" . $_POST['user'] . "'and pass='" . $_POST['pass'] . "'";
        $result1 = $connect->query($str1);
        include('index.php');
    } else {
        include('joinwithus.php');
    }
}
$connect->close();
?>
