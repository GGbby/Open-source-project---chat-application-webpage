<?php
    session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['unique_id'];
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
    //sending message by ajax and get
    $output = "";
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} AND (fname LIKE '%{$searchTerm}%' OR lname LIKE '%{$searchTerm}%')");//need to add " fname lname FROM " behind SELECT
    if (mysqli_num_rows($sql) > 0) {
        include "data.php";
    }else {
        $output .= "No users have found";//if no user in search name it will show no found
    }
    echo $output;
?>