<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="{{ route('accueil') }}" class="navbar-brand p-0">
        <h1 class="m-0"><i class="fa fa-map-marker-alt me-3"></i>Tour-Ben</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ route('accueil') }}" @class([
                'nav-item',
                'nav-link',
                'active' => request()->routeIs('accueil'),
            ])>
                Accueil
            </a>
            <a href="{{ route('a-propos') }}" @class([
                'nav-item',
                'nav-link',
                'active' => request()->routeIs('a-propos'),
            ])>
                A propos
            </a>
            <a href="{{ route('services') }}" @class([
                'nav-item',
                'nav-link',
                'active' => request()->routeIs('services'),
            ])>
                Services
            </a>
            <a href="{{ route('packages') }}" @class([
                'nav-item',
                'nav-link',
                'active' => request()->routeIs('packages'),
            ])>
                Packages
            </a>

            <div class="nav-item dropdown">
                <a href="#" data-bs-toggle="dropdown" @class([
                    'nav-link',
                    'dropdown-toggle',
                    'active' => request()->routeIs(
                        'destination',
                        'tour',
                        'booking',
                        'gallery',
                        'guides',
                        'testimonial'),
                ])>
                    Pages
                </a>
                <div class="dropdown-menu m-0">
                    <a href="{{ route('destination') }}" @class([
                        'dropdown-item',
                        'active' => request()->routeIs('destination'),
                    ])>
                        Destination
                    </a>
                    <a href="{{ route('tour') }}" @class(['dropdown-item', 'active' => request()->routeIs('tour')])>
                        Explore Tour
                    </a>
                    <a href="{{ route('booking') }}" @class(['dropdown-item', 'active' => request()->routeIs('booking')])>
                        Travel Booking
                    </a>
                    <a href="{{ route('gallery') }}" @class(['dropdown-item', 'active' => request()->routeIs('gallery')])>
                        Our Gallery
                    </a>
                    <a href="{{ route('guides') }}" @class(['dropdown-item', 'active' => request()->routeIs('guides')])>
                        Travel Guides
                    </a>
                    <a href="{{ route('testimonial') }}" @class([
                        'dropdown-item',
                        'active' => request()->routeIs('testimonial'),
                    ])>
                        Testimonial
                    </a>
                </div>
            </div>

            <a href="{{ route('contact') }}" @class([
                'nav-item',
                'nav-link',
                'active' => request()->routeIs('contact'),
            ])>
                Contact
            </a>
        </div>
        <a href="#" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Reserver maintenant</a>
    </div>
</nav>
