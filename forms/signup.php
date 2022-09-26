<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $username = htmlentities(filter_input(INPUT_POST, 'username', FILTER_UNSAFE_RAW), 'ENT_QUOTES');
    $password1 = htmlentities($_POST['password1'], 'ENT_QUOTES');
    $password2 = htmlentities($_POST['password2'], 'ENT_QUOTES');

    if ($password1 == $password2){
        inserToDB($conn, $username, $password1);
    }
}

function inserToDB($conn, $username, $hashedPassword){


    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $hashedPassword);

    // SQL query
    $sql = "INSERT INTO User (username, password) VALUES(?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind("si", $username, $password);
    $stmt->execute();
}