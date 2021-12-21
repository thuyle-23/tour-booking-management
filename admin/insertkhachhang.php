<?php
include "../1connect.php";

extract($_POST);
if(isset($_POST['usersend']) && isset($_POST['passsend'])
&& isset($_POST['namesend']) && isset($_POST['emailsend']) 
&& isset($_POST['gioitinhsend']) && isset($_POST['ngaysinhsend']) 
&& isset($_POST['sodtsend']) && isset($_POST['diachisend']) && isset($_POST['tieususend'])){

    $sql="INSERT INTO `users` (user, pass, name, email, gioitinh, ngaysinh, sodt, diachi, tieusu) VALUES 
    ('$usersend', '$passsend', '$namesend', '$emailsend', '$gioitinhsend', '$ngaysinhsend', '$sodtsend', '$diachisend', '$tieususend')";

    $result=mysqli_query($connect,$sql);
}

?>