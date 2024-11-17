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
    <link rel="stylesheet" href="../css/contact_us.css">

    <!-- Website logo -->
    <link rel="icon" href="../images/logo.png" type="image/png">

    <!-- Fonts, ex: instagram logo -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <!-- navbar -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/AlardawiFurniture/includes/php/navbar.php'; ?>

    <!-- contact -->
    <div class="contact">

        <!-- contact_container -->
        <div class="contact_container">
            <h1>Contact Information</h1>

            <!-- contact_details -->
            <div class="contact_details">
                <p><strong>University:</strong> King AbdulAziz University</p>
                <p><strong>Course:</strong> CPCS-403_Assignment-1</p>
                <p><strong>Name:</strong> Mahmued Alardawi</p>
                <p><strong>Email:</strong> <a href="mailto:mmalardawi@stu.kau.edu.sa">mmalardawi@stu.kau.edu.sa</a></p>
                <p><strong>ID:</strong> 2135209</p>
                <p><strong>Section:</strong> CS1</p>
            </div>

            <!-- contact_form -->
            <div class="contact_form">
                <h1>Contact Form</h1>
                <form action="../actions/action_contact_us.php" method="post" class="contact_us_form">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name">
                    <span class="error_message" id="name_error"></span>

                    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email">
                    <span class="error_message" id="email_error"></span>
                    
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" placeholder="Type ypur message here..."></textarea>
                    <span class="error_message" id="message_error"></span>
                    
                    <input type="submit" value="Send Message">
                </form>
            </div>

        </div>
        
    </div>   

    <!-- footer -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/AlardawiFurniture/includes/php/footer.php'; ?>
  
    <!-- js -->
    <script src="../js/contact_us.js"></script>
</body>
</html>