<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $reason = $_POST["reason"];
    
    // Write code to notify concerned officers or teachers
    // Example: Send email or store data in a database
    // For simplicity, we'll just display a success message
    echo "Registration successful! Thank you for informing us.";
}
?>
