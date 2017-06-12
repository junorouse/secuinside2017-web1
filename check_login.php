<?php

require_once("./config.php");

if (isset($_COOKIE['user_id']) && isset($_COOKIE['token'])) {
    $user_id = $_COOKIE['user_id'];
    $token = $_COOKIE['token'];

    if ($user_id == '' || $token == '') {
        alert("You have to login!", "/login.php");
    }

    if (sha1($user_id.$salt) === $token) {
        
    } else {
        alert("Token broken!", '/login.php');
        exit(0);
        // delete cookies
    }
}  else {
    alert("You have to login!", "/login.php");
    exit(0);
}

