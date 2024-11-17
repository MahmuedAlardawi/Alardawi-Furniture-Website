    <!-- 
      CPC-403_Final_Project
      Mahmued Alardawi - 213529 - CS1 
  -->

<?php
    include 'db_connection.php';

    // SQL to create table
    $sql = "CREATE TABLE (?) (
        
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Table '?' created successfully";
    } 
    else {
        echo "Error creating table: " . $conn->error;
    }

    $conn->close();
?>