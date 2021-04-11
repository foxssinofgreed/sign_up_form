<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'newuser');
define('DB_PASSWORD', 'password');
define('DB_NAME', 'sign_up_form');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>