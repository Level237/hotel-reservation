<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Hotelier - Hotel HTML Template</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="keywords">
<meta content="" name="description">

<link href="img/favicon.ico" rel="icon">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="../../css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

<link href="../../ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="../../npm/bootstrap-icons%401.4.1/font/bootstrap-icons.css" rel="stylesheet">

<link href="{{ asset('asset/lib/animate/animate.min.css') }}" rel="stylesheet">
<link href="{{ asset('asset/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('asset/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet">

<link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">

<link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
</head>
<body>
<div class="container-xxl bg-white p-0">




<div class="container-fluid bg-dark px-0">
<div class="row gx-0">
<div class="col-lg-3 bg-dark d-none d-lg-block">
<a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
<h1 class="m-0 text-primary text-uppercase">Hotelier</h1>
</a>
</div>
<div class="col-lg-9">

<nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
<a href="index.html" class="navbar-brand d-block d-lg-none">
<h1 class="m-0 text-primary text-uppercase">Hotelier</h1>
</a>
<button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
<div class="navbar-nav mr-auto py-0">
<div class="nav-item dropdown">
<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Home</a>
<div class="dropdown-menu fade-up rounded-0 m-0">
<a href="home-1.html" class="dropdown-item">Home 1</a>
<a href="home-2.html" class="dropdown-item">Home 2</a>
</div>
</div>
<div class="nav-item dropdown">
<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About</a>
<div class="dropdown-menu fade-down rounded-0 m-0">
<a href="about-1.html" class="dropdown-item">About 1</a>
<a href="about-2.html" class="dropdown-item">About 2</a>
</div>
</div>
<div class="nav-item dropdown">
<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Rooms</a>
<div class="dropdown-menu fade-up rounded-0 m-0">
<a href="room-grid.html" class="dropdown-item">Room Grid</a>
<a href="room-list.html" class="dropdown-item">Room List</a>
<a href="room-detail.html" class="dropdown-item">Room Detail</a>
</div>
</div>
<div class="nav-item dropdown">
<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
<div class="dropdown-menu fade-down rounded-0 m-0">
<a href="service-1.html" class="dropdown-item">Service 1</a>
<a href="service-2.html" class="dropdown-item">Service 2</a>
<a href="service-detail.html" class="dropdown-item">Service Detail</a>
<a href="blog-grid.html" class="dropdown-item">Blog Grid</a>
<a href="blog-list.html" class="dropdown-item">Blog List</a>
<a href="blog-detail.html" class="dropdown-item">Blog Detail</a>
<a href="faq.html" class="dropdown-item">FAQs</a>
<a href="gallery.html" class="dropdown-item">Gallery</a>
<a href="contact.html" class="dropdown-item">Contact Us</a>
<a href="booking-1.html" class="dropdown-item">Booking 1</a>
<a href="booking-2.html" class="dropdown-item">Booking 2</a>
<a href="team.html" class="dropdown-item">Our Team</a>
<a href="testimonial-1.html" class="dropdown-item">Testimonial 1</a>
<a href="testimonial-2.html" class="dropdown-item">Testimonial 2</a>
<a href="404.html" class="dropdown-item">404</a>
</div>
</div>
<a href="element.html" class="nav-item nav-link">Elements</a>
</div>

</div>
</nav>
</div>
</div>
</div>


<div class="container-fluid p-0 mb-5">
<div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-inner">
<div class="carousel-item active">
<img class="w-100" src="{{ asset('asset/img/carousel-1.jpg') }}" alt="Image">
<div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
<div class="p-3" style="max-width: 700px;">
<h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Luxury Living</h6>
<h1 class="display-3 text-white mb-4 animated slideInDown">Discover A Brand Luxurious Hotel</h1>
<a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our Rooms</a>
<a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book A Room</a>
</div>
</div>
</div>
<div class="carousel-item">
<img class="w-100" src="{{ asset('asset/img/carousel-2.jpg') }}" alt="Image">
<div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
<div class="p-3" style="max-width: 700px;">
<h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Luxury Living</h6>
<h1 class="display-3 text-white mb-4 animated slideInDown">Discover A Brand Luxurious Hotel</h1>
<a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our Rooms</a>
<a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book A Room</a>
</div>
</div>
</div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="visually-hidden">Next</span>
</button>
</div>
</div>


<div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
<div class="container">
<div class="bg-white shadow" style="padding: 35px;">
<div class="row g-2">
<div class="col-md-10">
<div class="row g-2">
<div class="col-md-3">
<div class="date" id="date1" data-target-input="nearest">
<input type="text" class="form-control datetimepicker-input" placeholder="Check in" data-target="#date1" data-toggle="datetimepicker">
</div>
</div>
  <div class="col-md-3">
<div class="date" id="date2" data-target-input="nearest">
<input type="text" class="form-control datetimepicker-input" placeholder="Check out" data-target="#date2" data-toggle="datetimepicker">
</div>
</div>
<div class="col-md-3">
<select class="form-select">
<option selected="">Adult</option>
<option value="1">Adult 1</option>
<option value="2">Adult 2</option>
<option value="3">Adult 3</option>
</select>
</div>
<div class="col-md-3">
<select class="form-select">
<option selected="">Child</option>
<option value="1">Child 1</option>
<option value="2">Child 2</option>
<option value="3">Child 3</option>
</select>
</div>
</div>
</div>
<div class="col-md-2">
<button class="btn btn-primary w-100">Submit</button>
</div>
</div>
</div>
</div>
</div>


<div class="container-xxl py-5">
<div class="container">
<div class="row g-5 align-items-center">
<div class="col-lg-6">
<h6 class="section-title text-start text-primary text-uppercase">About Us</h6>
<h1 class="mb-4">Welcome to <span class="text-primary text-uppercase">Hotelier</span></h1>
<p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
<div class="row g-3 pb-4">
<div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
<div class="border rounded p-1">
<div class="border rounded text-center p-4">
<i class="fa fa-hotel fa-2x text-primary mb-2"></i>
<h2 class="mb-1" data-toggle="counter-up">1234</h2>
<p class="mb-0">Rooms</p>
</div>
</div>
</div>
<div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
<div class="border rounded p-1">
<div class="border rounded text-center p-4">
<i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
<h2 class="mb-1" data-toggle="counter-up">1234</h2>
<p class="mb-0">Staffs</p>
</div>
</div>
</div>
<div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
<div class="border rounded p-1">
<div class="border rounded text-center p-4">
<i class="fa fa-users fa-2x text-primary mb-2"></i>
<h2 class="mb-1" data-toggle="counter-up">1234</h2>
<p class="mb-0">Clients</p>
</div>
</div>
</div>
</div>
<a class="btn btn-primary py-3 px-5 mt-2" href="">Explore More</a>
</div>
<div class="col-lg-6">
<div class="row g-3">
<div class="col-6 text-end">
<img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="{{ asset('asset/img/about-1.jpg') }}" style="margin-top: 25%;">
</div>
<div class="col-6 text-start">
<img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="{{ asset('asset/img/about-2.jpg') }}">
</div>
<div class="col-6 text-end">
<img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="{{ asset('asset/img/about-3.jpg') }}">
</div>
<div class="col-6 text-start">
<img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="{{ asset('asset/img/about-4.jpg') }}">
</div>
</div>
</div>
</div>
</div>
</div>


<div class="container-xxl py-5">
<div class="container">
<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
<h6 class="section-title text-center text-primary text-uppercase">Reserver Rapidement</h6>
<h1 class="mb-5">Explorer Rapidement <span class="text-primary text-uppercase">Les Chambres</span></h1>
</div>
<div class="row g-4">
<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
<div class="room-item rounded">
<div class="position-relative">
<img class="img-fluid" src="{{ asset('asset/img/room-1.jpg') }}" alt="">
<small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$100/Night</small>
</div>
<div class="p-4 mt-2">
<div class="d-flex justify-content-between mb-3">
<h5 class="mb-0">Junior Suite</h5>
<div class="ps-2">
<small class="fa fa-star text-primary"></small>
<small class="fa fa-star text-primary"></small>
<small class="fa fa-star text-primary"></small>
<small class="fa fa-star text-primary"></small>
<small class="fa fa-star text-primary"></small>
</div>
</div>
<div class="d-flex mb-3">
<small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
<small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
<small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
</div>
<p class="text-body mb-3">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
<div class="d-flex justify-content-between">
<a class="btn btn-sm btn-primary rounded py-2 px-4" href="">View Detail</a>
 <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
<div class="room-item rounded">
<div class="position-relative">
<img class="img-fluid" src="{{ asset('asset/img/room-2.jpg') }}" alt="">
<small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$100/Night</small>
</div>
<div class="p-4 mt-2">
<div class="d-flex justify-content-between mb-3">
<h5 class="mb-0">Executive Suite</h5>
<div class="ps-2">
<small class="fa fa-star text-primary"></small>
<small class="fa fa-star text-primary"></small>
<small class="fa fa-star text-primary"></small>
<small class="fa fa-star text-primary"></small>
<small class="fa fa-star text-primary"></small>
</div>
</div>
<div class="d-flex mb-3">
<small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
<small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
<small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
</div>
<p class="text-body mb-3">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
<div class="d-flex justify-content-between">
<a class="btn btn-sm btn-primary rounded py-2 px-4" href="">View Detail</a>
<a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
<div class="room-item rounded">
<div class="position-relative">
<img class="img-fluid" src="{{ asset('asset/img/room-3.jpg') }}" alt="">
<small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$100/Night</small>
</div>
<div class="p-4 mt-2">
<div class="d-flex justify-content-between mb-3">
<h5 class="mb-0">Super Deluxe</h5>
<div class="ps-2">
<small class="fa fa-star text-primary"></small>
<small class="fa fa-star text-primary"></small>
<small class="fa fa-star text-primary"></small>
<small class="fa fa-star text-primary"></small>
<small class="fa fa-star text-primary"></small>
</div>
</div>
<div class="d-flex mb-3">
<small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
<small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
<small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
</div>
<p class="text-body mb-3">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
<div class="d-flex justify-content-between">
<a class="btn btn-sm btn-primary rounded py-2 px-4" href="">View Detail</a>
<a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="container-xxl py-5 px-0 wow fadeIn" data-wow-delay="0.1s">
<div class="row g-0">
<div class="col-md-6 bg-dark d-flex align-items-center">
<div class="p-5">
<h6 class="section-title text-start text-white text-uppercase mb-3">Luxury Living</h6>
<h1 class="text-white mb-4">Discover A Brand Luxurious Hotel</h1>
<p class="text-white mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
<a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Our Rooms</a>
<a href="" class="btn btn-light py-md-3 px-md-5">Book A Room</a>
</div>
</div>
<div class="col-md-6">
<div class="video">
<button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
<span></span>
</button>
</div>
</div>
</div>
</div>
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content rounded-0">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">

<div class="ratio ratio-16x9">
<iframe class="embed-responsive-item" src="" id="video" allowfullscreen="" allowscriptaccess="always" allow="autoplay"></iframe>
</div>
</div>
</div>
</div>
</div>






<div class="container-xxl testimonial my-5 py-5 bg-dark wow fadeIn" data-wow-delay="0.1s">
<div class="container">
<div class="owl-carousel testimonial-carousel py-5">
<div class="testimonial-item position-relative bg-white rounded overflow-hidden">
<p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd et erat magna eos</p>
<div class="d-flex align-items-center">
<img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-1.jpg" style="width: 45px; height: 45px;">
<div class="ps-3">
<h6 class="fw-bold mb-1">Client Name</h6>
<small>Profession</small>
</div>
</div>
<i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
</div>
<div class="testimonial-item position-relative bg-white rounded overflow-hidden">
<p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd et erat magna eos</p>
<div class="d-flex align-items-center">
<img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-2.jpg" style="width: 45px; height: 45px;">
<div class="ps-3">
<h6 class="fw-bold mb-1">Client Name</h6>
<small>Profession</small>
</div>
</div>
<i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
</div>
<div class="testimonial-item position-relative bg-white rounded overflow-hidden">
<p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd et erat magna eos</p>
<div class="d-flex align-items-center">
<img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-3.jpg" style="width: 45px; height: 45px;">
<div class="ps-3">
<h6 class="fw-bold mb-1">Client Name</h6>
<small>Profession</small>
</div>
</div>
<i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
</div>
</div>
</div>
</div>







<div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
<div class="container pb-5">
<div class="row g-5">
<div class="col-md-6 col-lg-4">
<div class="bg-primary rounded p-4">
<a href="index.html"><h1 class="text-white text-uppercase mb-3">Hotelier</h1></a>
<p class="text-white mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum</p>
</div>
</div>
<div class="col-md-6 col-lg-3">
<h6 class="section-title text-start text-primary text-uppercase mb-4">Contact</h6>
<p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
<p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
<p class="mb-2"><i class="fa fa-envelope me-3"></i><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3851565e57785d40595548545d165b5755">[email&#160;protected]</a></p>
<div class="d-flex pt-2">
<a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
<a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
<a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
<a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
</div>
</div>
<div class="col-lg-5 col-md-12">
<div class="row gy-5 g-4">
<div class="col-md-6">
<h6 class="section-title text-start text-primary text-uppercase mb-4">Company</h6>
<a class="btn btn-link" href="">About Us</a>
<a class="btn btn-link" href="">Contact Us</a>
<a class="btn btn-link" href="">Privacy Policy</a>
<a class="btn btn-link" href="">Terms & Condition</a>
<a class="btn btn-link" href="">Support</a>
</div>
<div class="col-md-6">
<h6 class="section-title text-start text-primary text-uppercase mb-4">Services</h6>
<a class="btn btn-link" href="">Food & Restaurant</a>
<a class="btn btn-link" href="">Spa & Fitness</a>
<a class="btn btn-link" href="">Sports & Gaming</a>
<a class="btn btn-link" href="">Event & Party</a>
<a class="btn btn-link" href="">GYM & Yoga</a>
</div>
</div>
</div>
</div>
</div>
<div class="container">
<div class="copyright">
<div class="row">
<div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
&copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved. Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
</div>
<div class="col-md-6 text-center text-md-end">
<div class="footer-menu">
<a href="">Home</a>
<a href="">Cookies</a>
<a href="">Help</a>
<a href="">FQAs</a>
</div>
</div>
</div>
</div>
</div>
</div>


<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../../jquery-3.4.1.min.js" type="e3d74657827b853ebf836cb3-text/javascript"></script>
<script src="../../npm/bootstrap%405.0.0/dist/js/bootstrap.bundle.min.js" type="e3d74657827b853ebf836cb3-text/javascript"></script>
<script src="lib/wow/wow.min.js" type="e3d74657827b853ebf836cb3-text/javascript"></script>
<script src="lib/rating/rating.js" type="e3d74657827b853ebf836cb3-text/javascript"></script>
<script src="lib/easing/easing.min.js" type="e3d74657827b853ebf836cb3-text/javascript"></script>
<script src="lib/waypoints/waypoints.min.js" type="e3d74657827b853ebf836cb3-text/javascript"></script>
<script src="lib/counterup/counterup.min.js" type="e3d74657827b853ebf836cb3-text/javascript"></script>
<script src="lib/owlcarousel/owl.carousel.min.js" type="e3d74657827b853ebf836cb3-text/javascript"></script>
<script src="lib/tempusdominus/js/moment.min.js" type="e3d74657827b853ebf836cb3-text/javascript"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js" type="e3d74657827b853ebf836cb3-text/javascript"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js" type="e3d74657827b853ebf836cb3-text/javascript"></script>

<script src="js/main.js" type="e3d74657827b853ebf836cb3-text/javascript"></script>
<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="e3d74657827b853ebf836cb3-|49" defer=""></script></body>
</html>
