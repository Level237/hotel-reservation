@extends('layouts.backoffice.admin.main-admin')
@section('title')
Dashboard
@endsection

@section('content')

<div class="page-content-wrapper p-xxl-4">

    <!-- Title -->
    <div class="row">
        <div class="col-12 mb-4 mb-sm-5">
            <div class="d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">Dashboard</h1>
                <div class="d-grid"><a href="#" class="btn btn-primary-soft mb-0"><i class="bi bi-plus-lg fa-fw"></i>Enregistrer un Hotel</a></div>
            </div>
        </div>
    </div>

    <!-- Counter boxes START -->
    <div class="row g-4 mb-5">
        <!-- Counter item -->
        <div class="col-md-6 col-xxl-3">
            <div class="card card-body bg-warning bg-opacity-10 border border-warning border-opacity-25 p-4 h-100">
                <div class="d-flex justify-content-between align-items-center">
                    <!-- Digit -->
                    <div>
                        <h4 class="mb-0">{{ $hotelCount }}</h4>
                        <span class="h6 fw-light mb-0">Hotels</span>
                    </div>
                    <!-- Icon -->
                    <div class="icon-lg rounded-circle bg-warning text-white mb-0"><i class="fa-solid fa-hotel fa-fw"></i></div>
                </div>
            </div>
        </div>

        <!-- Counter item -->


        <!-- Counter item -->
        <div class="col-md-6 col-xxl-3">
            <div class="card card-body bg-primary bg-opacity-10 border border-primary border-opacity-25 p-4 h-100">
                <div class="d-flex justify-content-between align-items-center">
                    <!-- Digit -->
                    <div>
                        <h4 class="mb-0">{{ $roomCount }}</h4>
                        <span class="h6 fw-light mb-0">Chambres</span>
                    </div>
                    <!-- Icon -->
                    <div class="icon-lg rounded-circle bg-primary text-white mb-0"><i class="fa-solid fa-bed fa-fw"></i></div>
                </div>
            </div>
        </div>

        <!-- Counter item -->
        <div class="col-md-6 col-xxl-3">
            <div class="card card-body bg-info bg-opacity-10 border border-info border-opacity-25 p-4 h-100">
                <div class="d-flex justify-content-between align-items-center">
                    <!-- Digit -->
                    <div>
                        <h4 class="mb-0">{{ $reservationCount }}</h4>
                        <span class="h6 fw-light mb-0">Reservation</span>
                    </div>
                    <!-- Icon -->
                    <div class="icon-lg rounded-circle bg-info text-white mb-0"><i class="fa-solid fa-building-circle-check fa-fw"></i></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter boxes END -->

    <!-- Hotel grid START -->

    <!-- Hotel grid END -->

    <!-- Widget START -->
    <div class="row g-4">



        <div class="card shadow mt-5">
            <!-- Card header START -->
            <div class="card-header border-bottom">
                <h5 class="card-header-title">Reservations</h5>
            </div>
            <!-- Card header END -->

            <!-- Card body START -->
            <div class="card-body">
                <!-- Search and select START -->
                <div class="row g-3 align-items-center justify-content-between mb-3">
                    <!-- Search -->
                    <div class="col-md-8">
                        <form class="rounded position-relative">
                            <input class="form-control pe-5" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn border-0 px-3 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6"></i></button>
                        </form>
                    </div>

                    <!-- Select option -->
                    <div class="col-md-3">
                        <!-- Short by filter -->
                        <form>
                            <select class="form-select js-choice" aria-label=".form-select-sm">
                                <option value="">Sort by</option>
                                <option>Free</option>
                                <option>Newest</option>
                                <option>Oldest</option>
                            </select>
                        </form>
                    </div>
                </div>
                <!-- Search and select END -->

                <!-- Table head -->
                <div class="bg-light rounded p-3 d-none d-lg-block">
                    <div class="row row-cols-7 g-4">
                        <div class="col"><h6 class="mb-0">Reserver par</h6></div>
                        <div class="col"><h6 class="mb-0">De</h6></div>
                        <div class="col"><h6 class="mb-0">Au</h6></div>
                        <div class="col"><h6 class="mb-0">Hotel</h6></div>
                        <div class="col"><h6 class="mb-0">Prix</h6></div>
                        <div class="col"><h6 class="mb-0">Numero Chambre</h6></div>
                        <div class="col"><h6 class="mb-0">Action</h6></div>
                    </div>
                </div>

                @foreach ($reservations as $reservation)
                <div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Reserver par:</small>
                        <div class="d-flex align-items-center">
                            <!-- Avatar -->

                            <!-- Info -->
                            <div class="ms-2">
                                <h6 class="mb-0 fw-light">{{ $reservation->name }}</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">De:</small>
                        <h6 class="mb-0 fw-normal">{{ $reservation->check_in }}</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Au:</small>
                        <h6 class="mb-0 fw-normal">{{ $reservation->check_out }}</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Hotel:</small>
                        <div class="d-flex align-items-center">
                            <!-- Avatar -->
                            <div class="avatar avatar-xs flex-shrink-0">
                                <img class="avatar-img rounded-circle" src="{{ asset($reservation->image) }}" alt="avatar">
                            </div>
                            <!-- Info -->
                            <div class="ms-2">
                                <h6 class="mb-0 fw-light">{{ $reservation->nom_hotel }}</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Prix:</small>
                        <h6 class="text-success mb-0">{{ $reservation->price_reser }} XAF</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Numero Chambre:</small>
                        <div class="badge bg-success bg-opacity-10 text-success">{{ $reservation->chambre_id }}</div>
                    </div>

                    <!-- Data item -->
                    <div class="col"><a href="#" class="btn btn-sm btn-light mb-0">View</a></div>
                </div>
                @endforeach
                <!-- Table data -->






            </div>
            <!-- Card body END -->

            <!-- Card footer START -->

            <!-- Card footer END -->
        </div>
        <!-- Rooms END -->

        <!-- Upcoming Arrival START -->

        <!-- Reviews END -->
    </div>
    <!-- Widget END -->

</div>
@endsection
