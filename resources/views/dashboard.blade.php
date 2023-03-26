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
                                <form class="row g-3">
                                    <!-- Profile photo -->
                                    <div class="col-12">
                                        <label class="form-label">Upload your profile photo<span class="text-danger">*</span></label>
                                        <div class="d-flex align-items-center">
                                            <label class="position-relative me-4" for="uploadfile-1" title="Replace this pic">
                                                <!-- Avatar place holder -->
                                                <span class="avatar avatar-xl">
                                                    <img id="uploadfile-1-preview" class="avatar-img rounded-circle border border-white border-3 shadow" src="assets/images/avatar/01.jpg" alt="">
                                                </span>
                                            </label>
                                            <!-- Upload button -->
                                            <label class="btn btn-sm btn-primary-soft mb-0" for="uploadfile-1">Change</label>
                                            <input id="uploadfile-1" class="form-control d-none" type="file">
                                        </div>
                                    </div>

                                    <!-- Name -->
                                    <div class="col-md-6">
                                        <label class="form-label">Full Name<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" value="Jacqueline Miller" placeholder="Enter your full name">
                                    </div>

                                    <!-- Email -->
                                    <div class="col-md-6">
                                        <label class="form-label">Email address<span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" value="hello@gmail.com" placeholder="Enter your email id">
                                    </div>

                                    <!-- Mobile -->
                                    <div class="col-md-6">
                                        <label class="form-label">Mobile number<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" value="222 555 666" placeholder="Enter your mobile number">
                                    </div>

                                    <!-- Nationality -->
                                    <div class="col-md-6">
                                        <label class="form-label">Nationality<span class="text-danger">*</span></label>
                                        <select class="form-select js-choice">
                                            <option value="">Select your country</option>
                                            <option>USA</option>
                                            <option selected="">Paris</option>
                                            <option>India</option>
                                            <option>UK</option>
                                        </select>
                                    </div>

                                    <!-- Date of birth -->
                                    <div class="col-md-6">
                                        <label class="form-label">Date of Birth<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control flatpickr" value="29 Aug 1996" placeholder="Enter date of birth" data-date-format="d M Y">
                                    </div>

                                    <!-- Gender -->
                                    <div class="col-md-6">
                                        <label class="form-label">Select Gender<span class="text-danger">*</span></label>
                                        <div class="d-flex gap-4">
                                            <div class="form-check radio-bg-light">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked="">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Male
                                                </label>
                                            </div>
                                            <div class="form-check radio-bg-light">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Female
                                                </label>
                                            </div>
                                            <div class="form-check radio-bg-light">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Others
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Address -->
                                    <div class="col-12">
                                        <label class="form-label">Address</label>
                                        <textarea class="form-control" rows="3" spellcheck="false">2119 N Division Ave, New Hampshire, York, United States</textarea>
                                    </div>

                                    <!-- Button -->
                                    <div class="col-12 text-end">
                                        <a href="#" class="btn btn-primary mb-0">Save Changes</a>
                                    </div>
                                </form>
                                <!-- Form END -->
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- Personal info END -->

                        <!-- Update email START -->
                        <div class="card border">
                            <!-- Card header -->
                            <div class="card-header border-bottom">
                                <h4 class="card-header-title">Update email</h4>
                                <p class="mb-0">Your current email address is <span class="text-primary">example@gmail.com</span></p>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body">
                                <form>
                                    <!-- Email -->
                                    <label class="form-label">Enter your new email id<span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" placeholder="Enter your email id">

                                    <div class="text-end mt-3">
                                        <a href="#" class="btn btn-primary mb-0">Save Email</a>
                                    </div>
                                </form>
                            </div>
                            <!-- Card body END -->
                        </div>
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
