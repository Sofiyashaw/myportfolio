<?php
// Database connection
$servername = "localhost"; // Change this if your database is hosted elsewhere
$username = "root"; // Your database username
$password = "dandelions0811"; // Your database password
$dbname = "portfolio"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if (isset($_POST['submit'])) {
    // Escape user inputs for security
    $name = $conn->real_escape_string($_POST['Name']);
    $email = $conn->real_escape_string($_POST['Email']);
    $message = $conn->real_escape_string($_POST['Message']);

    // Insert into database
    $sql = "INSERT INTO contact_form (name, email, message) VALUES ('$name', '$email', '$message')";
    if ($conn->query($sql) === TRUE) {
        // Display success message in a popup box
        echo '<script>alert("Message sent successfully!");</script>';
        // Reset the form using JavaScript
        echo '<script>document.getElementById("contactForm").reset();</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
