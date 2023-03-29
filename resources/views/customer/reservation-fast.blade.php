@extends('layouts.frontoffice.main')

@section('title')
Reserver Rapidement
@endsection

@section('content')
<main>

    <!-- =======================
    Main Banner START -->
    <section class="position-relative">

        <!-- Svg decoration -->
        <div class="position-absolute top-50 start-0 translate-middle-y d-none d-md-block">
            <img src="{{ asset('assets/images/element/decoration.svg') }}" alt="">
        </div>

        <div class="container">
            <!-- Content and Image START -->
            <div class="row g-4 g-lg-5 align-items-center">
                <!-- Content -->
                <div class="col-lg-6 position-relative">
                    <h6 class="text-uppercase">🤩 Reserver Rapidement et Facilement Votre place.</h6>
                    <!-- Title -->
                    <h1 class="mb-2">Réservez  maintenant!</h1>
                    <!-- Info -->


                    <!-- Form START -->
                    <form class="row g-4" route={{ route('customer.fast.post') }} method="POST">
                        @csrf
                        <!-- Destination -->
                        <div class="col-12">
                            <label class="small">Hotel</label>
                            <div class="form-border-bottom form-control-transparent d-flex align-items-center">
                                <div class="flex-shrink-0 me-2">
                                    <!-- Icon -->
                                    <i class="bi bi-geo-alt text-secondary d-block"></i>
                                </div>
                                <!-- Input field -->
                                <div class="flex-grow-1">
                                    <!-- Cities -->
                                    <div class="form-fs-lg">
                                        <select name="hotel" class="form-select js-choice h5" data-search-enabled="true" aria-label=".form-select-sm">
                                            <option value="">Select location</option>
                                            @foreach ($hotels as $hotel)
                                                <option value="{{ $hotel->id }}">{{ $hotel->nom_hotel }}</option>
                                            @endforeach


                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Check in -->
                        <div class="col-md-6">
                            <label class="small">Check in</label>
                            <div class="form-border-bottom form-control-transparent d-flex align-items-center">
                                <!-- Icon -->
                                <i class="bi bi-calendar text-secondary d-block me-2"></i>
                                <!-- Cities -->
                                <div class="form-fs-lg">
                                    <input name="checkIn" type="text" class="form-control flatpickr" data-date-format="d M" placeholder="Select Date">
                                </div>
                            </div>
                        </div>

                        <!-- Check Out -->
                        <div class="col-md-6">
                            <label class="small">Check Out</label>
                            <div class="form-border-bottom form-control-transparent d-flex align-items-center">
                                <!-- Icon -->
                                <i class="bi bi-calendar text-secondary d-block me-2"></i>
                                <!-- Cities -->
                                <div class="form-fs-lg">
                                    <input name="checkOut" type="text" class="form-control flatpickr" data-date-format="d M" placeholder="Select Date">
                                </div>
                            </div>
                        </div>

                        <!-- Occupant -->

                        <!-- Tour type -->
                        <div class="col-md-12">
                            <label class="small">Type de Chambres</label>
                            <div class="form-border-bottom form-control-transparent d-flex align-items-center">
                                <div class="flex-shrink-0 me-2">
                                    <!-- Icon -->
                                    <i class="fa-solid fa-torii-gate text-secondary d-block"></i>
                                </div>
                                <!-- Input field -->
                                <div class="flex-grow-1">
                                    <!-- Cities -->
                                    <div class="form-fs-lg">
                                        <select name="classe" class="form-select js-choice h5" data-search-enabled="true" aria-label=".form-select-sm">

                                            <option value="">Selectionnez la classe</option>
                                        @foreach ($classes as $classe)
                                            <option value="{{ $classe->title }}">{{ $classe->title }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary w-100 mb-0">Verifier la validé</button>
                        </div>
                    </form>
                    <!-- Form END -->
                </div>

                <!-- Image -->
                <div class="col-lg-6 position-relative">
                    <img src="{{ asset('assets/images/bg/09.jpg') }}" class="rounded" alt="">
                </div>
            </div>
            <!-- Content and Image END -->
        </div>
    </section>
    <!-- =======================
    Main Banner END -->

    </main>
    <!-- *****

@endsection
