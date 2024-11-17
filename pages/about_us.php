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
    <link rel="stylesheet" href="../css/about_us.css">

    <!-- Website logo -->
    <link rel="icon" href="../images/logo.png" type="image/png">

    <!-- Fonts, ex: instagram logo -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <!-- navbar -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/AlardawiFurniture/includes/php/navbar.php'; ?>

    <!-- about -->
    <div class="about">

        <!-- about_container -->
        <div class="about_container">
            <h1>About Us</h1>

            <!-- about_image -->
            <img src="../images/logo.png" alt="About Alardawi Furniture" class="about_image">

            <!-- about_content -->
            <div class="about_content">
                <ul>
                    <li>Welcome to Alardawi Furniture, where we blend innovation with style to create functional furniture for modern living spaces. Our mission is to provide high-quality, smart furniture solutions that enhance your lifestyle and living spaces.</li>
                    <li>Founded in 2024 by Mahmued Alardawi, Alardawi Furniture has grown from a small startup into a leading furniture brand known for its dedication to craftsmanship, quality, and customer satisfaction. Our range of products includes [list some product types], all designed with our customers' needs in mind.</li>
                    <li>At Alardawi Furniture, we are committed to sustainability and environmentally friendly practices, ensuring that our products not only beautify your home but also contribute positively to the planet.</li>
                    <li>Thank you for choosing Alardawi Furniture. We look forward to helping you create your dream home.</li>
                </ul>
            </div>

        </div>

        <div class="pdf_container">            
            <h1>Resume</h1>

            <div class="pdf_content">            
                <object data="../pdf/resume.pdf" type="application/pdf" width="100%" height="100%"></object>
            </div>
        </div>

    </div>   

    <!-- footer -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/AlardawiFurniture/includes/php/footer.php'; ?>
  
    <!-- js -->
    <script src=""></script>
</body>
</html>