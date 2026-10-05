<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "sideTest_DB";

// creating new connection to the database
$connection = new mysqli($server_name, $user_name, $password, $database_name);

// checking if the connection is done
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
    }
    
    // selecting all data from the 'data' table to display
    $sql = "SELECT id, first_name, last_name, relationship, register_date FROM People";
    $result = $connection->query($sql);
    
    // displaying table and data from the 'data' table
    echo "<h2>Utilisateurs</h2>";
    echo "<table border='1' cellpadding='5'>";
    echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Relationship</th><th>Date</th></tr>";
    
    if ($result->num_rows > 0) {
        // Loop through the results and display each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["first_name"]."</td>";
            echo "<td>".$row["last_name"]."</td>";
            echo "<td>".$row["relationship"]."</td>";
            echo "<td>".$row["register_date"]."</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No records found</td></tr>";
    }
    echo "</table>";
    
    $connection->close();
    // https://www.w3schools.com/php/php_mysql_select.asp
    // https://stackoverflow.com/questions/4436739/how-to-create-html-table-in-php
    // https://www.campcodes.com/tutorials/php-mysql-display-data-in-an-html-table/
    // https://www.php.net/manual/en/mysqli-result.fetch-assoc.php
?>
