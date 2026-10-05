<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "sideTest_DB";

$connection = new mysqli($server_name, $user_name, $password, $database_name);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Retrieve data from the form using $_POST
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$relationship = $_POST['relationship'];

// Insert data into the table
$sql = "INSERT INTO People (first_name, last_name, relationship) 
        VALUES ('$first_name', '$last_name', '$relationship')";

if ($connection->query($sql) === TRUE) {
    echo "Registration successful. <a href='admin.php'>View registered users</a>";
} else {
    echo "Error: " . $connection->error;
}

$connection->close();
// https://www.w3schools.com/php/php_forms.asp
// https://www.w3schools.com/php/php_mysql_insert.asp
// https://www.w3schools.com/php/php_mysql_insert_multiple.asp
?>
