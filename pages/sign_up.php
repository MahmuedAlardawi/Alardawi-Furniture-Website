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
    <link rel="stylesheet" href="../css/sign_up.css">

    <!-- Website logo -->
    <link rel="icon" href="../images/logo.png" type="image/png">

    <!-- Fonts, ex: instagram logo -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>


<body>
    <!-- navbar -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/AlardawiFurniture/includes/php/navbar.php'; ?>

    <!-- signup -->
    <div class="signup">

        <!-- signup_container -->
        <div class="signup_container">
            <h1>Sign Up</h1>

            <!-- signupform -->
            <form action="../actions/action_sign_up.php" method="post" class="signup_form">

                <!-- form_control -->
                <div class="form_control">
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" name="first_name">
                    <span class="error_message" id="first_name_error"></span>
                </div>

                <!-- form_control -->
                <div class="form_control">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name">
                    <span class="error_message" id="last_name_error"></span>
                </div>

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

                <!-- form_control -->
                <div class="form_control">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password">
                </div>

                
                <!-- signup_btn -->
                <button type="submit" class="signup_btn">Sign Up</button>

            </form>

        </div>

    </div>      

    <!-- footer -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/AlardawiFurniture/includes/php/footer.php'; ?>
  
    <!-- js -->
    <script src="../js/sign_up.js"></script>
</body>
</html>