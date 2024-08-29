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
    if ($con->query($sql) === FALSE) {
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
    if ($con->query($sql) === FALSE) {
        echo "Error creating table: " . $con->error;
    }

     // SQL to create the team member table
     $sql = "CREATE TABLE IF NOT EXISTS dbmalek (
        myname VARCHAR(30) NOT NULL,
        mysubject VARCHAR(30) NOT NULL,
        EmailAddress TEXT NOT NULL,
        Messages TEXT NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";

    // Execute table creation query
    if ($con->query($sql) === FALSE) {
        echo "Error creating table: " . $con->error;
    }


     // SQL to create the team member table
     $sql = "CREATE TABLE IF NOT EXISTS dbahmad (
        myname VARCHAR(30) NOT NULL,
        mysubject VARCHAR(30) NOT NULL,
        EmailAddress TEXT NOT NULL,
        Messages TEXT NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";

    // Execute table creation query
    if ($con->query($sql) === FALSE) {
        echo "Error creating table: " . $con->error;
    }


     // SQL to create the team member table
     $sql = "CREATE TABLE IF NOT EXISTS dbmohammed (
        myname VARCHAR(30) NOT NULL,
        mysubject VARCHAR(30) NOT NULL,
        EmailAddress TEXT NOT NULL,
        Messages TEXT NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";

    // Execute table creation query
    if ($con->query($sql) === FALSE) {
        echo "Error creating table: " . $con->error;
    }


     // SQL to create the team member table
     $sql = "CREATE TABLE IF NOT EXISTS dbomar (
        myname VARCHAR(30) NOT NULL,
        mysubject VARCHAR(30) NOT NULL,
        EmailAddress TEXT NOT NULL,
        Messages TEXT NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";

    // Execute table creation query
    if ($con->query($sql) === FALSE) {
        echo "Error creating table: " . $con->error;
    }
    
?>
