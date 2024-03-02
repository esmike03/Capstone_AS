<?php

$conn = new mysqli('localhost', 'root', '', 'registrarappointment');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['record'])) {
    $password = $_POST['password'];
    $email = $_POST['email'];
    $name = $_POST['fname'] . ' ' . $_POST['lname'];
    $bdate = $_POST['bdate'];
    $ismis = $_POST['ismisid'];
    $course = $_POST['course']; 
    $campus = $_POST['campus'];



    // Validate inputs
    if (!empty(trim($password)) && !empty(trim($email))) {
    
        // Check if password meets the minimum length requirement
        if (strlen($password) < 6) {
            $pass_error = "Password must be 6+ characters!";
        } else {
            // Check if the email is already registered
            $check_email_stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
            $check_email_stmt->bind_param("s", $email);
            $check_email_stmt->execute();
            $check_email_result = $check_email_stmt->get_result();
    
            // Check if the ISMIS ID is already registered
            $check_ismis_stmt = $conn->prepare("SELECT * FROM users WHERE ismis = ?");
            $check_ismis_stmt->bind_param("s", $ismis);
            $check_ismis_stmt->execute();
            $check_ismis_result = $check_ismis_stmt->get_result();
    
            if ($check_email_result->num_rows > 0) {
                // Email is already registered
                $email_error = "This email is already registered.";
            } elseif ($check_ismis_result->num_rows > 0) {
                // ISMIS ID is already registered
                $ismis_error = "This ISMIS ID is already registered.";
            } else {
                // Hash the password
                $enc_password = password_hash($password, PASSWORD_DEFAULT);
    
                // Prepare and execute the query
                $stmt = $conn->prepare("INSERT INTO users (email, password, name, birthdate, ismis, course, campus) VALUES (?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("sssssss", $email, $enc_password, $name, $bdate, $ismis, $course, $campus);
                $stmt->execute();
    
                // Check for success
                if ($stmt->affected_rows == 1) {
                    $record_success = "Password hashed successfully";
                    // Redirect to the login page
                    header("Location: login.php");
                    exit(); // Ensure that no further code is executed after the redirection
                } else {
                    $record_error = "Something went wrong!";
                }
    
                // Close the statement
                $stmt->close();
            }
    
            // Close the check_email statement
            $check_email_stmt->close();
            // Close the check_ismis statement
            $check_ismis_stmt->close();
        }
    
    } else {
        $record_error = "Both fields must have values";
    }
}

// Close the connection
$conn->close();
?>