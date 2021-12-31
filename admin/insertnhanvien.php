<?php
include "../1connect.php";

extract($_POST);
if(isset($_POST['quyentruycapsend']) && isset($_POST['usersend']) && isset($_POST['passsend'])
&& isset($_POST['namesend']) && isset($_POST['emailsend']) 
&& isset($_POST['gioitinhsend']) && isset($_POST['ngaysinhsend']) 
&& isset($_POST['sodtsend']) && isset($_POST['diachisend']) && isset($_POST['tieususend'])){

    $sql = "SELECT * FROM users WHERE user='$usersend'";
	$result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo json_encode(array("statusCode"=>201));
        exit();
    } else {
        $sql2= "INSERT INTO `users` (quyentruycap, user, pass, name, email, gioitinh, ngaysinh, sodt, diachi, tieusu) VALUES 
    ('$quyentruycapsend', '$usersend', '$passsend', '$namesend', '$emailsend', '$gioitinhsend', '$ngaysinhsend', '$sodtsend', '$diachisend', '$tieususend')";
    $result2 = mysqli_query($connect, $sql2);
    echo json_encode(array("statusCode"=>200));
    }

    // $sql="INSERT INTO `users` (quyentruycap, user, pass, name, email, gioitinh, ngaysinh, sodt, diachi, tieusu) VALUES 
    // ('$quyentruycapsend', '$usersend', '$passsend', '$namesend', '$emailsend', '$gioitinhsend', '$ngaysinhsend', '$sodtsend', '$diachisend', '$tieususend')";

    // $result=mysqli_query($connect,$sql);
}

?>