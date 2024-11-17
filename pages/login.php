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
    <link rel="stylesheet" href="../css/login.css">

    <!-- Website logo -->
    <link rel="icon" href="../images/logo.png" type="image/png">

    <!-- Fonts, ex: instagram logo -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <!-- navbar -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/AlardawiFurniture/includes/php/navbar.php'; ?>

    <!-- login -->
    <div class="login">

        <!-- login_container -->
        <div class="login_container">
            <h1>Login</h1>

            <!-- loginform -->
            <form action="../actions/action_login.php" method="post" class="login_form">

                <!-- form_control -->
                <div class="form_control">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email">
                    <span class="error_message" id="email_error"></span>
                </div>

                <!-- form_control -->
                <div class="form_control">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                    <span class="error_message" id="password_error"></span>
                </div>
                
                <!-- login_btn -->
                <button type="submit" class="login_btn">Login</button>

            </form>

        </div>

    </div>      

    <!-- footer -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/AlardawiFurniture/includes/php/footer.php'; ?>
  
    <!-- js -->
    <script src="../js/login.js"></script>
</body>
</html>