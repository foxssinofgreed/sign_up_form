<?php

if ($_SERVER['REQUEST_URI'] == '/404' && $_SERVER["REQUEST_METHOD"] == "GET"){
    require_once dirname(__FILE__).'/../controller/error_404.php';
}

if ($_SERVER['REQUEST_URI'] == '/'){
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        require_once dirname(__FILE__).'/../controller/sign_up.php';
    }
    else header('Location: /404');
}

if ($_SERVER['REQUEST_URI'] == '/registration'){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once dirname(__FILE__).'/../controller/registration.php';
    }
    else header('Location: /404');
}