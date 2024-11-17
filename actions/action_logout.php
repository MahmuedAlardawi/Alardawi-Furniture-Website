    <!-- 
      CPC-403_Final_Project
      Mahmued Alardawi - 213529 - CS1 
  -->

<?php
  session_start();

  // Unset all of the session variables
  $_SESSION = array();

  // Destroy the session.
  session_destroy();

  // Redirect to login page
  header("location: ../pages/index.php");
  exit;
?>