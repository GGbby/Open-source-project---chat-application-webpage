<?php

    session_start();
    include_once "config.php";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    if (!empty($email) && !empty($password)) {
        //check the email and password match to any role of table database
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'");
        if (mysqli_num_rows($sql) > 0) {//if users credentials matched 
            $row = mysqli_fetch_assoc($sql);
        }else {
            echo "Email or password is incorrect";
        }
    }else{
        echo "All input file are required!";
    }
?>