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
    <link rel="stylesheet" href="../css/feedback.css">

    <!-- Website logo -->
    <link rel="icon" href="../images/logo.png" type="image/png">

    <!-- Fonts, ex: instagram logo -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <!-- navbar -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/AlardawiFurniture/includes/php/navbar.php'; ?>

    <div class="feedback">
        <h1>Smart Furniture Design Feedback</h1>

        <!-- feedback -->
        <div class="feedback_container">
            <form action="../actions/action_feedback.php" method="post" class="feedback_form">

                <fieldset>

                    <legend>Personal Information</legend>

                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name">
                    <span class="error_message" id="name_error"></span>
                    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email">
                    <span class="error_message" id="email_error"></span>
                    
                    <label for="phone">Phone:</label>
                    <input type="text" id="phone" name="phone">
                    <span class="error_message" id="phone_error"></span>
                    
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address">
                    <span class="error_message" id="address_error"></span>

                </fieldset>
                
                <fieldset>

                    <legend>Feedback</legend>

                    <label for="product">Favorite Product:</label>
                    <select id="product" name="product">
                        <option value="">Select a product</option>
                        <option value="sofa">Sofa</option>
                        <option value="bed">Bed</option>
                        <option value="table">Table</option>
                        <option value="chair">Chair</option>
                    </select>
                    <span class="error_message" id="product_error"></span>
                    
                    <p>Rate our service:</p>
                    <label><input type="radio" name="service_rating" value="excellent"> Excellent</label>
                    <label><input type="radio" name="service_rating" value="good"> Good</label>
                    <label><input type="radio" name="service_rating" value="average"> Average</label>
                    <label><input type="radio" name="service_rating" value="poor"> Poor</label>
                    <span class="error_message" id="service_rating_error"></span>
                    
                    <p>Features you are interested in:</p>
                    <label><input type="checkbox" name="features[]" value="smart_lighting"> Smart Lighting</label>
                    <label><input type="checkbox" name="features[]" value="voice_control"> Voice Control</label>
                    <label><input type="checkbox" name="features[]" value="remote_access"> Remote Access</label>
                    <span class="error_message" id="features_error"></span>
                    
                    <label for="comments">Additional Comments:</label>
                    <textarea id="comments" name="comments"></textarea>
                    <span class="error_message" id="comments_error"></span>

                </fieldset>
                
                <button type="submit">Submit Feedback</button>
            </form>
        </div>
    </div>
    
    <!-- footer -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/AlardawiFurniture/includes/php/footer.php'; ?>
  
    <!-- js -->
    <script src="../js/feedback.js"></script>
</body>
</html>