<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container">
    <div class="form">
        <h1>Login</h1>
        <p class="head_para">Login with your email and password.</p>

        <form action="./include/login_inc.php" method="POST">
            <div class="input_boxes">
                <input type="email" name="email" placeholder="Email Address" required><br>
                <input type="password" name="password" placeholder="Password" required><br>
                <div class="body_para">
                    <input type="checkbox" name="remember">
                    <span>Remember Me</span>
                </div>
            </div>
            <div class="btn">
                <input type="submit" name="login" value="Login">
            </div>
        </form>
    </div>
</div>

</body>
</html>

