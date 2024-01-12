<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HotelBookingHub.com - Home</title>
    <!-- Links -->
    <?php
    include('./include/cdns/links.php');
    ?>
    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Availability -->
    <link rel="stylesheet" href="./css/home/availability.css">
    <!-- Facility -->
    <link rel="stylesheet" href="./css/home/facility.css">
</head>

<body class="bg-light">
    <?php
    // Navbar and Carousel
    include('./frontend/common/upper.php');
    // Availability Form
    include('./frontend/home/availability.php');
    // Our Rooms
    include('./frontend/home/rooms.php');
    // Our Facilities
    include('./frontend/home/facilities.php');
    // Our Testimonials
    include('./frontend/home/testimonials.php');
    // Reach, Footer and Script
    include('./frontend/common/lower.php');
    // Swiper
    include('./include/cdns/swiper.php');
    ?>
    <!-- Testimonial -->
    <script src="./js/home/testimonial.js"></script>
</body>

</html>