<nav class="navbar navbar-expand-lg navbar-dark bg-danger px-3">
    <a class="navbar-brand" style="font-family: 'Montserrat Alternates'; " href="/"><img src="delivery-bike.png" alt="delivery-bike.png" class="w-25 mx-2">UnivFoods</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse navbar-expand-sm" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ $title == 'Home' ? 'active' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $title == 'Eatery' ? 'active' : ''}}" href="/eatery">Eatery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $title == 'About' ? 'active' : '' }}" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $title == 'Contact' ? 'active' : '' }}" href="/contact">Contact</a>
            </li>
        </ul>
        
        @auth
        <div class="dropdown ms-auto">
            <button class="btn btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Hi , {{ auth()->user()->username }} <i class="bi bi-person-circle"></i></button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a href="/profile" class="dropdown-item"><i class="bi bi-person-square"></i> Your Profile</a></li>
                <li><a href="/orderhistory" class="dropdown-item"><i class="bi bi-bag-dash"></i> Your Order History</a></li>

                @if(auth()->user()->merchant_owner)
                    <li><a href="/merchdash" class="dropdown-item">Merchant Dashboard</a></li>
                @endif

                @if(auth()->user()->isAdmin)
                    <li><a href="/dashboard" class="dropdown-item"><i class="bi bi-house-dash"></i> Dashboard</a></li>
                @endif
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="btn mx-3"><i class="bi bi-box-arrow-left"></i> Logout</button>
                </form>
            </ul>
        </div>
        @else
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a href="/signup" class="nav-link {{ $title === 'Sign Up' ? 'active' : '' }}">Sign Up</a>
            </li>
            <li class="nav-item">
                <a href="/login" class="nav-link {{ $title === 'Login' ? 'active' : '' }}">Login</a>
            </li>
        </ul>
        @endauth
       
    </div>
</nav>