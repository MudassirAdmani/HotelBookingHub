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
    <!-- About -->
    <link rel="stylesheet" href="./css/about.css">
</head>

<body class="bg-light">
    <!-- Navbar -->
    <?php
    include('./partials/navbar.php');
    ?>
    <!-- Carousel -->
    <?php
    include('./partials/carousel.php');
    ?>
    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">About Us</h2>
        <div class="h-line btn-purple"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum <br>
            sapiente quos unde consectetur blanditiis praesentium!
        </p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <img src="./images/logo1.png" class="aboutImg" alt="">
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-5 mt-4 mt-lg-0 align-self-center">
                <p class="fw-bold fs-5"><span class="text-purple">//</span>About Us</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, molestias eum fugiat illum quaerat sapiente! Enim laborum reiciendis sequi iure provident suscipit expedita illo? Enim optio expedita eius quis sit.</p>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="" class="py-1 mx-1 text-decoration-none px-3 border-0 rounded-1 btn-orange text-white">Join Us</a>
                    <a href="" class="py-1 mx-1 text-decoration-none px-3 border-0 rounded-1 btn-orange text-white">Book Room</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Reach -->
    <?php
    include('./partials/reach.php');
    ?>
    <!-- Footer -->
    <?php
    include('./partials/footer.php');
    ?>
    <!-- Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js" integrity="sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- JS -->
    <!-- Carousel -->
    <script src="./js/carousel.js"></script>
</body>

</html>