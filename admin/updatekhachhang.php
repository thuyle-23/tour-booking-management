<?php
include "../1connect.php";

if (isset($_POST['updateid'])){
    $user_id=$_POST['updateid'];

    $sql="Select * from `users` where id=$user_id";
    $result=mysqli_query($connect, $sql);
    $response = array();
    while ($row=mysqli_fetch_assoc($result)){
        $response=$row;
    }
    echo json_encode($response);
}else{
    $response['status']=200;
    $response['message']="Invalid or data not found";
}

//update query

if(isset($_POST['hiddendata'])){
    $uniqueid=$_POST['hiddendata'];
    $user=$_POST['updateuser'];
    $pass=$_POST['updatepass'];
    $name=$_POST['updatename'];
    $email=$_POST['updateemail'];
    $gioitinh=$_POST['updategioitinh'];
    $ngaysinh=$_POST['updatengaysinh'];
    $sodt=$_POST['updatesodt'];
    $diachi=$_POST['updatediachi'];
    $tieusu=$_POST['updatetieusu'];

    $sql = "SELECT * FROM users WHERE user='$user', pass='$pass', 
    name='$name', email='$email', gioitinh='$gioitinh', 
    ngaysinh='$ngaysinh', sodt='$sodt', diachi='$diachi', tieusu='$tieusu'";
	$result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) > 0) {
///////////////////////////////////
        exit();
    } else {
        $sql2= "UPDATE `users` SET user='$user', pass='$pass', 
        name='$name', email='$email', gioitinh='$gioitinh', 
        ngaysinh='$ngaysinh', sodt='$sodt', diachi='$diachi', tieusu='$tieusu' WHERE id=$uniqueid";
        $result2 = mysqli_query($connect, $sql2);
    }
    // $sql="UPDATE `users` SET user='$user', pass='$pass', 
    // name='$name', email='$email', gioitinh='$gioitinh', 
    // ngaysinh='$ngaysinh', sodt='$sodt', diachi='$diachi', tieusu='$tieusu' WHERE id=$uniqueid";

    // $result=mysqli_query($connect, $sql);

}


?>