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
    <link rel="icon" href="assets/BISU-LOGO.png"/>
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
                
                    <form class="registerForm">
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
                                    <label>ISMIS ID</label><br>
                                    <input type="number" name="ismisid" placeholder="000000" required autofocus/><br>
                                </div>
                                <div>
                                    <label>Campus</label><br>
                                    <select name="option" class="select" required>
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
                                    <label>BISU Email</label><br>
                                    <input type="email" name="email" placeholder="example@bisu.edu.ph" required autofocus/><br>
                                </div>
                                <div>
                                    <label>Course</label><br>
                                    <select name="option" class="select" required>
                                        <option value="none">Select...</option>
                                        <option value="Course 1">Course 1</option>
                                        <option value="Course 2">Course 2</option>
                                        <option value="Course 3">Course 3</option>
                                        <option value="Course 4">Course 4</option>
                                        <option value="Course 5">Course 5</option>
                                        <option value="Course 6">Course 6</option>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <div>
                                    
                                </div>
                                <div>
                                    <a href="/index.php" class="loglnk">Log In</a>
                                    <button class="regbtn">
                                        REGISTER
                                    </button>
                                </div>
                            </div>
                    </form>  
        </div>
    </section>
</body>
</html>