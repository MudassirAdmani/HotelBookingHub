<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HotelBookingHub.com - Home</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- CSS -->
    <!-- Master -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Navbar -->
    <link rel="stylesheet" href="./css/navbar.css">
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