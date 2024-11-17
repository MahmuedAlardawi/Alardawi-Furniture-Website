<?php
    // Include database connection
    include $_SERVER['DOCUMENT_ROOT'] . '/AlardawiFurniture/database/db_connection.php';


    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $address = trim($_POST['address']);
        $product = trim($_POST['product']);
        $service_rating = trim($_POST['service_rating']);
        $features = isset($_POST['features']) ? implode(',', $_POST['features']) : '';
        $comments = trim($_POST['comments']);

        // Prepare an SQL statement
        $sql = "INSERT INTO feedback (name, email, phone, address, product, service_rating, features, comments) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        // Bind parameters to the SQL query
        $stmt->bind_param("ssssssss", $name, $email, $phone, $address, $product, $service_rating, $features, $comments);

        // Execute the statement
        if ($stmt->execute()) {
            header("Location: ../pages/success.php");
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement and connection
        $stmt->close();
        $conn->close();
    }
?>