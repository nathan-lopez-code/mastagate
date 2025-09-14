<header>
    <!-- start navigation -->
    <nav class="{{ request()->is('blogs/*') || request()->is('site') ? 'navbar top-space navbar-expand-lg navbar-light bg-white header-light fixed-top header-reverse-scroll navbar-boxed border-bottom border-color-black-transparent': 'navbar navbar-expand-lg navbar-boxed navbar-dark bg-transparent header-light fixed-top header-reverse-scroll ' }}
        ">
        <div class="container nav-header-container">
            <div class="col-auto col-sm-6 col-lg-2 mr-auto pl-lg-0">
                <a class="navbar-brand" href="{{ route('home') }}">
                   @if(!request()->is('blogs/*') && !request()->is('site'))
                    <img src="{{ asset('images/logo-white.png') }}" data-at2x="{{ asset('images/logo-white.png') }}" class="default-logo" alt="">
                    @else
                        <img src="{{ asset('images/logo.png') }}" data-at2x="{{ asset('images/logo.png') }}" class="default-logo" alt="">
                    @endif
                       {{-- <img src="{{ asset('images/logo-white.png') }}" data-at2x="{{ asset('images/logo-white.png') }}" class="default-logo" alt="">--}}
                    <img src="{{ asset('images/logo.png') }}" data-at2x="{{ asset('images/logo.png') }}" class="alt-logo" alt="">
                    <img src="{{ asset('images/logo-mobile.png') }}" data-at2x="{{ asset('images/logo-mobile.png') }}" class="mobile-logo" alt="">
                </a>
            </div>
            <div class="col-auto menu-order px-lg-0">
                <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav alt-font">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('about') }}" class="nav-link">A propos</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('services') }}" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('blogs.index') }}" class="nav-link">Actualités</a>
                        </li>
                        <li class="nav-item d-block d-md-none">
                            <a href="{{ route('contacts') }}" class="nav-link">Contacts</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-auto text-right pr-0 font-size-0">
                    <div class="header-social-icon d-inline-block">
                        <a href="https://web.facebook.com/MastaGate-101928592157693" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/mastagate" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://youtu.be/1dl1MV0kRVg" target="_blank"><i class="fab fa-youtube"></i></a>
                    </div>
                <div class="header-button d-none d-md-inline-block">
                    <a href="{{ route('contacts') }}" class="btn btn-very-small btn-round-edge-small btn-sky-blue section-link blue-night">Contacts</a>
                </div>
            </div>
        </div>
    </nav>
</header>
