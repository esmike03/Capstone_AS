<?php require '/xampp/htdocs/RegistrarAppointmentSystem/php/adata.php'; ?>

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
    <title>Register-BISU Registrar Appointment</title>
</head>
<body>
    <header>
        <div class="container-head">
            <img class="logo" src="/assets/BISU-LOGO.png" alt="Logo" id="logo"/>
            <h1 class="header">REGISTRATION</h1>
        </div>
    </header>

    <section>
        <div class="container">
                
                    <form action="" method="POST" class="registerForm">
                        <h3>Please fill in the required fields!</h3>

                            <div >
                                <div>
                                    <label>First Name</label><br>
                                    <input type="text" name="fname" required autofocus/><br>
                                </div>
                                <div>
                                    <label>Lastname</label><br>
                                    <input type="text" name="lname" required autofocus/>
                                </div>
                            </div>

                            <div >
                                <div>
                                    <label>Birthdate</label><br>
                                    <input type="date" name="bdate" required autofocus/><br>
                                </div>
                                <div>
                                    
                                </div>
                            </div>

                            <div >
                                <div>
                                    <label>ISMIS ID</label>
                                    <?php
                                            if (isset($ismis_error)) {
                                            echo '<label class="passerror">' . $ismis_error . '</label>'; }
                                        ?>
                                    <br>
                                    <input type="number" name="ismisid" placeholder="000000" required autofocus/><br>
                                </div>
                                <div>
                                    <label>Campus</label><br>
                                    <select name="campus" class="select" required>
                                        <option value="none">Select...</option>
                                        <option value="Balilihan Campus">BISU - Balilihan Campus</option>
                                        <option value="Main Campus">BISU -  Main Campus</option>
                                        <option value="Calape Campus">BISU - Calape Campus</option>
                                        <option value="Bilar Campus">BISU - Bilar Campus</option>
                                        <option value="Clarin Campus">BISU - Clarin Campus</option>
                                        <option value="Candijay Campus">BISU - Candijay Campus</option>
                                    </select>
                                </div>
                            </div>

                            <div >
                                <div>
                                    <label>BISU Email</label>
                                    <?php
                                            if (isset($email_error)) {
                                            echo '<label class="passerror">' . $email_error . '</label>'; }
                                        ?>
                                    <br>
                                    <input type="email" name="email" placeholder="example@bisu.edu.ph" required autofocus/><br>
                                </div>
                                <div>
                                    <label>Course</label><br>
                                    <select name="course" class="select" required>
                                        <option value="none">Select...</option>
                                        <option value="BS in Information Technology">Bachelor of Science in Information Technology</option>
                                        <option value="BS in Computer Science">Bachelor of Science in Computer Science</option>
                                        <option value="BS in Electrical Technology">Bachelor of Science in Electrical Technology</option>
                                        <option value="BS in Electronics Technology">Bachelor of Science in Electronics Technology</option>
                                        <option value="BS in Industrial Technology major in Food preparation and Service management">Bachelor of Science in Industrial Technology major in Food Preparation and Service Management</option>
                                        <option value="BS in Industrial Technology major in Garments Technology">Bachelor of Science in Industrial Technology major in Garments Technology</option>
                                        <option value="BS in Criminology">Bachelor of Science in Criminology</option>
                                    </select>
                                </div>
                            </div>

                            <div >
                                <div>
                                    <label>Password</label>
                                        <?php
                                            if (isset($pass_error)) {
                                            echo '<label class="passerror">' . $pass_error . '</label>'; }
                                        ?>
                                    <br>
                                    <input type="password" name="password" required autofocus/><br>
                                </div>
                                <div>
                                    <label>Confirm Password</label>
                                    <?php
                                            if (isset($pass_error)) {
                                            echo '<label class="passerror"> * </label>'; }
                                        ?>
                                    <br>
                                    <input type="password" name="conpassword" required autofocus/>
                                </div>
                            </div>

                            <div>
                                <div>
                                    
                                </div>
                                <div>
                                    <a href="/index.php" class="loglnk">Log In</a>
                                    <button type="submit" name="record" class="regbtn">
                                        REGISTER
                                    </button>
                                </div>
                            </div>
                    </form>  
        </div>
    </section>
</body>
</html>