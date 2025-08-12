<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container">
    <div class="form">
        <h1>Register</h1>
        <p class="head_para">Enter your details to register</p>

        <form action="./include/register_inc.php" method="POST">
            <div class="input_boxes">
                <input type="text" name="first_name" placeholder="Enter First Name" required><br>
                <input type="text" name="last_name" placeholder="Enter Last Name" required><br>
                <input type="email" name="email" placeholder="Enter Email Address" required><br>
                <input type="text" name="mobile" placeholder="Enter Mobile Number" required><br>
                <input type="password" name="password" placeholder="Enter Password" required><br>
                <input type="password" name="confirm_password" placeholder="Confirm Password" required><br>
            </div>
            <div class="btn">
                <input type="submit" name="register" value="Register">
            </div>
        </form>
    </div>
</div>

</body>
</html>
