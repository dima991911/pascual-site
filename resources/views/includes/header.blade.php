<!----------Header fixed----------->

<header class="header header-fixed">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 header-logo">
                <img src="assets/img/logo.png" alt="Logo" class="header-logo__img">
            </div>
            <div class="col-sm-8 header-navigation">
                <nav class="nav-fixed">
                    <a href="#about" data-scroll class="header-navigation__item">{{ $lg->header['parking'] }}</a>
                    <a href="#service" data-scroll class="header-navigation__item">{{ $lg->header['services'] }}</a>
                    <a href="#selling" data-scroll class="header-navigation__item">{{ $lg->header['selling'] }}</a>
                    <a href="#contact" data-scroll class="header-navigation__item">{{ $lg->header['contacts'] }}</a>
                </nav>
            </div>
            <div class="col-sm-2 header-language">
                <a href="{{ route('change.language') }}" class="header-language__a">
                    @if(Session::get('lg') == 'en')
                        UKR
                    @else
                        ENG
                    @endif
                </a>
            </div>
        </div>
    </div>
</header>

{{--------------------Logo for mobile---------------------}}

<div class="logo-mobile">
    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
</div>

<!-------------------Hamburger icon------------------>

<div class="hamburger-icon">
    <i class="fa fa-bars" aria-hidden="true"></i>
</div>

<!----------------------Mobile Menu------------------------>

<div class="mobile-menu">
    <nav class="mobile-nav">
        <a href="#about" data-scroll class="mobile-nav-item">{{ $lg->header['parking'] }}</a>
        <a href="#service" data-scroll class="mobile-nav-item">{{ $lg->header['services'] }}</a>
        <a href="#selling" data-scroll class="mobile-nav-item">{{ $lg->header['selling'] }}</a>
        <a href="#contact" data-scroll class="mobile-nav-item">{{ $lg->header['contacts'] }}</a>
        <a href="{{ route('change.language') }}" data-scroll class="mobile-nav-item">
            @if(Session::get('lg') == 'en')
                UKR
            @else
                ENG
            @endif
        </a>
    </nav>
</div>

{{--------------------Header-------------------}}
<section class="section-top">
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 header-logo">
                    <img src="assets/img/logo.png" alt="Logo" class="header-logo__img">
                </div>
                <div class="col-sm-8 header-navigation">
                    <nav class="">
                        <a href="#about" data-scroll class="header-navigation__item">{{ $lg->header['parking'] }}</a>
                        <a href="#service" data-scroll class="header-navigation__item">{{ $lg->header['services'] }}</a>
                        <a href="#selling" data-scroll class="header-navigation__item">{{ $lg->header['selling'] }}</a>
                        <a href="#contact" data-scroll class="header-navigation__item">{{ $lg->header['contacts'] }}</a>
                    </nav>
                </div>
                <div class="col-sm-2 header-language">
                    <a href="{{ route('change.language') }}" class="header-language__a">
                        @if(Session::get('lg') == 'en')
                            UKR
                        @else
                            ENG
                        @endif
                    </a>
                </div>
            </div>
        </div>
    </header>
    <div class="name">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-md-11">
                    <h2 class="name__h2">
                        {{ $lg->header['name'] }}<br><span class="name__h2-big">{{ $lg->header['name_firm'] }}</span>
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>