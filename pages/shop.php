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
    <link rel="stylesheet" href="../css/shop.css">

    <!-- Website logo -->
    <link rel="icon" href="../images/logo.png" type="image/png">

    <!-- Fonts, ex: instagram logo -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <!-- navbar -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/AlardawiFurniture/includes/php/navbar.php'; ?>

    <!-- Shop -->
    <div class="shop">

        <!-- shop_container -->
        <div class="shop_container">

            <!-- shop_header -->
            <header class="shop_header">
                <h1>Shop</h1>
            </header>  

            <!-- products -->
            <section class="products">

                <!-- product -->
                <article class="product">
                    <img src="../images/p1.png" alt="Product 1" class="product_img">
                    <h2 class="product_title">Living room</h2>
                    <a class="product_btn" href="../pages/design.php">Design</a>
                </article>

                <!-- product -->
                <article class="product">
                    <img src="../images/p2.png" alt="Product 1" class="product_img">
                    <h2 class="product_title">Bedroom</h2>
                    <a class="product_btn" href="../pages/design.php">Design</a>
                </article>

                <!-- product -->
                <article class="product">
                    <img src="../images/p3.png" alt="Product 1" class="product_img">
                    <h2 class="product_title">Dining room</h2>
                    <a class="product_btn" href="../pages/design.php">Design</a>
                </article>

                <!-- product -->
                <article class="product">
                    <img src="../images/p4.png" alt="Product 1" class="product_img">
                    <h2 class="product_title">Office</h2>
                    <a class="product_btn" href="../pages/design.php">Design</a>
                </article>

            </section>

        </div>

    </div> 

    <!-- footer -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/AlardawiFurniture/includes/php/footer.php'; ?>
  
    <!-- js -->
    <script src=""></script>
</body>
</html>