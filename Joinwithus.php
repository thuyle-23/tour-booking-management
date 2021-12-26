<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" style="text\css" href="style1.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>Cityespaces</title>
    </head>
    <style>
        .success {
   background: #D4EDDA;
   color: #40754C;
   padding: 10px;
   width: 100%;
   border-radius: 5px;
   margin: 20px auto;
   font-size: 15px;
}
    .error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 100%;
   border-radius: 5px;
   margin: 20px auto;
   font-size: 15px;
}
</style>
    <body>
        <form action="1Xulydangky.php" method="post">
            <div class="signup">
                <h1 class="signup-heading">Create Account</h1>
                <button class="signup-social">
                    
                    
                </button>
                <div class="signup-or"><span>Or</span></div>
                <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
          <!-- <p><span class="error">* required field</span></p> -->
                <label for="username" class="signup-label">Tên đăng nhập<span class="text-danger"> *</span></label>
                <input type="text" id="fulname" class="signup-input" placeholder="Eg: JohnDoe" name="user" required>
                <label for="fullname" class="signup-label">Họ và tên<span class="text-danger"> *</span></label>
                <input type="text" id="fulname" class="signup-input" placeholder="Eg: John Doe" name="name" required>
                <label for="email" class="signup-label">Địa chỉ email<span class="text-danger"> *</span></label>
                <input type="email" id="email" class="signup-input" placeholder="gmail.com" name="email" required>
                <label for="password" class="signup-label">Mật khẩu<span class="text-danger"> *</span></label>
                <input type="password" id="password" class="signup-input" placeholder="abc123" name="pass" required>
                <label for="confirm" class="signup-label">Xác nhận mật khẩu<span class="text-danger"> *</span></label>
                <input type="password" id="confirm" class="signup-input" placeholder="abc123" name="re_pass" required>
                <label for="pollicy" class="signup-pollicy">
                    <input type="radio" id="pollicy" class="signup-pollicy" name="pollicy" value="pollicy">Tôi đồng ý với Cityspace về <b>Điều khoản dịch vụ</b> <a>và</a> <b>Chính sách bảo mật</b></label>
                <button class="signup-submit" id="dangki" name="dangki">Đăng ký</button>
                
                <p class="signup-already">
                    <span>Bạn đã có tài khoản? </span>
                    <a href="Signin.php" class="signup-login-link">Đăng nhập</a>
                </p>
            </div>
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <!-- <script type="text/javascript">
            $(function(){
                $('#dangki').click(function(){
                    Swal.fire({
                        'title':'Hello world',
                        'text':'This is from',
                        'type':'success'
                    })
            });
        });
        </script> -->
    </body>
</html>