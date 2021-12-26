
   
<?php 
session_start();

include "1connect.php";

if (isset($_POST['uname']) && isset($_POST['npw'])
    && isset($_POST['cpw'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$opw = validate($_POST['opw']);
	$npw = validate($_POST['npw']);
	$cpw = validate($_POST['cpw']);
    
	if(empty($opw)){
      header("Location: change_password.php?error=Không để trống mật khẩu cũ");
	  exit();
    }
	else if(empty($npw)){
      header("Location: change_password.php?error=Không để trống mật khẩu mới");
	  exit();
    }
	else if(!preg_match("/^([\w_\.!@#$%^&*()]+){4,31}$/",$npw)) {
        header("Location: change_password.php?error=Mật khẩu phải có độ dài từ 4 đến 32 và không chứa ký tự đặc biệt");
	    exit();
	}
	else if($npw !== $cpw){
      header("Location: change_password.php?error=Mật khẩu xác nhận không chính xác");
	  exit();
    }else {

        $sql = "SELECT user, pass
                FROM users WHERE 
                user='$uname' AND pass='$opw'";
        $result = mysqli_query($connect, $sql);
        if(mysqli_num_rows($result) === 1){
        	
        	$sql_2 = "UPDATE users
        	          SET pass='$npw'
        	          WHERE user='$uname'";
        	mysqli_query($connect, $sql_2);
        	header("Location: change_password.php?success=Đổi mật khẩu thành công");
	        exit();

        }else {
        	header("Location: change_password.php?error=Sai mật khẩu");
	        exit();
        }

	}

}else{
	header("Location: change_password.php");
	exit();
}

