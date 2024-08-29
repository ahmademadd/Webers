<?php 
    require_once("testimonial.php");
    setcookie("user", $_POST["name"], time()+3600);
    setcookie("last", $_POST["surname"], time()+3600);

    $sql = "INSERT INTO dbproject (FirstName, LastName, EmailAddress, BusinessName, PhoneNumber, ReasonForContacting, Messages) 
        VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $con->prepare($sql);
    $stmt->bind_param("sssssss", $_POST["name"], $_POST["surname"], $_POST["email"], $_POST["business"], $_POST["phone"], $_POST["inquiryType"], $_POST["details"]);

    if ($stmt->execute()) 
    {
        echo "New record created successfully";
    } else 
    {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();

?>