<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $commenter_name = $_POST['commenter_name'];
    $comment_text = $_POST['comment_text'];

    // Database configuration for the new database
    $hostName = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbName = "quezon_register";

    // Create connection to the new database
    $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare SQL statement to insert the comment into the database
    $sql = "INSERT INTO comments (commenter_name, comment_text) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $commenter_name, $comment_text);

    // Execute the statement
    if ($stmt->execute() === TRUE) {
        // If insertion is successful, redirect back to the profile page
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the prepared statement
    $stmt->close();

    // Close the database connection
    mysqli_close($conn);
}
?>
