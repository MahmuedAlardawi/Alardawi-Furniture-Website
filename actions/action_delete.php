<?php
    session_start();
    require $_SERVER['DOCUMENT_ROOT'] . '/AlardawiFurniture/database/db_connection.php';

    // Check if the user is logged in
    if (!isset($_SESSION['id'])) {
        header('Location: ../logout.php');
        exit;
    }

    // Get the user ID from the session
    $userId = $_SESSION['id'];

    // Get the password from the POST request
    $providedPassword = $_POST['deletePassword'];

    // Fetch the user's current password hash from the database
    $stmt = $conn->prepare("SELECT password FROM users WHERE id = ?");
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $stmt->bind_result($currentPasswordHash);
    $stmt->fetch();
    $stmt->close();

    // Verify the provided password
    if (password_verify($providedPassword, $currentPasswordHash)) {
        // Fetch the user's profile picture path if needed
        $stmt = $conn->prepare("SELECT photo FROM users WHERE id = ?");
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $stmt->bind_result($photo);
        $stmt->fetch();
        $stmt->close();

        $photo = '../' . $photo;

        // Delete the profile picture if it exists
        if (!empty($photo) && file_exists($photo)) {
            if (!unlink($photo)) {
                echo "<p>Error: Failed to delete profile picture.</p>";
                exit;
            }
        }

        // Delete user from the database
        $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
        $stmt->bind_param("i", $userId);

        if ($stmt->execute()) {
            // Successfully deleted the user
            $stmt->close();
            session_destroy();
            header('Location: ../pages/index.php');
            exit;
        } else {
            echo "<p>Error: Failed to delete user from the database.</p>";
            $stmt->close();
        }
    } 

    else {
        $_SESSION['delete_error'] = "Incorrect password. Please try again.";
        header('Location: ../pages/profile.php');}

    $conn->close();
?>