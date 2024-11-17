    <!-- 
      CPC-403_Final_Project
      Mahmued Alardawi - 213529 - CS1 
  -->

<?php
session_start();

require $_SERVER['DOCUMENT_ROOT'] . '/AlardawiFurniture/database/db_connection.php';

$id = $_SESSION['id'];

// Check and update the profile photo if uploaded
if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = '../uploads/'; // Ensure this directory exists and is writable
    $filename = basename($_FILES['photo']['name']);
    $targetPath = $uploadDir . time() . '-' . $filename; // Prefixing the filename with a timestamp to avoid overwriting
    $fileType = pathinfo($targetPath, PATHINFO_EXTENSION);

    // Validate file type
    $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');
    if (!in_array(strtolower($fileType), $allowedTypes)) {
        $errors[] = "Only JPG, JPEG, PNG, & GIF files are allowed.";
    }

    // Move the file to the uploads directory
    if (empty($errors) && move_uploaded_file($_FILES['photo']['tmp_name'], $targetPath)) {
        $photo = "../uploads/" . time() . '-' . $filename;; // This will be the path stored in the database

        // Update the database with the new photo path
        $stmt = $conn->prepare("UPDATE users SET photo = ? WHERE id = ?");
        $stmt->bind_param("si", $photo, $id);

        if ($stmt->execute()) {echo "Photo updated successfully.";} 
        else {$errors[] = "Execution failed: " . $stmt->error;}        
        $stmt->close();
    } 
    else {$errors[] = "Failed to upload file.";}
}

// Process the form fields if they are filled
if (!empty($_POST['first_name'])) {
    $firstName = $_POST['first_name'];
    // Update first name in database
    $stmt = $conn->prepare("UPDATE users SET first_name = ? WHERE id = ?");
    $stmt->bind_param("si", $firstName, $id);
    $stmt->execute();
}

if (!empty($_POST['last_name'])) {
    $lastName = $_POST['last_name'];
    // Update last name in database
    $stmt = $conn->prepare("UPDATE users SET last_name = ? WHERE id = ?");
    $stmt->bind_param("si", $lastName, $id);
    $stmt->execute();
}

if (!empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $email = $_POST['email'];
    // Update email in database
    $stmt = $conn->prepare("UPDATE users SET email = ? WHERE id = ?");
    $stmt->bind_param("si", $email, $id);
    $stmt->execute();
}

// Update password if old_password is provided and matches
if (!empty($_POST['password']) && !empty($_POST['new_password'])) {
    $password = $_POST['password'];
    $newPassword = $_POST['new_password'];
    $confirmPassword = $_POST['confirm_password'];

    // Fetch the current password from the database to verify
    $stmt = $conn->prepare("SELECT password FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($currentPassword);
    $stmt->fetch();

    if (password_verify($password, $currentPassword)) {
        if ($newPassword === $confirmPassword && strlen($newPassword) >= 8) {
            // Hash new password and update in the database
            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
            $updateStmt = $conn->prepare("UPDATE users SET password = ? WHERE id = ?");
            $updateStmt->bind_param("si", $hashedPassword, $id);
            $updateStmt->execute();
            $updateStmt->close();
        } 
        else {
            $errors[] = "New passwords do not match or are too short.";
        }
    } 
    else {
        $errors[] = "Current password is incorrect.";
    }
    $stmt->close();
}

$conn->close();

// Redirect or report errors
if (empty($errors)) {
    header("Location: ../pages/profile.php"); // Redirect to profile page or a success page
    exit;
} 
else {
    foreach ($errors as $error) {
        echo "<p>Error: $error</p>"; // Display errors
    }
}
?>