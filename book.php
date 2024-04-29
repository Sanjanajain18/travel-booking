<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!-- Swiper CSS link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <!-- Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- Header section starts -->
<section class="header">
    <a href="home.php" class="logo">travel.</a>

    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!-- Header section ends -->

<div class="heading" style="background:url(images/flow.jpg) no-repeat">
 <h1>book now </h1>
</div>

<!-- booking section starts -->

<section class="booking">
<h1 class="heading-title">book your trip!</h1>
<form action="book-form.php" method="post" class="book-form">

<div class="flex">
    <div class="inputBox">
        <span>name :</span>
        <input type="text" placeholder="enter your name" name="name" required>
    </div>
    <div class="inputBox">
        <span>email :</span>
        <input type="email" placeholder="enter your email" name="email" required>
    </div>
    <div class="inputBox">
        <span>phone :</span>
        <input type="tel" pattern="[789][0-9]{9}" placeholder="enter your number" name="phone" required>
    </div>
    <div class="inputBox">
        <span>address :</span>
        <input type="text" placeholder="enter your address" name="address" required>
    </div>
    <div class="inputBox">
        <span>where to :</span>
        <input type="text" placeholder="place you want to visit" name="location" required>
    </div>
    <div class="inputBox">
        <span>how many :</span>
        <input type="number" placeholder="number of guests" name="guests" required>
    </div>
    <div class="inputBox">
        <span>arrivals :</span>
        <input type="date" name="arrivals" required>
    </div>
    <div class="inputBox">
        <span>leaving :</span>
        <input type="date" name="leaving" required>
    </div>
</div>

<input type="submit" value="submit" class="btn" name="send">

</section>


<!-- booking section ends -->




<!-- Footer section starts -->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"><i class="fas fa-angle-right"></i> package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i> book</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i> ask questions </a>
            <a href="#"><i class="fas fa-angle-right"></i> about us </a>
            <a href="#"><i class="fas fa-angle-right"></i> privacy policy </a>
            <a href="#"><i class="fas fa-angle-right"></i> terms of use </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i> +919972693457 </a>
            <a href="#"><i class="fas fa-phone"></i> 1800 567 342 </a>
            <a href="#"><i class="fas fa-envelope"></i> travelsDK@gmail.com </a>
            <a href="#"><i class="fas fa-map"></i> manglore - india - 574200 </a>
        </div>

        <div class="box">
            <h3> follow us</h3>
            <a href="#"><i class="fab fa-instagram"></i> Instagram </a>
            <a href="#"><i class="fab fa-facebook"></i> facebook </a>
            <a href="#"><i class="fab fa-twitter"></i> twitter </a>
            <a href="#"><i class="fab fa-linkedin"></i> linkedin </a>
        </div>
    </div>

    <div class="credit">created by <span> Sanjana and Shahiz </span> | I MCA |</div>
</section>
<!-- Footer section ends -->

<!-- Swiper JS link -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- Custom JS file link -->
<script src="js/script.js"></script>

</body>
</html>
