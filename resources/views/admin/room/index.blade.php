<!DOCTYPE html>
<html lang="en">
<head>
	<title>Listes des Chambres</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Booking - Multipurpose Online Booking Theme">

	<!-- Dark mode -->
	<script>
		const storedTheme = localStorage.getItem('theme')
 
		const getPreferredTheme = () => {
			if (storedTheme) {
				return storedTheme
			}
			return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
		}

		const setTheme = function (theme) {
			if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
				document.documentElement.setAttribute('data-bs-theme', 'dark')
			} else {
				document.documentElement.setAttribute('data-bs-theme', theme)
			}
		}

		setTheme(getPreferredTheme())

		window.addEventListener('DOMContentLoaded', () => {
		    var el = document.querySelector('.theme-icon-active');
			if(el != 'undefined' && el != null) {
				const showActiveTheme = theme => {
				const activeThemeIcon = document.querySelector('.theme-icon-active use')
				const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
				const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

				document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
					element.classList.remove('active')
				})

				btnToActive.classList.add('active')
				activeThemeIcon.setAttribute('href', svgOfActiveBtn)
			}

			window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
				if (storedTheme !== 'light' || storedTheme !== 'dark') {
					setTheme(getPreferredTheme())
				}
			})

			showActiveTheme(getPreferredTheme())

			document.querySelectorAll('[data-bs-theme-value]')
				.forEach(toggle => {
					toggle.addEventListener('click', () => {
						const theme = toggle.getAttribute('data-bs-theme-value')
						localStorage.setItem('theme', theme)
						setTheme(theme)
						showActiveTheme(theme)
					})
				})

			}
		})
		
	</script>

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
	<link rel="stylesheet" href="css2-1?family=DM+Sans:wght@400;500;700&family=Poppins:wght@400;500;700&display=swap">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons-1.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/overlay-scrollbar/css/overlayscrollbars.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/apexcharts/css/apexcharts.css') }}">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

</head>

<body>

<!-- **************** MAIN CONTENT START **************** -->
<main>
	
	<!-- Sidebar START -->
	<nav class="navbar sidebar navbar-expand-xl navbar-light">
        <!-- Navbar brand for xl START -->
        <div class="d-flex align-items-center">
            <a class="navbar-brand" href="index.html-1.htm">
                <img class="light-mode-item navbar-brand-item" src="{{ asset('assets/images/logo-hotel.svg') }}" alt="logo">
                <img class="dark-mode-item navbar-brand-item" src="{{ asset('assets/images/logo-hotel-light.svg') }}" alt="logo">
            </a>
        </div>
        <!-- Navbar brand for xl END -->
    
        <div class="offcanvas offcanvas-start flex-row custom-scrollbar h-100" data-bs-backdrop="true" tabindex="-1" id="offcanvasSidebar">
            <div class="offcanvas-body sidebar-content d-flex flex-column pt-4">
    
                <!-- Sidebar menu START -->
                <ul class="navbar-nav flex-column" id="navbar-sidebar">
                    <!-- Menu item -->
                    <li class="nav-item"><a href="{{ route('admin.dashboard') }}" class="nav-link ">Dashboard</a></li>
    
                    <!-- Title -->
    
                    <!-- Menu item -->
                    
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#collapseagent" role="button" aria-expanded="false" aria-controls="collapseagent">
                        Chambres
                        </a>
                        <!-- Submenu -->
                        <ul class="nav collapse flex-column" id="collapseagent" data-bs-parent="#navbar-sidebar">
                            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.rooms.index') }}">Listes des Chambres</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.rooms.create') }}">Ajouter une Chambre</a></li>
                        </ul>
                    </li>
                    <!-- Menu item -->
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#collapseguest" role="button" aria-expanded="false" aria-controls="collapseguest">
                        Utilisateurs
                        </a>
                        <!-- Submenu -->
                        <ul class="nav collapse flex-column" id="collapseguest" data-bs-parent="#navbar-sidebar">
                            <li class="nav-item"> <a class="nav-link" href="admin-guest-list.html">Listes des Utilisateurs</a></li>
                            <li class="nav-item"> <a class="nav-link" href="admin-guest-detail.html.htm">Creer un Utilisateur</a></li>
                        </ul>
                    </li>
    
                    <!-- Menu item -->
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#collapseagent" role="button" aria-expanded="false" aria-controls="collapseagent">
                        Reservation
                        </a>
                        <!-- Submenu -->
                        <ul class="nav collapse flex-column" id="collapseagent" data-bs-parent="#navbar-sidebar">
                            <li class="nav-item"> <a class="nav-link" href="admin-agent-list.html">Listes des Reservations</a></li>
                            
                        </ul>
                    </li>
    
                    <!-- Menu item -->
                   
                </ul>
                <!-- Sidebar menu end -->
    
                <!-- Sidebar footer START -->
                <div class="d-flex align-items-center justify-content-between text-primary-hover mt-auto p-3">
    
                    <form method="POST" action="{{ route('logout') }}" id="logout-form">
                        @csrf
                      </form>
    
    
                    
                    <a class="h6 fw-light mb-0 text-body"  data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Sign out" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i> Log out
                    </a>
                    <a class="h6 mb-0 text-body" href="admin-settings.html.htm" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Settings">
                        <i class="bi bi-gear-fill"></i>
                    </a>
                </div>
                <!-- Sidebar footer END -->
    
            </div>
        </div>
    </nav>
	<!-- Sidebar END -->
	
	<!-- Page content START -->
	<div class="page-content">
	
		<!-- Top bar START -->
		<nav class="navbar top-bar navbar-light py-0 py-xl-3">
			<div class="container-fluid p-0">
				<div class="d-flex align-items-center w-100">
	
					<!-- Logo START -->
					<div class="d-flex align-items-center d-xl-none">
						<a class="navbar-brand" href="index.html-1.htm">
							<img class="navbar-brand-item h-40px" src="assets/images/logo-icon.svg" alt="">
						</a>
					</div>
					<!-- Logo END -->
	
					<!-- Toggler for sidebar START -->
					<div class="navbar-expand-xl sidebar-offcanvas-menu">
						<button class="navbar-toggler me-auto p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar" aria-expanded="false" aria-label="Toggle navigation" data-bs-auto-close="outside">
							<i class="bi bi-list text-primary fa-fw" data-bs-target="#offcanvasMenu"></i>
						</button>
					</div>
					<!-- Toggler for sidebar END -->
					
					<!-- Top bar left -->
					<div class="navbar-expand-lg ms-auto ms-xl-0">
						<!-- Toggler for menubar START -->
						<button class="navbar-toggler ms-auto p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTopContent" aria-controls="navbarTopContent" aria-expanded="false" aria-label="Toggle navigation">
							<i class="bi bi-search"></i>
						</button>
						<!-- Toggler for menubar END -->
	
						<!-- Topbar menu START -->
						<div class="collapse navbar-collapse w-100 z-index-1" id="navbarTopContent">
							<!-- Top search START -->
							<div class="nav my-3 my-xl-0 flex-nowrap align-items-center">
								<div class="nav-item w-100">
									<form class="position-relative">
										<input class="form-control bg-light pe-5" type="search" placeholder="Search" aria-label="Search">
										<button class="bg-transparent px-2 py-0 border-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 text-primary"></i></button>
									</form>
								</div>
							</div>
							<!-- Top search END -->
						</div>
						<!-- Topbar menu END -->
					</div>
					<!-- Top bar left END -->
                    


					<!-- Top bar right START -->
					<ul class="nav flex-row align-items-center list-unstyled ms-xl-auto">
						<!-- Dark mode options START -->
						<li class="nav-item dropdown ms-3">
							<button class="nav-notification lh-0 btn btn-light p-0 mb-0" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw theme-icon-active" viewbox="0 0 16 16">
									<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>
									<use href="#"></use>
								</svg>
							</button>

							<ul class="dropdown-menu min-w-auto dropdown-menu-end" aria-labelledby="bd-theme">
								<li class="mb-1">
									<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light">
										<svg width="16" height="16" fill="currentColor" class="bi bi-brightness-high-fill fa-fw mode-switch me-1" viewbox="0 0 16 16">
											<path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"></path>
											<use href="#"></use>
										</svg>Light						
									</button>
								</li>
								<li class="mb-1">
									<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars-fill fa-fw mode-switch me-1" viewbox="0 0 16 16">
											<path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"></path>
											<path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"></path>
											<use href="#"></use>
										</svg>Dark
									</button>
								</li>
								<li>
									<button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw mode-switch" viewbox="0 0 16 16">
											<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>
											<use href="#"></use>
										</svg>Auto
									</button>
								</li>
							</ul>
						</li>
						<!-- Dark mode options END-->

						<!-- Notification dropdown START -->
						<li class="nav-item dropdown ms-3">
							<!-- Notification button -->
							
							<!-- Notification dote -->
							
		
							<!-- Notification dropdown menu START -->
							
							<!-- Notification dropdown menu END -->
						</li>
						<!-- Notification dropdown END -->
		
						<!-- Profile dropdown START -->
						<li class="nav-item ms-3 dropdown">
                            <!-- Avatar -->
                            <a class="avatar avatar-xs p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="avatar-img rounded-circle" src="{{ asset('assets/images/profile-man.jfif') }}" alt="avatar">
                            </a>
        
                            <!-- Profile dropdown START -->
                            <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
                                <!-- Profile info -->
                                <li class="px-3 mb-3">
                                    <div class="d-flex align-items-center">
                                        <!-- Avatar -->
                                        <div class="avatar me-3">
                                            <img class="avatar-img rounded-circle shadow" src="{{ asset('assets/images/profile-man.jfif') }}" alt="avatar">
                                        </div>
                                        <div>
                                            <a class="h6 mt-2 mt-sm-0" href="#">{{ auth()->user()->name }}</a>
                                            <p class="small m-0">{{ auth()->user()->email }}</p>
                                        </div>
                                    </div>
                                </li>
        
                                <!-- Links -->
                                <li> <hr class="dropdown-divider"></li>
                               
        
                                <form method="POST" action="{{ route('logout') }}" id="logout-form">
                                    @csrf
                                  </form>
                                <li><a class="dropdown-item bg-danger-soft-hover" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><i class="bi bi-power fa-fw me-2"></i>Deconnexion</a></li>
                                <li> <hr class="dropdown-divider"></li>
        
                                <!-- Dark mode options START -->
                                <li>
                                    <div class="nav-pills-primary-soft theme-icon-active d-flex justify-content-between align-items-center p-2 pb-0">
                                        <span>Mode:</span>
                                        <button type="button" class="btn btn-link nav-link text-primary-hover mb-0 p-0" data-bs-theme-value="light" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Light">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sun fa-fw mode-switch" viewbox="0 0 16 16">
                                                <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"></path>
                                                <use href="#"></use>
                                            </svg>
                                        </button>
                                        <button type="button" class="btn btn-link nav-link text-primary-hover mb-0 p-0" data-bs-theme-value="dark" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Dark">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars fa-fw mode-switch" viewbox="0 0 16 16">
                                                <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z"></path>
                                                <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"></path>
                                                <use href="#"></use>
                                            </svg>
                                        </button>
                                        <button type="button" class="btn btn-link nav-link text-primary-hover mb-0 p-0 active" data-bs-theme-value="auto" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Auto">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw mode-switch" viewbox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>
                                                <use href="#"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </li>
                                <!-- Dark mode options END-->
                            </ul>
                            <!-- Profile dropdown END -->
                        </li>
						<!-- Profile dropdown END -->
					</ul>
					<!-- Top bar right END -->
				</div>
			</div>
		</nav>
		<!-- Top bar END -->
        @if(Session::get("success"))
        <div class="alert alert-primary" role="alert">
            {{ Session::get("success") }}
        </div>
        @endif
        @if(Session::get("danger"))
        <div class="alert alert-danger" role="alert">
            {{ Session::get("danger") }}
        </div>
        @endif
		<!-- Page main content START -->
		<div class="page-content-wrapper p-xxl-4">

			<!-- Title -->
			

			<!-- Counter START -->
			
			<!-- Counter END -->

			<!-- Tabs and search START -->
			<div class="row g-4 justify-content-between align-items-center">
				

				<div class="col-lg-6 col-xxl-5">
					<div class="d-sm-flex gap-4 justify-content-between justify-content-lg-end">
						<!-- Search -->
						<div class="col-md-8">
							<form class="rounded position-relative">
								<input class="form-control bg-transparent" type="search" placeholder="Search" aria-label="Search">
								<button class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset" type="submit">
									<i class="fas fa-search fs-6"></i>
								</button>
							</form>
						</div>
						<!-- Tabs -->
						<div class="d-flex justify-content-end mt-2 mt-sm-0">
							
						</div>
					</div>
				</div>
			</div>
			<!-- Tabs and search END -->

			<!-- Tab content START -->
			<div class="tab-content mt-5" id="myTabContent">
				<!-- Content item START -->
				<div class="tab-pane fade show active" id="grid-tab-pane">
					<!-- Rooms START -->
					<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xxl-5 g-4">
						<!-- Room item -->
                        @foreach ($rooms as $room)
                        <div class="col">
							<div class="card shadow h-100">
								<!-- Overlay item -->
								<div class="position-relative">
									<!-- Image -->
									<img src="{{ asset($room->image) }}" class="card-img-top" alt="Card image">
									<!-- Overlay -->
									<div class="card-img-overlay d-flex flex-column p-3">
										<!-- Card overlay top -->
										<div class="d-flex justify-content-between align-items-center">
											
											<!-- Buttons -->
											<div class="list-inline-item dropdown">
												<!-- Dropdown button -->
												<a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownAction1" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="bi bi-three-dots-vertical"></i>
												</a>
												<!-- dropdown items -->
												<ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded small" aria-labelledby="dropdownAction1">
													<li><a class="dropdown-item" href="#"><i class="bi bi-info-circle me-2"></i>Report</a></li>
													<li><a class="dropdown-item" href="#"><i class="bi bi-slash-circle me-2"></i>Disable</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
			
								<!-- Card body START -->
								<div class="card-body px-3">
									<!-- Title -->
									<h5 class="card-title mb-1"><a href="admin-booking-detail.html.htm">{{ $room->title}}</a></h5>
									<ul class="list-group list-group-borderless small mt-2 mb-0">
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-dolar fa-fw me-2"></i>Prix:{{ $room->price }} XAF
                                            
										</li>
                                        <li class="list-group-item pb-0">
											<i class="fa-solid fa-dolar fa-fw me-2"></i>Adulte:{{ $room->adult_capacity }} Personnes
                                            
										</li>
                                        <li class="list-group-item pb-0">
											<i class="fa-solid fa-dolar fa-fw me-2"></i>Enfant:{{ $room->kids_capacity }} Personnes
                                            
										</li>
										
									</ul>
								</div>
								<!-- Card body END -->
			
								<!-- Card footer START-->
								<div class="card-footer pt-0">
									<!-- Price -->
									
									<form method="POST" action="{{ route('admin.rooms.destroy',$room->id) }}" onsubmit="return confirm('Etes vous sur?')">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger-soft mb-0 w-100"  ><i class="material-icons md-delete_forever" aria-hidden="true" title="Suprimer">Suprimer</i></button>

                                       </form>
                                   
								</div>
							</div>
						</div>
                        @endforeach
						

						
					</div>
					<!-- Rooms END -->

					<!-- Pagination START -->
				
					<!-- Pagination END -->
				</div>
				<!-- Content item END -->

				<!-- Content item START -->
				
				<!-- Content item END -->
			</div>
			<!-- Tab content END -->
		</div>
		<!-- Page main content END -->
	</div>
	<!-- Page content END -->
	
	</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Bootstrap JS -->
<script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

<!-- Vendor -->
<script src="{{ asset('assets/vendor/overlay-scrollbar/js/overlayscrollbars.min.js') }}"></script>
<script src="{{ asset('assets/vendor/apexcharts/js/apexcharts.min.js') }}"></script>

<!-- ThemeFunctions -->
<script src="{{ asset('assets/js/functions.js') }}"></script>

</body>
</html>