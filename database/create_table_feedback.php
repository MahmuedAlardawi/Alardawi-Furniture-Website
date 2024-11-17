    <!-- 
      CPC-403_Final_Project
      Mahmued Alardawi - 213529 - CS1 
  -->

  <?php
include 'db_connection.php';

// SQL to create table
$sql = "CREATE TABLE feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20),
    address VARCHAR(255),
    product VARCHAR(50) NOT NULL,
    service_rating ENUM('excellent', 'good', 'average', 'poor') NOT NULL,
    features SET('smart_lighting', 'voice_control', 'remote_access'),
    comments TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'feedabck' created successfully";
} 
else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>