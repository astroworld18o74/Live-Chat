<?php

    $servername = "localhost";
    $username = "root";
    $password = "24Sep2000@";
    $database = "chat_system";
    date_default_timezone_set('Asia/Kolkata');

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>
