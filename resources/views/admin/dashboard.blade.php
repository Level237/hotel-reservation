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
        <!-- Booking Chart START -->
        <div class="col-xxl-8">
            <!-- Chart START -->
            <div class="card shadow h-100">
                <!-- Card header -->
                <div class="card-header border-bottom">
                    <h5 class="card-header-title">Guest Activity</h5>
                </div>

                <!-- Card body -->
                <div class="card-body">
                    <!-- Content -->
                    <div class="d-flex gap-4 mb-3">
                        <h6><span class="fw-light"><i class="bi bi-square-fill text-primary"></i> Check-in:</span> 475 Guests</h6>
                        <h6><span class="fw-light"><i class="bi bi-square-fill text-info"></i> Check-out:</span> 157 Guests</h6>
                    </div>
                    <!-- Apex chart -->
                    <div id="ChartGuesttraffic" class="mt-2"></div>
                </div>
            </div>
            <!-- Chart END -->
        </div>
        <!-- Booking Chart END -->

        <!-- Booking graph START -->
        <div class="col-lg-6 col-xxl-4">
            <div class="card shadow h-100">
                <!-- Card header -->
                <div class="card-header border-bottom">
                    <h5 class="card-header-title">Room Availability</h5>
                </div>

                <!-- Card body START -->
                <div class="card-body p-3">
                    <!-- Chart -->
                    <div class="col-sm-6 mx-auto">
                        <div class="d-flex justify-content-center" id="ChartTrafficRooms"></div>
                    </div>

                    <!-- Content -->
                    <ul class="list-group list-group-borderless mb-0">
                        <li class="list-group-item d-flex justify-content-between">
                            <span class="h6 fw-light mb-0"><i class="text-success fas fa-circle me-2"></i> Available</span>
                            <span class="h6 fw-light mb-0">73 Rooms</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span class="h6 fw-light mb-0"><i class="text-danger fas fa-circle me-2"></i> Sold Out</span>
                            <span class="h6 fw-light mb-0">245 Rooms</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Booking graph END -->

        <!-- Rooms START -->
        <div class="col-lg-12">
            <div class="card shadow h-100">
                <!-- Card header -->
                <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                    <h5 class="card-header-title">Reservations Recent</h5>
                    <a href="#" class="btn btn-link p-0 mb-0">View all</a>
                </div>

                <!-- Card body START -->
                <table class="table">
                   
                    <thead>
                      <tr>
                        <th scope="col">Utilisateur</th>
                        <th scope="col">Email</th>
                        <th scope="col">Hotel</th>
                        <th scope="col">Du</th>
                        <th scope="col">Au</th>
                        <th scope="col">Prix</th>
                        <th scope="col">numero Chambre</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($reservations as $reservation)
                            <tr>
                                <td >{{ $reservation->name }}</td>
                                <th scope="row">{{ $reservation->email }}</th>
                                <td>{{ $reservation->nom_hotel }}</td>
                                <td>{{ $reservation->check_in }}</td>
                                <td>{{ $reservation->check_out }}</td>
                                <td>{{ $reservation->price_reser }}</td>
                                <td>numero {{ $reservation->chambre_id }}</td>
                            </tr>
                        @empty
                            
                        @endforelse
                     
                    </tbody>
                  </table>
            </div>
        </div>
        <!-- Rooms END -->

        <!-- Upcoming Arrival START -->
       
        <!-- Reviews END -->
    </div>
    <!-- Widget END -->

</div>
@endsection