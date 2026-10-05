<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "sideTest_DB";

// creating new connection to mysql
$connection = new mysqli($server_name, $user_name, $password);

if ($connection->connect_errno) {
    die("Connection failed: " . $connection->connect_error);
}

// create the database
$sql1 = "CREATE DATABASE IF NOT EXISTS sideTest_DB";
$connection->query($sql1);

// select the database
$connection->select_db($database_name);

// create the table
$sql2 = "CREATE TABLE IF NOT EXISTS People (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, first_name VARCHAR(30) NOT NULL, last_name VARCHAR(30) NOT NULL, relationship VARCHAR(20) NOT NULL, register_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP)";

// check for database or table queries error(s)
if ($connection->query($sql2) === TRUE) {
    echo "Database and Table ready. <a href='infos.html'>Go to Registration</a>";
} else {
    echo "Error: " . $connection->error;
}

$connection->close();
// https://www.w3schools.com/php/php_mysql_connect.asp
// https://www.w3schools.com/php/php_mysql_create_table.asp
?>
