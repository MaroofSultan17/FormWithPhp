<?php
include ("config.php");

$name = $_POST["name"];
$contactno = $_POST["contact"];
$email = $_POST["email"];
$password = $_POST["password"];

if ($conn->connect_error) {
    die ("Connection failed: " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO `registration-table` (`name`, `contactno`, `email`, `password`)
     VALUES (?, ?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("ssss", $name, $contactno, $email, $password);
        if ($stmt->execute()) {
            echo "Registration Successful";
        } else {
            echo "Registration Failed: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Prepare statement failed: " . $conn->error;
    }
    $conn->close();
}
?>