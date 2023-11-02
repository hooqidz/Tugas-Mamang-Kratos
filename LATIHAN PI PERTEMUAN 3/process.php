<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Process the data (you can do whatever you want with the data)
    // For now, let's just display it
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email;
}
?>
