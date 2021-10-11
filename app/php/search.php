<?php
    include_once "configuration.php";
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
    $output = "";
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE firstName LIKE '%{$searchTerm}%' OR lastName LIKE '%{$searchTerm}%'");
    if(mysqli_num_rows($sql) > 0) {
        include "data.php";
    } else {
        $output .= "No users found!";
    }
    echo $output;
?>