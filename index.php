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
    <link rel="stylesheet" href="style.css"/>
    <link rel="icon" href="assets/BISU-LOGO.png"/>
    <title>BISU Registrar Appointment</title>
</head>
<body>
    <header>
        <div class="container-head">
            <img class="logo" src="assets/BISU-LOGO.png" alt="Logo" id="logo"/>
            <h1 class="header">BISU REGISTRAR APPOINTMENT</h1>
        </div>
    </header>

    <section>
        <div class="container">
                <div class="container-form">
                    <form action="php/login.php" method="post" class="loginForm">
                        <h2>Log in</h2>
                        
                        <?php if (isset($_GET['error'])) { ?> 
                        <p class="error"><?php echo $_GET['error']; ?></p> <?php } ?>
                        
                        <div>
                            <label>Email</label><br>
                            <input type="email" name="email" placeholder="example@bisu.edu.ph" required autofocus/><br>
                        </div>
                        <div class="password-container">
                            <label>Password</label><br>
                            <input type="password" name="password" required autofocus/>
                            
                        </div>
                        <div class="remembermediv">
                            <div>
                                <input type="checkbox" name="remember" class="checkbtn"/>
                                <label>Remember me</label>
                            </div>
                            <div>
                                <a href="/page/forgot.php">forgot password?</a>
                            </div>
                            
                        </div>
                        
                        <div>
                            <a href="page/register.php" class="registerlnk">Register</a>
                            <button type="submit" class="loginbtn">
                                LOG IN
                            </button>
                        </div>
                    </form>
                </div>    
        </div>
    </section>
    <footer>
        <p><b>Appointment System for Registrar</b></p>
        <p>Bohol Island State University</p>
    </footer>
</body>
</html>