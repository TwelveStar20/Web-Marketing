<?php
include 'db_visitor.php'; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
    $email = $_POST['email'];

    // Prepare SQL statement to insert email into client_request table
    $sql = "INSERT INTO client_request (email) VALUES ('$email')";

    if ($conn->query($sql) === TRUE) {
        // Close the database connection
        $conn->close();
        
        // Redirect back to index.php with success parameter
        header("Location: index.php?success=true");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>