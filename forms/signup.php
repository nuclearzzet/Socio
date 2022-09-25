<?php

if (isset($_SERVER['submit'])){
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    if (!empty($username)){
        if ($password1 == $password2){
            echo "User Created";
        }else{
            echo "Passwords Doesn't match";
        }
    }else{
        echo "Username can not be empty";
    }
}