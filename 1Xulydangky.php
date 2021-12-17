<?php

include "1connect.php";
if (isset($_POST['dangki'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sql = "INSERT INTO users(quyentruycap, dangnhap, user, pass, name, email) VALUES (0, 0, '$username', '$password', '$name', '$email')";
    if ($connect->query($sql) == true) {
        include('index.php');
    }
}
$connect->close();
?>