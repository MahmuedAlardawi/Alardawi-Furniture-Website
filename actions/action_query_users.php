    <!-- 
      CPC-403_Final_Project
      Mahmued Alardawi - 213529 - CS1 
  -->

<?php
    require $_SERVER['DOCUMENT_ROOT'] . '/AlardawiFurniture/database/db_connection.php';


    if (!isset($_SESSION['id'])) {
        header('Location: ../other/logout.php');
        exit;
    }

    $id = $_SESSION['id'];
    $stmt = $conn->prepare("SELECT first_name, last_name, email, photo, created_at FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($first_name, $last_name, $email, $photo, $created_at);
    $stmt->fetch();
    $stmt->close();
    $conn->close();
?>