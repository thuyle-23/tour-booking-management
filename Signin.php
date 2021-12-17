<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" style="text\css" href="style.css">
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'/>
        <title>Cityespaces</title>
    </head>
    <body>
        <form action="1Xulydangnhap.php" method="post">
            <div class="signin">
                <h1 class="signin-heading">Welcome to <br> Cityescape</br></h1>
                <button class="signin-social">
                   
                </button>
                <div class="signin-or"><span>Or</span></div>
                <label for="fullname" class="signin-label">Username</label>
                <input type="text" id="fulname" class="signin-input" placeholder="Eg: John Doe" name="user">
                <label for="password" class="signin-label">Password</label>
                <input type="password" id="password" class="signin-input" placeholder="abc123" name="pass">
                <button class="signin-submit" name="dangnhap">Sign in</button>
                <p class="signin-enror">
                    <a href="#" class="signin-enror-password">Forgot password?</a>
                </p>
                <div class="signin-new"></div>
                <b class="signin-suggest">If you don't have an account</b>
                <a class="signin-signup" style="text-decoration: none" href="Joinwithus.php">Sign up</a>
            </div>
        </form>
    </body>
</html>
