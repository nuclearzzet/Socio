<?php 

if (isset($_SERVER['submit'])){
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];

    if (!empty($username)){
        if ($password1 == $password2){
            echo "User Created";
        }else{
            echo "Passwords Doesn't match";
        }
    }else{
        echo "Username could not be empty";
    }
}