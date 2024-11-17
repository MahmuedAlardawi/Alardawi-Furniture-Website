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
    <link rel="stylesheet" href="../css/index.css">

    <!-- Website logo -->
    <link rel="icon" href="../images/logo.png" type="image/png">

    <!-- Fonts, ex: instagram logo -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <!-- navbar -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/AlardawiFurniture/includes/php/navbar.php'; ?>

  <!-- home -->
  <div class="home" id="home_section">

    <!-- home_container -->
      <div class="home_container">

        <!-- home_content -->
        <div class="home_content">
          <h1>WELCOME TO</h1>
          <h2>THE FUTURE</h2>
          <p>Change how you live.</p>
          <a href="#services_section">Get Started</a>
        </div>

        <!-- home_img -->
        <div class="home_img">
          <img src="../images/home.png" alt="pic">
        </div>

      </div>

    </div>

  <!-- Services -->
  <div class="services" id="services_section">

    <!-- services_container -->   
    <div class="services_container">
      <h1>Our Services</h1>
      
      <!-- services_card1 -->
      <div class="services_card1">

        <img src="../images/shop.png" alt="pic">

        <!-- services_card_text -->
        <div class="services_card_text">
            <h2><a href="../pages/shop.php">Shope</a></h2>
            <p>Our team of designers will help you create your dream home.</p>
        </div>

      </div>

      <!-- services_card2 -->
      <div class="services_card2">

        <!-- services_card_text -->
        <div class="services_card_text">
            <h2><a href="../pages/about_us.php">About Us</a></h2>
            <p>Get to know us, understand our goals and desigred outcomes.</p>
        </div>

        <img src="../images/about_us.png" alt="pic">
      </div>
      
      <!-- services_card1 -->
      <div class="services_card1">

        <img src="../images/contact_us.png" alt="pic">

        <!-- services_card_text -->
        <div class="services_card_text">
            <h2><a href="../pages/contact_us.php">Contact Us</a></h2>
            <p>We are always open to new ideas and solutions.</p>
        </div>

      </div>

    </div>

  </div>

  <!-- footer -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/AlardawiFurniture/includes/php/footer.php'; ?>

  <!-- js -->
  <script src=""></script>
</body>
</html>