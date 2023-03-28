@extends('layouts.backoffice.customer.main')
@section('title')
Mes Reservations
@endsection

@section('content')
<main>

    <!-- =======================
    Content START -->
    <section class="pt-3">
        <div class="container">
            <div class="row">

                <!-- Sidebar START -->
                <div class="col-lg-4 col-xl-3">
                    <!-- Responsive offcanvas body START -->
                    <div class="offcanvas-lg offcanvas-end" tabindex="-1" id="offcanvasSidebar">
                        <!-- Offcanvas header -->
                        <div class="offcanvas-header justify-content-end pb-2">
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasSidebar" aria-label="Close"></button>
                        </div>

                        <!-- Offcanvas body -->
                        <div class="offcanvas-body p-3 p-lg-0">
                            <div class="card bg-light w-100">

                                <!-- Edit profile button -->
                                <div class="position-absolute top-0 end-0 p-3">
                                    <a href="#" class="text-primary-hover" data-bs-toggle="tooltip" data-bs-title="Edit profile">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                </div>

                                <!-- Card body START -->
                                <div class="card-body p-3">
                                    <!-- Avatar and content -->
                                    <div class="text-center mb-3">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-xl mb-2">
                                            <img class="avatar-img rounded-circle border border-2 border-white" src="{{ asset('assets/images/profile-man.jfif') }}" alt="">
                                        </div>
                                        <h6 class="mb-0">{{ auth()->user()->name }}</h6>
                                        <a href="#" class="text-reset text-primary-hover small">{{ auth()->user()->email }}</a>
                                        <hr>
                                    </div>

                                    <!-- Sidebar menu item START -->
                                    <!-- Sidebar menu item START -->
                                    @include('layouts.backoffice.customer.sidebar')
                                    <!-- Sidebar menu item END -->
                                    <!-- Sidebar menu item END -->
                                </div>
                                <!-- Card body END -->
                            </div>
                        </div>
                    </div>
                    <!-- Responsive offcanvas body END -->
                </div>
                <!-- Sidebar END -->

                <!-- Main content START -->
                <div class="col-lg-8 col-xl-9">

                    <!-- Offcanvas menu button -->
                    <div class="d-grid mb-0 d-lg-none w-100">
                        <button class="btn btn-primary mb-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                            <i class="fas fa-sliders-h"></i> Menu
                        </button>
                    </div>

                    <!-- Wishlist START -->
                    <div class="card border bg-transparent">
                        <!-- Card header -->
                        <div class="card-header bg-transparent border-bottom">
                            <h4 class="card-header-title">Mes reservations</h4>
                        </div>

                        <!-- Card body START -->
                        <div class="card-body vstack gap-4">
                            <!-- Select and button -->


                            <!-- Wishlist item START -->
                            @foreach ($reservations as $reservation)
                                <div class="card shadow p-2">
                                    <div class="row g-0">
                                        <!-- Card img -->
                                        <div class="col-md-3">
                                            <img src="{{ asset($reservation->image) }}" class="card-img rounded-2" alt="Card image">
                                        </div>

                                        <!-- Card body -->
                                        <div class="col-md-9">
                                            <div class="card-body py-md-2 d-flex flex-column h-100">

                                                <!-- Rating and buttons -->
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <ul class="list-inline small mb-0">
                                                        <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                                                        <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                                                        <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                                                        <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="fa-solid fa-star-half-alt text-warning"></i></li>
                                                    </ul>


                                                </div>

                                                <!-- Title -->
                                                <h5 class="card-title mb-1">{{ $reservation->nom_hotel }}- Chambre numero {{ $reservation->chambre_id }}</h5>
                                                <small><i class="bi bi-geo-alt me-2"></i>{{ $reservation->ville }}</small>

                                                <!-- Price and Button -->
                                                <div class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
                                                    <!-- Button -->
                                                    <div class="d-flex align-items-center">
                                                        <h5 class="fw-bold mb-0 me-1">{{ $reservation->price_reser }} XAF</h5>
                                                        <span class="mb-0 me-2">/day</span>
                                                    </div>
                                                    <!-- Price -->
                                                    <div class="mt-3 mt-sm-0">
                                                        <a href="hotel-detail.html.htm" class="btn btn-sm btn-danger w-100 mb-0">Annuler cette reservation</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <!-- Wishlist item END -->

                            <!-- Wishlist item START -->

                            <!-- Wishlist item END -->

                        </div>
                        <!-- Card body END -->
                    </div>
                    <!-- Wishlist END -->

                </div>
                <!-- Main content END -->
            </div>
        </div>
    </section>
    <!-- =======================
    Content END -->

    </main>

@endsection
