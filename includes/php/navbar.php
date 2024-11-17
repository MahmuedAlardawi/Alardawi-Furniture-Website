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

  <!-- css -->
  <link rel="stylesheet" href="../includes/css/navbar.css">
</head>

<body>
  <!-- navbar -->
  <nav class="navbar">

    <!-- navbar container -->
    <div class="navbar_container">
      <a href='../pages/index.php#home_section' id="navbar_logo">
        <img src="../images/logo.png" alt="pic" id="navbar_img"> Alardawi Furniture
      </a>

      <!-- navbar menu -->
      <ul class="navbar_menu">

        <?php
        session_start();

        // navbar_items
        $navbar_items = [
          'Home' => '../pages/index.php#home_section',
          'Services' => '../pages/index.php#services_section',
          'Shop' => '../pages/shop.php',
          'Video' => '../pages/video.php',
          'Feedback' => '../pages/feedback.php',
          'About Us' => '../pages/about_us.php',
          'Contact Us' => '../pages/contact_us.php',
        ];

         // checks if user is logged in
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
          // Items for logged-in users
          $navbar_items['Profile'] = '../pages/profile.php';
          $navbar_items['Logout'] = '../actions/action_logout.php';
      } 
      else {
          // Items for guests
          $navbar_items['Sign Up'] = '../pages/sign_up.php';
          $navbar_items['Login'] = '../pages/login.php';
      }

        // loop through navbar items
        foreach ($navbar_items as $name => $url): ?>

          <li>

            <!-- navbar_item/btn -->
            <a href="<?= htmlspecialchars($url); ?>
            " class="<?= ($name == 'Sign Up') ? 'navbar_btn' : 'navbar_item'; ?>">
                     <?= htmlspecialchars($name); ?>
            </a>

          </li>

        <?php endforeach; ?>

      </ul>

    </div>

  </nav>

  <!-- JS -->
  <script src=""></script>
</body>
</html>