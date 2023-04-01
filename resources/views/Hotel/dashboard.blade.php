@extends('layouts.backoffice.hotel.main-hotel')
@section('title')
Dashboard-Hotel
@endsection

@section('content')
<main>

    <!-- =======================
    Menu item START -->
    <section class="pt-4">
        <div class="container">
            <div class="card rounded-3 border p-3 pb-2">
                <!-- Avatar and info START -->
                <div class="d-sm-flex align-items-center">
                    <div class="avatar avatar-xl mb-2 mb-sm-0">
                        <img class="avatar-img rounded-circle" src="{{ asset($hotel->image) }}" alt="">
                    </div>
                    <h4 class="mb-2 mb-sm-0 ms-sm-3"><span class="fw-light">Hotel </span>{{ $hotel->nom_hotel }}</h4>

                </div>
                <!-- Avatar and info START -->

                <!-- Responsive navbar toggler -->
                <button class="btn btn-primary w-100 d-block d-xl-none mt-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#dashboardMenu" aria-controls="dashboardMenu">
                    <i class="bi bi-list"></i> Dashboard Menu
                </button>

                <!-- Nav links START -->
                <div class="offcanvas-xl offcanvas-end mt-xl-3" tabindex="-1" id="dashboardMenu">
                    <div class="offcanvas-header border-bottom p-3">
                        <h5 class="offcanvas-title">Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#dashboardMenu" aria-label="Close"></button>
                    </div>
                    <!-- Offcanvas body -->
                    <div class="offcanvas-body p-3 p-xl-0">
                        <!-- Nav item -->
                        <div class="navbar navbar-expand-xl">
                            <ul class="navbar-nav navbar-offcanvas-menu">

                                <li class="nav-item"> <a class="nav-link active" href="{{ route('hotel.dashboard') }}"><i class="bi bi-house-door fa-fw me-1"></i>Dashboard</a>	</li>







                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Nav links END -->
            </div>
        </div>
    </section>
    <!-- =======================
    Menu item END -->

    <!-- =======================
    Content START -->
    <section class="pt-0">
        <div class="container vstack gap-4">
            <!-- Title START -->
            <div class="row">
                <div class="col-12">
                    <h1 class="fs-4 mb-0"><i class="bi bi-house-door fa-fw me-1"></i>Dashboard</h1>
                </div>
            </div>
            <!-- Title END -->

            <!-- Counter START -->
            <div class="row g-4">
                <!-- Counter item -->
                <div class="col-sm-6 col-xl-3">
                    <div class="card card-body border">
                        <div class="d-flex align-items-center">
                            <!-- Icon -->
                            <div class="icon-xl bg-success rounded-3 text-white">
                                <i class="bi bi-journals"></i>
                            </div>
                            <!-- Content -->
                            <div class="ms-3">
                                <h4>{{ $chambreCount }}</h4>
                                <span>Nombres de Chambres</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Counter item -->
                <div class="col-sm-6 col-xl-3">
                    <div class="card card-body border">
                        <div class="d-flex align-items-center">
                            <!-- Icon -->
                            <div class="icon-xl bg-info rounded-3 text-white">
                                <i class="bi bi-graph-up-arrow"></i>
                            </div>
                            <!-- Content -->
                            <div class="ms-3">
                                <h4>{{ $reservationCount }}</h4>
                                <span>Reservations</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Counter item -->


                <!-- Counter item -->
                <div class="col-sm-6 col-xl-3">
                    <div class="card card-body border">
                        <div class="d-flex align-items-center">
                            <!-- Icon -->
                            <div class="icon-xl bg-primary rounded-3 text-white">
                                <i class="bi bi-star"></i>
                            </div>
                            <!-- Content -->
                            <div class="ms-3">
                                <h4>{{ $hotel->nombres_etoiles }}</h4>
                                <span>Nombre d'etoile</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Counter END -->

            <!-- Graph START -->


            <!-- Booking table START -->
            <div class="row">
                <div class="col-12">
                    <div class="card border rounded-3">
                        <!-- Card header START -->
                        <div class="card-header border-bottom">
                            <div class="d-sm-flex justify-content-between align-items-center">
                                <h5 class="mb-2 mb-sm-0">Vos Dernieres reservations</h5>

                            </div>
                        </div>
                        <!-- Card header END -->

                        <!-- Card body START -->
                        <div class="card-body">
                            <!-- Search and select START -->

                            <!-- Search and select END -->

                            <!-- Hotel room list START -->
                            <div class="table-responsive border-0">
                                <table class="table align-middle p-4 mb-0 table-hover table-shrink">
                                    <!-- Table head -->
                                    <thead class="table-light">
                                        <tr>

                                            <th scope="col" class="border-0">reserver par</th>
                                            <th scope="col" class="border-0">De</th>
                                            <th scope="col" class="border-0">Au</th>
                                            <th scope="col" class="border-0">Hotel</th>
                                            <th scope="col" class="border-0">Prix</th>
                                            <th scope="col" class="border-0">Numero Chalbre</th>
                                            <th scope="col" class="border-0 rounded-end">Action</th>
                                        </tr>
                                    </thead>

                                    <!-- Table body START -->
                                    <tbodwy class="border-top-0">
                                        @forelse ($reservations as $reservation)
                                            <tr>
                                                <td> <h6 class="mb-0">{{ $reservation->name }}</h6> </td>
                                                <td> <h6 class="mb-0"><a href="#">{{ $reservation->check_in }}Deluxe Pool View</a></h6> </td>
                                                <td> {{ $reservation->check_out }}</td>
                                                <td>  <img class="avatar-img rounded-circle" src="{{ asset($reservation->image) }}" alt="avatar"> </td>
                                                <td> {{ $reservation->nom_hotel }} </td>
                                                <td>{{ $reservation->price_reser }} XAF </td>
                                                <td>{{ $reservation->chambre_id }}</td>
                                                <td> <div class="badge text-bg-success"></div> </td>
                                                <td> <div class="badge bg-success bg-opacity-10 text-success">Full payment</div> </td>
                                                <td> <a href="#" class="btn btn-sm btn-light mb-0">View</a> </td>
                                            </tr>
                                        @empty
                                            Aucune Reservation disponible
                                        @endforelse
                                        <!-- Table item -->



                                    </tbody>
                                    <!-- Table body END -->
                                </table>
                            </div>
                            <!-- Hotel room list END -->
                        </div>
                        <!-- Card body END -->

                        <!-- Card footer START -->

                        <!-- Card footer END -->
                    </div>
                </div>
            </div>
            <!-- Booking table END -->
        </div>
    </section>
    <!-- =======================
    Content END -->

    </main>
@endsection
