<?php
$server_request_uri = $_SERVER['REQUEST_URI'];
$server_request_method = $_SERVER['REQUEST_METHOD'];

if ($server_request_uri == '/404' && $server_request_method == 'GET'){
    require_once dirname(__FILE__).'/../controller/error_404.php';
} else {
    if ($server_request_uri == '/' or $server_request_uri == '/registration'){
        if ($server_request_uri == '/'){
            if($server_request_method == 'GET'){
                require_once dirname(__FILE__).'/../controller/sign_up.php';
            }
            else header('Location: /404');
        }
        else if ($server_request_uri == '/registration'){
            if($server_request_method == 'POST'){
                require_once dirname(__FILE__).'/../controller/registration.php';
            }
            else header('Location: /404');
        }
    } else header('Location: /404');
}