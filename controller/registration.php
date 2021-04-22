<?php
namespace app\controller;

require_once __DIR__.'/../database/database.php';
$config = require_once __DIR__.'/../database/config.php';

use database;


    function skell(){
        foreach ($_POST as $key => $value){
            $data[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
        }
        return $data;
    }

    $data = skell();
    $errors = [];
    $success = [];
    $input = new database();
    $email_taken = $input -> get_email($data['email']);
    $username_taken = $input -> get_user($data['username']);

    if(!$data['username'] || $username_taken || strlen($data['username']) < 3) {
        $errors['username'] = '#user{background: url("public/resources/icons/warning-sign_red.png") no-repeat 95% 50%; background-size: 18px;}';
    }

    if(!$data['email'] || $email_taken || !preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i', $data['email'])) {
        $errors['email'] = '#email{background: url("public/resources/icons/warning-sign_red.png") no-repeat 95% 50%; background-size: 18px;}';
    }

    if(!$data['password'] || strlen($data['password']) < 8 || !preg_match('/[A-Z]/', $data['password']) || !preg_match('~[0-9]~', $data['password'])) {
        $errors['password'] = '#password{background: url("public/resources/icons/warning-sign_red.png") no-repeat 95% 50%; background-size: 18px;}';
    }

    if($email_taken){
        $errors['ex_email'] = '/* youre already here */';
    }

    if($username_taken){
        $errors['ex_username'] = '/* its taken my boy */';
    }

    $success['username'] = '#user{background: url("public/resources/icons/accept_green.png") no-repeat 95% 50%; background-size: 18px;}';
    $success['email'] = '#email{background: url("public/resources/icons/accept_green.png") no-repeat 95% 50%; background-size: 18px;}';
    $success['password'] = '#password{background: url("public/resources/icons/accept_green.png") no-repeat 95% 50%; background-size: 18px;}';

    /*$params = [
        'errors' => $errors,
        'data' => $data
    ];*/
    if(empty($errors)){
        foreach ($success as $key => $values){
            echo $values;
        }
        echo '/* some magic key */';
    }
    else{
        foreach ($errors as $key => $values){
            echo $values;
        }
    }

?>