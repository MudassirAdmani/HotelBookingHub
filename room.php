<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HotelBookingHub.com - Rooms</title>
    <!-- Links -->
    <?php
    include('./include/cdns/links.php');
    ?>
    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body class="bg-light">
    <?php
    // Navbar and Carousel
    include('./frontend/common/upper.php');
    // <!-- Rooms
    include('./frontend/room/ourroom.php');
    // Reach, Footer and Script
    include('./frontend/common/lower.php');
    // Swiper
    include('./include/cdns/swiper.php');
    ?>
</body>

</html>