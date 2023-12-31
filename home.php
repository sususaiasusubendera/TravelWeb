<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- font awesome link (CDN) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- header section starts -->
    <section class="header">
        <a href="home.php" class="logo">Travel.</a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- header section ends -->

    <!-- home section starts -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(assets/slide-1.jpg) no-repeat">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Travel Arround the World</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(assets/slide-2.jpg) no-repeat">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Discover the New Places</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(assets/slide-3.jpg) no-repeat">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Make Your Tour Worthwhile</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- home section ends -->

    <!-- services section starts -->
    <section class="services">
        <h1 class="heading-title">Our Services</h1>
        <div class="box-container">
            <div class="box">
                <img src="assets/icon-1.png" alt="">
                <h3>Adventure</h3>
            </div>

            <div class="box">
                <img src="assets/icon-2.png" alt="">
                <h3>Tour Guide</h3>
            </div>

            <div class="box">
                <img src="assets/icon-3.png" alt="">
                <h3>Trekking</h3>
            </div>

            <div class="box">
                <img src="assets/icon-4.png" alt="">
                <h3>Camp Fire</h3>
            </div>

            <div class="box">
                <img src="assets/icon-5.png" alt="">
                <h3>Off Road</h3>
            </div>

            <div class="box">
                <img src="assets/icon-6.png" alt="">
                <h3>Camping</h3>
            </div>

        </div>
    </section>
    <!-- services section ends -->

    <!-- home about section starts -->
    <section class="home-about">
        <div class="image">
            <img src="assets/bochi-guitar.jpg" alt="">
        </div>

        <div class="content">
            <h3>About Us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, natus. Repellendus fugiat vitae dicta,
                debitis sit molestiae. Officia assumenda odio, fugit eligendi vitae dignissimos veniam, quis iste ipsa
                sapiente blanditiis!</p>
            <a href="about.php" class="btn">Read More</a>
        </div>
    </section>
    <!-- home about section ends -->

    <!-- home packages section starts -->
    <!-- home packages section ends -->

    <!-- footer section starts -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> Package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i> Book</a>
            </div>

            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"><i class="fas fa-angle-right"></i> Ask Questions</a>
                <a href="#"><i class="fas fa-angle-right"></i> About Us</a>
                <a href="#"><i class="fas fa-angle-right"></i> Privacy Policy</a>
                <a href="#"><i class="fas fa-angle-right"></i> Terms of Use</a>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"><i class="fas fa-phone"></i> +62 821-234-567</a>
                <a href="#"><i class="fas fa-envelope"></i> test@testing.com</a>
                <a href="#"><i class="fas fa-map"></i> Indonesia</a>
            </div>

            <div class="box">
                <h3>Follow Us</h3>
                <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
                <a href="#"><i class="fab fa-twitter"></i> Linkedin</a>
            </div>
        </div>

        <div class="credit">Created by <span>sususaiasusubendera</span> | All right reserved!</div>
    </section>
    <!-- footer section ends -->

    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="js/script.js"></script>
</body>

</html>