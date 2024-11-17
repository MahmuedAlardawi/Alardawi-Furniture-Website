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
    <link rel="stylesheet" href="../css/update.css">

    <!-- Website logo -->
    <link rel="icon" href="../images/logo.png" type="image/png">

    <!-- Fonts, ex: instagram logo -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <!-- navbar -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/AlardawiFurniture/includes/php/navbar.php'; ?>

    <!-- query all user data based on user id stored in session when logged-in-->
    <?php include '../actions/action_query_users.php'; ?>
    
    <!-- update_profile -->
    <div class='update_profile'>

        <h1>Edit Profile</h1>

        <form action="../actions/action_update.php" method="post" enctype="multipart/form-data"
         class="update_profile_form">

            <!-- form_control -->
            <div class="form_control">
                <label for="photo">Profile Photo:</label>
                <input type="file" id="photo" name="photo" accept="image/*">
            </div>

            <!-- form_control -->
            <div class="form_control">
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" 
                placeholder=<?= htmlspecialchars($first_name);?>>
            </div>

            <!-- form_control -->
            <div class="form_control">
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" 
                placeholder=<?= htmlspecialchars($last_name);?>>
            </div>

            <!-- form_control -->
            <div class="form_control">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" 
                placeholder=<?= htmlspecialchars($email); ?>>
                <span class="error_message" id="email_error"></span>
            </div>

            <!-- form_control -->
            <div class="form_control">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
                <span class="error_message" id="password_error"></span>
            </div>

            <!-- form_control -->
            <div class="form_control">
                <label for="new_password">New Password:</label>
                <input type="password" id="new_password" name="new_password">
                <span class="error_message" id="new_password_error"></span>
            </div>

            <!-- form_control -->
            <div class="form_control">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password">
                <span class="error_message" id="confirm_password_error"></span>
            </div>

            <small>Leave blank to keep the current data.</small>

            <!-- submit button -->
            <button type="submit" class="update_profile_btn">Update Profile</button>

        </form>

    </div>

    <!-- footer -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/AlardawiFurniture/includes/php/footer.php'; ?>
  
    <!-- js -->
    <script src="../js/update.js"></script>
</body>
</html>