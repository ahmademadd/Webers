<?php 
    require_once("testimonial.php");

    $sql = "INSERT INTO dbmalek (myname, EmailAddress, mysubject, Messages) 
        VALUES (?, ?, ?, ?)";

    $stmt = $con->prepare($sql);
    $stmt->bind_param("ssss", $_POST["name"], $_POST["email"], $_POST["subject"], $_POST["message"]);

    if ($stmt->execute()) 
    {
        echo "New record created successfully";
    } else 
    {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();

?>