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
    <!-- Availability -->
    <link rel="stylesheet" href="./css/availability.css">
    <!-- Facility -->
    <link rel="stylesheet" href="./css/facility.css">
</head>

<body class="bg-light">
    <?php
    // Navbar
    include('./partials/navbar.php');
    // Carousel
    include('./partials/carousel.php');
    // Availability Form
    include('./partials/availability.php');
    // Our Rooms
    include('./partials/rooms.php');
    // Our Facilities
    include('./partials/facilities.php');
    // Our Testimonials
    include('./partials/testimonials.php');
    // Reach Us
    include('./partials/reach.php');
    // Footer
    include('./partials/footer.php');
    // Scripts
    include('./include/scripts.php');
    ?>
    <!-- Testimonial -->
    <script src="./js/testimonial.js"></script>
</body>

</html>