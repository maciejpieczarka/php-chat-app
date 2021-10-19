<?php
    session_start();
    include_once "configuration.php";
    $outgoing_id = $_SESSION['unique_id'];

    //Select all users with different unique_id than the currently logged one
    $sql = mysqli_query($conn, "SELECT * FROM users
                                WHERE NOT unique_id = {$outgoing_id}");
    $output = "";

    if(mysqli_num_rows($sql) == 0) {
        //If there are no users with different unique_id display this message
        $output .= "No users are available to chat";
    } else if(mysqli_num_rows($sql) > 0) {
        include "data.php";
    }
    echo $output;
?>