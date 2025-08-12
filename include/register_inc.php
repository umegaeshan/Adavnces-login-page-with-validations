<?php
require_once "./dbh_inc.php";
require_once "./validations_inc.php";

if (isset($_POST['register'])) {
    $first_name       = trim($_POST['first_name']);
    $last_name        = trim($_POST['last_name']);
    $email            = trim($_POST['email']);
    $mobile           = trim($_POST['mobile']);
    $password         = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Input validation
    if (inputsEmptyRegister($first_name, $last_name, $email, $mobile, $password, $confirm_password)) {
        header("Location: ../register.php?error=empty_inputs");
        exit();
    } elseif (nameInvalid($first_name, $last_name)) {
        header("Location: ../register.php?error=invalid_name");
        exit();
    } elseif (emailInvalid($email)) {
        header("Location: ../register.php?error=invalid_email");
        exit();
    } elseif (mobileInvalid($mobile)) {
        header("Location: ../register.php?error=invalid_mobile");
        exit();
    } elseif (passwordInvalid($password)) {
        header("Location: ../register.php?error=invalid_password");
        exit();
    } elseif (passwordNotMatch($password, $confirm_password)) {
        header("Location: ../register.php?error=password_mismatch");
        exit();
    } else {
        registerNewUser($connection, $first_name, $last_name, $email, $mobile, $password);
    }
} else {
    header("Location: ../register.php");
    exit();
}

function registerNewUser($connection, $first_name, $last_name, $email, $mobile, $password)
{
    // Secure password hash
    $hash_password = password_hash($password, PASSWORD_DEFAULT);

    // Use prepared statement to prevent SQL injection

    $sql  = "INSERT INTO users (first_name, last_name, email, mobile, password) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($connection, $sql);
    mysqli_stmt_bind_param($stmt, "sssss", $first_name, $last_name, $email, $mobile, $hash_password);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: ../login.php?success=registered");
        exit();
    } else {
        header("Location: ../register.php?error=db_error");
        exit();
    }
}
?>
