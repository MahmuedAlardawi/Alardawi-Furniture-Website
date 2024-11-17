    <!-- 
      CPC-403_Final_Project
      Mahmued Alardawi - 213529 - CS1 
  -->

<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/AlardawiFurniture/database/db_connection.php';

$email = $password = "";
$email_err = $password_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Database validation
    $sql = "SELECT id, email, password FROM users WHERE email = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows == 1) {
            $stmt->bind_result($id, $email, $hashed_password);
            if ($stmt->fetch()) {
                if (password_verify($password, $hashed_password)) {
                    // Password is correct, start a new session
                    $_SESSION['loggedin'] = true;
                    $_SESSION['id'] = $id;
                    $_SESSION['email'] = $email;
                    
                    // Redirect user to welcome page
                    header("location: ../pages/index.php");
                } 
                else {
                    $password_err = "The password you entered was not valid.";
                }
            }
        } 
        else {
            $email_err = "No account found with that email.";
        }
        $stmt->close();
    }
    $conn->close();
}
?>
