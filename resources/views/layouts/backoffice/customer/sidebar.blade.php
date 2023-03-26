<ul class="nav nav-pills-primary-soft flex-column">
    <li class="nav-item">
        <a class="nav-link active" href="account-profile.html.htm"><i class="bi bi-person fa-fw me-2"></i>My Profile</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="account-bookings.html.htm"><i class="bi bi-ticket-perforated fa-fw me-2"></i>My Bookings</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="account-travelers.html.htm"><i class="bi bi-people fa-fw me-2"></i>Travelers</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="account-payment-details.html.htm"><i class="bi bi-wallet fa-fw me-2"></i>Payment Details</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="account-wishlist.html.htm"><i class="bi bi-heart fa-fw me-2"></i>Wishlist</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="account-settings.html.htm"><i class="bi bi-gear fa-fw me-2"></i>Settings</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="account-delete.html.htm"><i class="bi bi-trash fa-fw me-2"></i>Delete Profile</a>
    </li>

    <form method="POST" action="{{ route('logout') }}" id="logout-form">
        @csrf
      </form>


    <li class="nav-item">
        <a class="nav-link text-danger bg-danger-soft-hover" href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt fa-fw me-2"></i>Deconnexion</a>
    </li>
</ul>
