<?php
// Include database connection file
include $_SERVER['DOCUMENT_ROOT'] . '/AlardawiFurniture/database/db_connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize form data
    $name = trim(filter_input(INPUT_POST, 'name'));
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
    $message = trim(filter_input(INPUT_POST, 'message'));

    $errors = [];

    // Validate form fields
    if (empty($name)) {
        $errors[] = "Name is required.";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "A valid email is required.";
    }

    if (empty($message)) {
        $errors[] = "Message is required.";
    }

    // Check for errors
    if (empty($errors)) {
        // Proceed with storing data in the database
        $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);

        if ($stmt->execute()) {
            // Redirect to success page
            header("Location: ../pages/success.php");
            exit;
        } else {
            $errors[] = "Failed to submit your message. Please try again.";
        }

        $stmt->close();
    }

    // If there were errors, display them
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p>Error: $error</p>";
        }
    }

    $conn->close();
}
?>
