<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include "db-conn.php";

// Define the validate function
function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = validate($_POST['email']);
    $pass = validate($_POST['password']);

    if (empty($email)) {
        header("Location: /key.php?error=Email is required!");
        exit();
    } else if (empty($pass)) {
        header("Location: /key.php?error=Password is required!");
        exit();
    } else if (strlen($pass) < 6) {
        header("Location: /key.php?error=Password should be at least 6 characters!");
        exit();
    }

    $sql = "SELECT * FROM users WHERE email='$email'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($pass, $row['password'])) {
            echo 'Login Successful!';
            $_SESSION['email'] = $row['email'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            header("Location: /page/home.php?Successful=Login Successful!");
            exit();
        } else {
            header("Location: /key.php?error=Invalid Credentials!");
            exit();
        }
    } else {
        header("Location: /key.php?error=Invalid Credentials!");
        exit();
    }
}
?>