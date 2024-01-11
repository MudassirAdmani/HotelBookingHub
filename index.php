<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HotelBookingHub.com - Home</title>
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
    ?>
    <!-- Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js" integrity="sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- JS -->
    <!-- Carousel -->
    <script src="./js/carousel.js"></script>
    <!-- Testimonial -->
    <script src="./js/testimonial.js"></script>
</body>

</html>