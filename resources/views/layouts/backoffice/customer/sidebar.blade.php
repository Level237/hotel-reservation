<ul class="nav nav-pills-primary-soft flex-column">
    <li class="nav-item">
        <a class="nav-link active" href="account-profile.html.htm"><i class="bi bi-person fa-fw me-2"></i>Mon Profil</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('customer.my-reservations.index') }}"><i class="bi bi-ticket-perforated fa-fw me-2"></i>Mes Reservations</a>
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
