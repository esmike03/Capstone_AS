<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['name'])){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/style.css"/>
    <link rel="icon" href="/assets/BISU-LOGO.png"/>
        <title>BISU Registrar Appointment</title>
    </head>
    <body>
        <div class="container">
            <div class="containerHome">
                <img src="/assets/1705541_242700-P3EY14-664.png" alt="under development"/>
                <h1>Hello, <?php echo $_SESSION[ 'name' ]; ?></h1>
                <a href="/php/logout.php">Log out</a>
            </div>
            
        </div>
        
    </body>
    </html>
    <?php
}else{
    header("Location: key.php");
    exit();
}