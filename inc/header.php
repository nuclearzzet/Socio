<?php

include "config/db.php";
include "dotenv.php";

use App\DotEnv;

(new DotEnv(__DIR__ . "/../.env"))->load();

?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <style>
          <?php include 'assets/css/styles.css'; ?>
     </style>
</head>
<body>
     <header>
     <nav class="navbar">
          <ul class="navbar_list">
               <li class="nav_link"><a href="index.php">Socioo</a></li>
               <li class="nav_link"><a href="about.php">About</a></li>
               <li class="nav_link"><a href="team.php">Our Team</a></li>
          </ul>
          <ul class="navbar_list">
               <li class="nav_link nav_link_4"><a href="signIn.php">Sign In</a></li>
               <li><a href="signup.php" class="btn_contact"><button>Sign Up</button></a></li>
          </ul>
        </nav>
     </header>
