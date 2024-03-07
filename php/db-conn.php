<?php
    $sname = "sql309.infinityfree.com";
    $uname = 'sql309.infinityfree.com';
    $password = "VkVvXf9D7rn1";
    $db_name = "if0_36111685_registrarappointment";
    
    $conn = mysqli_connect($sname, $uname, $password, $db_name);

    if(!$conn){
        echo "Connection Failed";
    }