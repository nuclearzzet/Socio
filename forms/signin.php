<?php 

if (isset($_SERVER['submit'])){
    $username = htmlentities(filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS), ENT_QUOTES);
    $password = htmlentities($_POST['password'], ENT_QUOTES);


}

function validate($username, $password){

}