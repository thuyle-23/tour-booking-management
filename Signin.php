
<!DOCTYPE html>
<html>
<style>
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
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" style="text\css" href="style.css">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'
        type='text/css' />
    <title>Cityespaces</title>
</head>

<body>
    <form action="1Xulydangnhap.php" method="post">
    <form method="POST">
        <div class="signin">
            <h1 class="signin-heading">Welcome to <br> Cityescape</br></h1>
            <button class="signin-social">

            </button>

            <div class="signin-or"><span>Or</span></div>
            <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
            <label for="fullname" class="signin-label">Tên đăng nhập</label>
            <input type="text" id="fulname" class="signin-input" placeholder="Eg: John Doe" name="user">
            <label for="password" class="signin-label">Mật khẩu</label>
            <input type="password" id="password" class="signin-input" placeholder="abc123" name="pass">
            <button class="signin-submit" id="dangnhap" name="dangnhap">Đăng nhập</button>

            <p class="signin-enror">
                <a href="change_password.php" class="signin-enror-password">Quên mật khẩu?</a>
            </p>
            <div class="signin-new"></div>
            <b class="signin-suggest">Bạn vừa biết đến Cityescape?</b>
            <a class="signin-signup" style="text-decoration: none" href="Joinwithus.php">Đăng ký</a>
        </div>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<script src="js/sweetalert.min.js"></script>


</body>
</html>

