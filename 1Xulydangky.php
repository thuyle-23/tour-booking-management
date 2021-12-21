<?php

include "1connect.php";

if (isset($_POST['user']) && isset($_POST['name']) && isset($_POST['email']) 
&& isset($_POST['pass'])&& isset($_POST['re_pass'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$user = validate($_POST['user']);
    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
	$pass = validate($_POST['pass']);
	$re_pass = validate($_POST['re_pass']);


	$user_data = 'user='. $user. '&name='. $name;


	if (empty($user)) {
		header("Location: Joinwithus.php?error=Tên đăng nhập không được để trống&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: Joinwithus.php?error=Mật khẩu không được để trống&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: Joinwithus.php?error=Xác nhận mật khẩu không được để trống&$user_data");
	    exit();
	}

	else if(empty($name)){
        header("Location: Joinwithus.php?error=Họ và tên không được để trống&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: Joinwithus.php?error=Mật khẩu xác nhận không chính xác, vui lòng thử lại&$user_data");
	    exit();
	}

	else{

	    $sql = "SELECT * FROM users WHERE user='$user' ";
		$result = mysqli_query($connect, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: Joinwithus.php?error=Tên đăng nhập đã được sử dụng&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(quyentruycap, dangnhap, user, pass, name, email) VALUES(0, 0, '$user', '$pass', '$name', '$email')";
           $result2 = mysqli_query($connect, $sql2);
           if ($result2) {
           	 header("Location: Joinwithus.php?success=Tài khoản đã được tạo thành công");
            //  header("Location: Signin.php");
	         exit();
           }else {
	           	header("Location: Joinwithus.php?error=Lỗi không xác định&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: Joinwithus.php");
	exit();
}
$connect->close();
?>