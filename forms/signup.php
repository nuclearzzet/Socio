<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    // Recieve, Sanitize and Secure Inputs
    $username = htmlentities(filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS), ENT_QUOTES);
    $password1 = htmlentities($_POST['password1'], ENT_QUOTES);
    $password2 = htmlentities($_POST['password2'], ENT_QUOTES);

    if ($password1 == $password2 && !empty($username)){

        $hashedPassword = hash("SHA256", $password1);

        insertToDB($conn, $username, $hashedPassword);
    }
}

function insertToDB($conn, $username, $hashedPassword){


    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $hashedPassword);

    // SQL query
    $sql = "INSERT INTO User (username, password) VALUES(?, ?)";

    // Process and Insert SQL
    $stmt = $conn->prepare($sql);
    $stmt->bind("si", $username, $password);
    $stmt->execute();
}