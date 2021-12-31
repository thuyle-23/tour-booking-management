<?php

include "1connect.php";

if (isset($_POST['dangnhap'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$user = validate($_POST['user']);
	$pass = validate($_POST['pass']);

	if (empty($user)) { 
		header("Location: Signin.php?error=Tên đăng nhập không được để trống");
	    exit();
	} 
	else if(!preg_match("/^[A-Za-z0-9_\.]{1,31}$/",$user)) {
        header("Location: Signin.php?error=Tên đăng nhập chỉ được chứa ký tự thường, in hoa và số");
	    exit();
	} 
    else if(empty($pass)) {
        header("Location: Signin.php?error=Mật khẩu không được để trống");
	    exit();
	} 
	else if(!preg_match("/^([\w_\.!@#$%^&*()]+){4,31}$/",$pass)) {
        header("Location: Signin.php?error=Mật khẩu phải có độ dài từ 4 đến 32 và không chứa ký tự đặc biệt");
	    exit();
	}
    else {
		$sql = "SELECT * FROM users WHERE user='$user' AND pass='$pass'";

		$result = mysqli_query($connect, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user'] === $user && $row['pass'] === $pass) {
                $str1 = "UPDATE users SET dangnhap=1 WHERE user='" . $_POST['user'] . "'and pass='" . $_POST['pass'] . "'";
                $result1 = $connect->query($str1);
            	header("Location: index.php");
		        exit();
            }
            else {
				header("Location: Signin.php?error=Tên đăng nhập hoặc Mật khẩu không đúng, vui lòng thử lại");
		        exit();
			}
		}
        else {
			header("Location: Signin.php?error=Tên đăng nhập hoặc Mật khẩu không đúng, vui lòng thử lại");
	        exit();
		}
	}
	
}
else {
	header("Location: Signin.php");
	exit();
}
?>