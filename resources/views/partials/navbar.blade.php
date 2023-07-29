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
            <li class="nav-item">
                <a class="nav-link {{ $title == 'Profile' ? 'active' : '' }}" href="/profile">Profile</a>
            </li>
        </ul>
    </div>
</nav>