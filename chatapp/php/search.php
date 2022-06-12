<?php
    include_once "config.php";
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
    $output = "";
    $sql = mysqli_query($conn, "SELECT users WHERE fname LIKE '%{$searchTerm}%' OR lname LIKE '%{$searchTerm}%'");
    if (mysqli_num_rows($sql) > 0) {
        
    }else {
        $output .= "No users have found";//if no user in search name it will show no found
    }
    echo $output;
?>