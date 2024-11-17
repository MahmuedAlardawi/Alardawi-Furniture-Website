    <!-- 
      CPC-403_Final_Project
      Mahmued Alardawi - 213529 - CS1 
  -->
  
<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/AlardawiFurniture/database/db_connection.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Trim and sanitize
        $first_name = trim(filter_input(INPUT_POST, 'first_name'));
        $last_name = trim(filter_input(INPUT_POST, 'last_name'));
        $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        // Validate
        $errors = [];

        if (empty($first_name) || empty($last_name)) {
            $errors[] = "First name and last name are required.";
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format.";
        }

        if (strlen($password) < 8) {
            $errors[] = "Password must be at least 8 characters.";
        }

        if ($password !== $confirm_password) {
            $errors[] = "Passwords are not matched.";
        }

        // Check for any errors
        if (count($errors) == 0) {
            // Proceed to hash password and insert into database
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // store defualt photo
            $photo = "../images/profile.png";

            // Insert into database using prepared statements
            $sql = "INSERT INTO users (first_name, last_name, email, password, photo) VALUES (?, ?, ?, ?, ?)";
            if ($stmt = $conn->prepare($sql)) {
                $stmt->bind_param("sssss", $first_name, $last_name, $email, $hashed_password, $photo);
                // Redirect to login page after successful registration
                if ($stmt->execute()) {
                    // Redirect to login page after successful registration
                    header("Location: ../pages/login.php");
                    exit;
                } 
                else {
                    $errors[] = "Error: " . $stmt->error;
                }
            } 
            else {
                $errors[] = "Database error: could not prepare statement";
            }
        } 
        $conn->close();
    }

    // If there were errors, display them
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p>Error: $error</p>";
        }
    }
?>