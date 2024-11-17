    <!-- 
      CPC-403_Final_Project
      Mahmued Alardawi - 213529 - CS1 
  -->
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alardawi Furniture</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../css/profile.css">

    <!-- Website logo -->
    <link rel="icon" href="../images/logo.png" type="image/png">

    <!-- Fonts, ex: instagram logo -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Navbar -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/AlardawiFurniture/includes/php/navbar.php'; ?>

    <!-- query all user data based on user id stored in session when logged-in-->
    <?php include '../actions/action_query_users.php'; ?>

    <!-- profile -->
    <div class="profile">
        <h1>User Profile</h1>
        
        <!-- profile_container -->
        <div class="profile_container">

            <!-- profile_img -->
            <div class="profile_img">
                <img src=<?= htmlspecialchars($photo); ?> alt="pic">
            </div>

            <!-- display user data here -->
            <div class="profile_info">
                <p><strong>User ID:</strong> <?= htmlspecialchars($id); ?></p>
                <p><strong>Name:</strong> <?= htmlspecialchars($first_name . ' ' . $last_name); ?></p>
                <p><strong>Email:</strong> <?= htmlspecialchars($email); ?></p>
                <p><strong>Account Created:</strong> <?= htmlspecialchars($created_at); ?></p>
            </div>

            <!-- profile_edit -->
            <div class="profile_edit">
                <a href="../pages/update.php">Edit Profile</a>

                <!-- delete profile -->
                <form id="deleteProfileForm" action="../actions/action_delete.php" method="post" style="display: inline;">
                    <input type="hidden" id="deletePassword" name="deletePassword">
                    <a href="#" id="deleteProfileLink">Delete Profile</a>
                    <span class="error_message">
                        <?php 
                            if(isset($_SESSION['delete_error'])) { 
                                echo $_SESSION['delete_error']; 
                                unset($_SESSION['delete_error']); 
                            } 
                        ?>
                    </span>
                </form>

            </div>
            
        </div>

    </div>

    <!-- footer -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/AlardawiFurniture/includes/php/footer.php'; ?>
  
    <!-- js -->
    <script src="../js/profile.js"></script>
</body>
</html>