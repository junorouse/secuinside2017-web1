<?php
$mysqli = mysqli_connect("127.0.0.1", "secuweb", "elqlqlqjs1234", "secuweb");
$pdo = new PDO(
    'mysql:host=127.0.0.1;dbname=secuweb',
    'secuweb',
    'elqlqlqjs1234'
);


function check_ip() {
 //   var_dump($_SERVER['REMOTE_ADDR']);
    return $_SERVER['REMOTE_ADDR'] == '127.0.0.1' || $_SERVER['REMOTE_ADDR'] == '::1';
}

function check_servername() {
//    var_dump($_SERVER['HTTP_HOST']);
    return $_SERVER['HTTP_HOST'] == 'localhost';
}

/*
$salt = "BEdFa5slIoopZ4NiQLC9JP5nmV0QyRyocC1V3vrE0RstPOKNYKU9pXLT6z3BTII1";

if (isset($_COOKIE['user_id']) && isset($_COOKIE['token'])) {
    $user_id = $_COOKIE['user_id'];
    $token = $_COOKIE['token'];

    if ($user_id == '' || $token == '') {
        exit("you are not admin");
    }


    if (sha1($user_id.$salt) === $token) {
        if ($user_id == 'admin') {

        } else {
            exit("you are not admin");
        }
    } else {
        exit("token broken");
    }
}  else {
    exit("please login");
}

*/
