<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title')</title>

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
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/tiny-slider/tiny-slider.css') }}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/glightbox/css/glightbox-1.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/flatpickr/css/flatpickr.min-1.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/choices/css/choices.min.css') }}">


	<!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

</head>

<body class="has-navbar-mobile">

<!-- Header START -->
@include('layouts.frontoffice.header')
<!-- Header END -->

<!-- **************** MAIN CONTENT START **************** -->
@yield("content")
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->
@include('layouts.frontoffice.footer')
<!-- =======================
Footer END -->

<!-- Back to top -->
<div class="back-top"></div>

<!-- Navbar mobile START -->
<div class="navbar navbar-mobile">
	<ul class="navbar-nav">
		<!-- Nav item Home -->
		<li class="nav-item">
			<a class="nav-link active" href="index.html-1.htm"><i class="bi bi-house-door fa-fw"></i>
				<span class="mb-0 nav-text">Home</span>
			</a>
		</li>

		<!-- Nav item My Trips -->
		<li class="nav-item">
			<a class="nav-link" href="account-bookings.html.htm"><i class="bi bi-briefcase fa-fw"></i>
				<span class="mb-0 nav-text">My Trips</span>
			</a>
		</li>

		<!-- Nav item Offer -->
		<li class="nav-item">
			<a class="nav-link" href="offer-detail.html.htm"><i class="bi bi-percent fa-fw"></i>
				<span class="mb-0 nav-text">Offer</span>
			</a>
		</li>

		<!-- Nav item Account -->
		<li class="nav-item">
			<a class="nav-link" href="account-profile.html.htm"><i class="bi bi-person-circle fa-fw"></i>
				<span class="mb-0 nav-text">Account</span>
			</a>
		</li>
	</ul>
</div>
<!-- Navbar mobile END -->

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="assets/vendor/tiny-slider/tiny-slider.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.js"></script>
<script src="assets/vendor/flatpickr/js/flatpickr.min.js"></script>
<script src="assets/vendor/choices/js/choices.min.js"></script>

<!-- ThemeFunctions -->
<script src="assets/js/functions.js"></script>

</body>
</html>
