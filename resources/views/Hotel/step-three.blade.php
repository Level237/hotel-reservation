@extends('layouts.frontoffice.main')
@section('title')
Finalisation de votre reservation
@endsection

@section('content')
<main>

    <!-- =======================
    Main Banner START -->
    <section class="pt-4">
        <div class="container">

            <!-- Title -->
            <div class="row">
                <div class="col-12 mb-4">
                    <h1 class="fs-3">Luxury Room with Balcony</h1>
                    <!-- Location -->
                    <p class="fw-bold mb-0"><i class="bi bi-geo-alt me-2"></i>5855 W Century Blvd, Los Angeles - 90045 </p>
                </div>
            </div>

            <!-- Slider START -->
            <div class="tiny-slider arrow-round arrow-blur">
                <div class="tiny-slider-inner" data-autoplay="true" data-arrow="true" data-edge="0" data-dots="false" data-items="2" data-items-sm="1">
                    <!-- Slider item -->
                    <div>
                        <a class="w-100 h-100" data-glightbox="" data-gallery="gallery" href="assets/images/gallery/13.jpg">
                            <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                <!-- Image -->
                                <img src="assets/images/gallery/13.jpg" class="rounded-3" alt="">
                                <!-- Full screen button -->
                                <div class="hover-element w-100 h-100">
                                    <i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Slider item -->
                    <div>
                        <a class="w-100 h-100" data-glightbox="" data-gallery="gallery" href="assets/images/gallery/16.jpg">
                            <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                <!-- Image -->
                                <img src="assets/images/gallery/16.jpg" class="rounded-3" alt="">
                                <!-- Full screen button -->
                                <div class="hover-element w-100 h-100">
                                    <i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Slider item -->
                    <div>
                        <a class="w-100 h-100" data-glightbox="" data-gallery="gallery" href="assets/images/gallery/11.jpg">
                            <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                <!-- Image -->
                                <img src="assets/images/gallery/11.jpg" class="rounded-3" alt="">
                                <!-- Full screen button -->
                                <div class="hover-element w-100 h-100">
                                    <i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Slider item -->
                    <div>
                        <a class="w-100 h-100" data-glightbox="" data-gallery="gallery" href="assets/images/gallery/14.jpg">
                            <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                <!-- Image -->
                                <img src="assets/images/gallery/14.jpg" class="rounded-3" alt="">
                                <!-- Full screen button -->
                                <div class="hover-element w-100 h-100">
                                    <i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Slider START -->
        </div>
    </section>
    <!-- =======================
    Main Banner END -->

    <!-- =======================
    Room detail START -->
    <section class="pt-0">
        <div class="container">
            <div class="row">
                <aside class="col-xl-7 ">
                    <div class="card bg-transparent border">
                        <!-- Card header START -->
                        <div class="card-header bg-transparent border-bottom">
                            <!-- Title -->
                            <h4 class="card-title mb-0">Price Summary</h4>
                        </div>
                        <!-- Card header END -->

                        <!-- Card body START -->
                        <div class="card-body">

                            <div class="row g-4 mb-3">
                                <!-- Item -->
                                <div class="col-md-6">
                                    <div class="bg-light py-3 px-4 rounded-3">
                                        <h6 class="fw-light small mb-1">Check-in</h6>
                                        <h6 class="mb-0">{{ $checkIn }} 2023</h6>
                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="col-md-6">
                                    <div class="bg-light py-3 px-4 rounded-3">
                                        <h6 class="fw-light small mb-1">Check out</h6>
                                        <h6 class="mb-0">{{ $checkOut }} March 2023</h6>
                                    </div>
                                </div>
                            </div>

                            <!-- List -->
                            <ul class="list-group list-group-borderless mb-3">
                                <li class="list-group-item px-2 d-flex justify-content-between">
                                    <span class="h6 fw-light mb-0">$6,100 x 2 Nights</span>
                                    <span class="h6 fw-light mb-0">$13,200</span>
                                </li>
                                <li class="list-group-item px-2 d-flex justify-content-between">
                                    <span class="h6 fw-light mb-0">10% campaign discount</span>
                                    <span class="h6 fw-light mb-0">-$500</span>
                                </li>
                                <li class="list-group-item px-2 d-flex justify-content-between">
                                    <span class="h6 fw-light mb-0">Services Fee</span>
                                    <span class="h6 fw-light mb-0">$100</span>
                                </li>
                                <li class="list-group-item bg-light d-flex justify-content-between rounded-2 px-2 mt-2">
                                    <span class="h5 fw-normal mb-0 ps-1">Total</span>
                                    <span class="h5 fw-normal mb-0">$13,500</span>
                                </li>
                            </ul>

                            <!-- Button -->
                            <div class="d-grid gap-2">
                                <a href="hotel-booking.html.htm" class="btn btn-dark mb-0">Reserver</a>
                            </div>
                        </div>
                        <!-- Card body END -->
                    </div>
                </aside>
                <!-- Detail START -->
                <div class="col-xl-5 d-none d-xl-block">
                    <div class="card card-body bg-light p-4">
                        <!-- Title -->
                        <h4 class="card-title">Besoin d'aide?</h4>

                        <!-- List -->
                        <ul class="list-group list-group-borderless">
                            <li class="list-group-item py-3">
                                <a href="#" class="h6 mb-0">
                                    <i class="bi fa-fw bi-telephone-forward text-primary fs-5 me-2"></i>
                                    <span class="fw-light me-1">Appellez-nous au:</span>+237 658 511 565
                                </a>
                            </li>

                            <li class="list-group-item py-0"><hr class="my-0"></li><!-- Divider -->

                            <li class="list-group-item py-3">
                                <h6 class="mb-0">
                                    <i class="bi fa-fw bi-alarm text-primary fs-5 me-2"></i>
                                    <span class="h6 fw-light me-1 mb-0">Ouvert:</span>08H à 20H
                                </h6>
                            </li>

                            <li class="list-group-item py-0"><hr class="my-0"></li><!-- Divider -->

                            <li class="list-group-item py-3">
                                <a href="#" class="h6 mb-0">
                                    <i class="bi fa-fw bi-headset text-primary fs-5 me-2"></i>Appellez-nous
                                </a>
                            </li>

                            <li class="list-group-item py-0"><hr class="my-0"></li><!-- Divider -->

                            <li class="list-group-item pt-3 pb-0">
                                <a href="contact.html.htm" class="h6 mb-0">
                                    <i class="bi fa-fw bi-calendar-check text-primary fs-5 me-2"></i>reservez un Rendez-vous
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Detail END -->

                <!-- Right side content START -->

                <!-- Right side content END -->
            </div>
        </div>
    </section>
    <!-- =======================
    Room detail END -->

    </main>
@endsection
