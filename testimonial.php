<?php
    // Define server connection details
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $con = new mysqli($servername, $username, $password);

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // SQL to create a database
    $sql = "CREATE DATABASE IF NOT EXISTS dbproject";

    // Execute the query to create the database
    if ($con->query($sql) === TRUE) {
        echo "Database 'dbproject' created successfully.<br>";
    } else {
        echo "Error creating database: " . $con->error;
    }

    // Select the 'dbproject' database
    $con->select_db("dbproject");

    // SQL to create the table
    $sql = "CREATE TABLE IF NOT EXISTS dbproject (
        FirstName VARCHAR(30) NOT NULL,
        LastName VARCHAR(30) NOT NULL,
        EmailAddress TEXT NOT NULL,
        BusinessName TEXT NOT NULL,
        PhoneNumber TEXT NOT NULL,
        ReasonForContacting TEXT NOT NULL,
        Messages TEXT NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";

    // Execute table creation query
    if ($con->query($sql) === TRUE) {
        echo "Table 'dbproject' created successfully.<br>";
    } else {
        echo "Error creating table: " . $con->error;
    }
    
?>
