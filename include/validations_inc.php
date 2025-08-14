<?php
// Function to check if register form inputs are empty
function inputsEmptyRegister($first_name, $last_name, $email, $mobile, $password, $confirm_password)
{
    return (empty ($first_name) || empty($last_name) || empty($email) || empty($mobile) || empty($password) || empty($confirm_password));
}

// Check if names are invalid
function nameInvalid($first_name, $last_name)
{
    return !preg_match("/^[a-zA-Z]+$/", $first_name) || !preg_match("/^[a-zA-Z]+$/", $last_name);
}

// Check if email is invalid
function emailInvalid($email)
{
    return !preg_match("/^[a-zA-Z\d._-]+@[a-zA-Z\d_-]+\.[a-zA-Z]{2,}$/", $email);
}

// Check if mobile is invalid (Sri Lanka example: starts with 0 and has 10 digits)
function mobileInvalid($mobile)
{
    return !preg_match("/^[0][\d]{9}$/", $mobile);
}

// Check if password is invalid (min 8 chars)
function passwordInvalid($password)
{
    return !preg_match("/^.{8,}$/", $password);
}

// If password does not match
function passwordNotMatch($password, $confirm_password)
{
    return $password !== $confirm_password;
}
?>
