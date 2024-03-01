<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include "/xampp/htdocs/RegistrarAppointmentSystem/db-conn.php";

if(isset($_POST['email']) && isset($_POST['password'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$email = validate($_POST['email']);
$pass = validate($_POST['password']); 

if(empty($email)){
    header("Location: index.php?error=Email is required!");
    exit();
}else if(empty($pass)){
    header("Location: index.php?error=Password is required!");
    exit();
}

$sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) === 1){
    $row = mysqli_fetch_assoc($result);
    if($row['email'] === $email && $row['password'] === $pass){
        echo  'Login Successful!';
        $_SESSION['email'] = $row['email'];
        $_SESSION['name'] = $row['name'];
        $_SESSION[ 'id' ]= $row['id'];
        header("Location: /page/home.php");
        exit();
    } else{
        header("Location: index.php?error=Invalid Credentials!");
        exit();
    } 
}else{
        header("Location: index.php?error=Invalid Credentials!");
        exit();
    }