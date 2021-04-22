<?php

if ($_SERVER['REQUEST_URI'] == '/'){
    require_once dirname(__FILE__).'/../controller/sign_up.php';
}

if ($_SERVER['REQUEST_URI'] == '/registration'){
    require_once dirname(__FILE__).'/../controller/registration.php';
}