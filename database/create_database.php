<?php

$config = require __DIR__.'/config.php';

$connection = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$sql = 'CREATE TABLE users(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(100) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL, /*  not unique for testing on same email  */
    password VARCHAR(50) NOT NULL,
    sign_up_date DATETIME DEFAULT CURRENT_TIMESTAMP);
    ';

if ($connection->query($sql) === TRUE) {
    echo "Table has been created successfully";
} else {
    echo "Error creating table: " . $connection->error;
}

$connection->close();

?>