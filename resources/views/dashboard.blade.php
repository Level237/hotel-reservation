@extends('layouts.backoffice.customer.main')
@section('title')
Dashboard
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
                                    @include('layouts.backoffice.customer.sidebar')
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

                    <div class="vstack gap-4">
                        <!-- Verified message -->
                        <div class="bg-light rounded p-3">
                            <!-- Progress bar -->

                            <!-- Content -->

                        </div>

                        <!-- Personal info START -->
                        <div class="card border">
                            <!-- Card header -->
                            <div class="card-header border-bottom">
                                <h4 class="card-header-title">Personal Information</h4>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body">
                                <!-- Form START -->
                                <form method="post" action="{{ route('profile.update') }}" class="row g-3">
                                    <!-- Profile photo -->
                                    @csrf
                                    @method('patch')

                                    <!-- Name -->
                                    <div class="col-md-6">
                                        <label class="form-label">Full Name<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="name" value="{{ auth()->user()->name }}" placeholder="Enter your full name">
                                    </div>

                                    <!-- Email -->
                                    <div class="col-md-6">
                                        <label class="form-label">Email address<span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" name="email" value="{{ auth()->user()->email }}" placeholder="Enter your email id">
                                    </div>



                                    <!-- Nationality -->


                                    <!-- Date of birth -->


                                    <!-- Gender -->

                                    <!-- Address -->

                                    <!-- Button -->
                                    <div class="col-12 text-end">
                                        <button type="submit" class="btn btn-primary mb-0">Save Changes</button>
                                    </div>
                                </form>
                                <!-- Form END -->
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- Personal info END -->

                        <!-- Update email START -->

                        <!-- Update email END -->

                        <!-- Update Password START -->
                        <div class="card border">
                            <!-- Card header -->
                            <div class="card-header border-bottom">
                                <h4 class="card-header-title">Update Password</h4>
                                <p class="mb-0">Your current email address is <span class="text-primary">example@gmail.com</span></p>
                            </div>

                            <!-- Card body START -->
                            <form class="card-body">
                                <!-- Current password -->
                                <div class="mb-3">
                                    <label class="form-label">Current password</label>
                                    <input class="form-control" type="password" placeholder="Enter current password">
                                </div>
                                <!-- New password -->
                                <div class="mb-3">
                                    <label class="form-label"> Enter new password</label>
                                    <div class="input-group">
                                        <input class="form-control fakepassword" placeholder="Enter new password" type="password" id="psw-input">
                                        <span class="input-group-text p-0 bg-transparent">
                                            <i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
                                        </span>
                                    </div>
                                </div>
                                <!-- Confirm -->
                                <div class="mb-3">
                                    <label class="form-label">Confirm new password</label>
                                    <input class="form-control" type="password" placeholder="Confirm new password">
                                </div>

                                <div class="text-end">
                                    <a href="#" class="btn btn-primary mb-0">Change Password</a>
                                </div>
                            </form>
                            <!-- Card body END -->
                        </div>
                        <!-- Update Password END -->
                    </div>
                </div>
                <!-- Main content END -->

            </div>
        </div>
    </section>
    <!-- =======================
    Content END -->

    </main>
@endsection
