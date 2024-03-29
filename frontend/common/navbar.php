<?php
include('include/database/db.php');
?>
<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand me-5 d-flex align-items-center fw-bold" href="index.php">
            <img class="img-fluid" src="images/logo/logo.png" alt="hotelbookinghub-logo">
            <span class="NavBrand h-font fs-4">HotelBookingHub</span>
        </a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list fs-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link me-2" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="room.php">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="contact.php">Contact</a>
                </li>
            </ul>
            <div class="d-flex">
                <button type="button" class="py-1 px-3 border-0 rounded-1 btn-orange text-white me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#loginModal">
                    Login
                </button>
                <button type="button" class="py-1 px-3 border-0 rounded-1 btn-orange text-white" data-bs-toggle="modal" data-bs-target="#registerModal">
                    Register
                </button>
            </div>
        </div>
    </div>
</nav>
<?php
// Login
include('login.php');
// Register
include('register.php');
?>