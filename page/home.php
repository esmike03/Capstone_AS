<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['email'])){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Hello, <?php echo $_SESSION[ 'email' ]; ?></h1>
        <a href="/logout.php">Log out</a>
    </body>
    </html>
    <?php
}else{
    header("Location: index.php");
    exit();
}