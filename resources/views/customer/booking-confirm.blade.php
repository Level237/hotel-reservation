<!DOCTYPE html>
<html lang="en">
<head>
	<title>Reservation Confirmé</title>

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

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/font-awesome/css/all.min-1.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons-1.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/glightbox/css/glightbox-1.css') }}">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

</head>

<body>
    <main>

        <!-- =======================
        Main content START -->
        <section class="pt-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-xl-8 mx-auto">

                        <div class="card shadow">
                            <!-- Image -->
                            <img src="assets/images/gallery/04.jpg" class="rounded-top" alt="">

                            <!-- Card body -->
                            <div class="card-body text-center p-4">
                                <!-- Title -->
                                <h1 class="card-title fs-3">🎊 Félicitations 🎊</h1>
                                <p class="lead mb-3">Votre Réservation à bien été pris en compte...</p>

                                <!-- Second title -->
                                <h5 class="text-primary mb-4">Hotel: {{ $hotel->nom_hotel }}</h5>

                                <!-- List -->
                                <div class="row justify-content-between text-start mb-4">
                                    <div class="col-lg-5">
                                        <ul class="list-group list-group-borderless">
                                            <li class="list-group-item d-sm-flex justify-content-between align-items-center">
                                                <span class="mb-0"><i class="bi bi-vr fa-fw me-2"></i>Id Reservation :</span>
                                                <span class="h6 fw-normal mb-0">numero {{ $reservation->id }}</span>
                                            </li>
                                            <li class="list-group-item d-sm-flex justify-content-between align-items-center">
                                                <span class="mb-0"><i class="bi bi-person fa-fw me-2"></i>Reserver  Par:</span>
                                                <span class="h6 fw-normal mb-0">{{ auth()->user()->name }}</span>
                                            </li>

                                            <li class="list-group-item d-sm-flex justify-content-between align-items-center">
                                                <span class="mb-0"><i class="bi bi-currency-dollar fa-fw me-2"></i>Total Price:</span>
                                                <span class="h6 fw-normal mb-0">{{ $reservation->price_reser }}</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-5">
                                        <ul class="list-group list-group-borderless">
                                            <li class="list-group-item d-sm-flex justify-content-between align-items-center">
                                                <span class="mb-0"><i class="bi bi-calendar fa-fw me-2"></i>Du:</span>
                                                <span class="h6 fw-normal mb-0">{{ $reservation->check_in }} 2023</span>
                                            </li>
                                            <li class="list-group-item d-sm-flex justify-content-between align-items-center">
                                                <span class="mb-0"><i class="bi bi-calendar fa-fw me-2"></i>Au:</span>
                                                <span class="h6 fw-normal mb-0">{{ $reservation->check_out }} 2023</span>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                                <!-- Button -->
                                <div class="d-sm-flex justify-content-sm-end d-grid">
                                    <!-- Share button with dropdown -->
                                    <div class=" me-sm-2 mb-2 mb-sm-0">
                                        <a href="{{ route('customer.my-reservations.index') }}" class="btn btn-light mb-0 w-100"  >
                                            </i>Consulter vos réservations
                                        </a>
                                        <!-- dropdown button -->

                                    </div>
                                    <!-- Download button -->
                                    <a href="#" class="btn btn-primary mb-0"><i class="bi bi-file-pdf me-2"></i>Download PDF</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
        Main content START -->

        </main>

        <div class="back-top"></div>

<!-- Bootstrap JS -->
<script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

<!-- Vendors -->
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.js') }}"></script>

<!-- ThemeFunctions -->
<script src="{{ asset('assets/js/functions.js') }}"></script>

</body>
</html>
