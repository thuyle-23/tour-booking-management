<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" style="text\css" href="style1.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>Cityespaces</title>
    </head>
    <body>
        <form action="1Xulydangky.php" method="post">
            <div class="signup">
                <h1 class="signup-heading">Create Account</h1>
                <button class="signup-social">
                    
                    
                </button>
                <div class="signup-or"><span>Or</span></div>
                <label for="username" class="signup-label">Username</label>
                <input type="text" id="fulname" class="signup-input" placeholder="Eg: JohnDoe" name="user" required>
                <label for="fullname" class="signup-label">Full name</label>
                <input type="text" id="fulname" class="signup-input" placeholder="Eg: John Doe" name="name" required>
                <label for="email" class="signup-label">Email</label>
                <input type="email" id="email" class="signup-input" placeholder="gmail.com" name="email" required>
                <label for="password" class="signup-label">Password</label>
                <input type="password" id="password" class="signup-input" placeholder="abc123" name="pass" required>
                <label for="confirm" class="signup-label">Confirm Password</label>
                <input type="password" id="confirm" class="signup-input" placeholder="abc123" name="pass" required>
                <label for="pollicy" class="signup-pollicy">
                    <input type="radio" id="pollicy" class="signup-pollicy" name="pollicy" value="pollicy">I agree to the <b>Term</b> <a>and</a> <b>Privacy Pollicy</b></label>
                <button class="signup-submit" name="dangki">Sign up</button>
                <p class="signup-already">
                    <span>Aldready have an account? </span>
                    <a href="Signin.php" class="signup-login-link">Login</a>
                </p>
            </div>
        </form>
    </body>
</html>