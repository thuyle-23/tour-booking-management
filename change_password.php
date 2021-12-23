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
    <form action="validate_password.php" method="post">
        <form method="POST">
            <div class="signin">
                <h1 class="signin-heading">Change password<br></h1>
                <button class="signin-social">

                </button>
                <br>
                <div class="signin-or"><span>Or</span></div>
                <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>

                <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p>
                <?php } ?>
                <label for="fullname" class="signin-label">Tên đăng nhập</label>
                <input type="text" id="uname" class="signin-input" placeholder="Eg: John Doe" name="uname">
                <label for="fullname" class="signin-label">Mật khẩu cũ</label>
                <input type="password" id="opw" class="signin-input" placeholder="abc123" name="opw">
                <label for="password" class="signin-label">Mật khẩu mới</label>
                <input type="password" id="npw" class="signin-input" placeholder="abc123" name="npw">
                <label for="password" class="signin-label">Xác nhận mật khẩu mới</label>
                <input type="password" id="cpw" class="signin-input" placeholder="abc123" name="cpw">
                <button class="signin-submit" id="dangnhap" name="dangnhap">Xác nhận</button>

                <p class="signin-enror">
                    <a href="Signin.php" class="signin-enror-password">Trở về trang đăng nhập</a>
                </p>
            </div>
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

        <script src="js/sweetalert.min.js"></script>


</body>

</html>