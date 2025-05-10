<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
        <h1 class="m-0"><i class="fa fa-map-marker-alt me-3"></i>Travela</h1>
        <!-- <img src="img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ Route('accueil') }}" class="nav-item nav-link active">Accueil</a>
            <a href="{{ Route('a-propos') }}" class="nav-item nav-link">A propos</a>
            <a href="{{ Route('services') }}" class="nav-item nav-link">Services</a>
            <a href="{{ Route('packages') }}" class="nav-item nav-link">Packages</a>
            <a href="{{ Route('blog') }}" class="nav-item nav-link">Blog</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="{{Route('destination')}}" class="dropdown-item">Destination</a>
                    <a href="{{Route('tour')}}" class="dropdown-item">Explore Tour</a>
                    <a href="{{Route('booking')}}" class="dropdown-item">Travel Booking</a>
                    <a href="{{Route('gallery')}}" class="dropdown-item">Our Gallery</a>
                    <a href="{{Route('guides')}}" class="dropdown-item">Travel Guides</a>
                    <a href="{{Route('testimonial')}}" class="dropdown-item">Testimonial</a>
                </div>
            </div>
            <a href="{{Route('contact')}}" class="nav-item nav-link">Contact</a>
        </div>
        <a href="" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Book Now</a>
    </div>
</nav>
