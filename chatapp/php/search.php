<?php
    include_once "config.php";
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
    //sending message by ajax and get
    $output = "";
    $sql = mysqli_query($conn, "SELECT fname lname FROM users WHERE fname LIKE '%{$searchTerm}%' OR lname LIKE '%{$searchTerm}%'");//need to add " fname lname FROM " behind SELECT
    if (mysqli_num_rows($sql) > 0) {
        $output .= "Users have found";
    }else {
        $output .= "No users have found";//if no user in search name it will show no found
    }
    echo $output;
?>