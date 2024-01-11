<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HotelBookingHub.com - Home</title>
    <!-- Links -->
    <?php
    include('./include/links.php');
    ?>
    <!-- About -->
    <link rel="stylesheet" href="./css/about.css">
</head>

<body class="bg-light">
    <?php
    // Navbar
    include('./partials/navbar.php');
    // Carousel
    include('./partials/carousel.php');
    // About
    include('./partials/aboutus.php');
    // Features
    include('./partials/features.php');
    // Management
    include('./partials/management.php');
    // Reach
    include('./partials/reach.php');
    // Footer
    include('./partials/footer.php');
    // Scripts
    include('./include/scripts.php');
    ?>
</body>

</html>