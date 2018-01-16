<!----------Header fixed----------->

<header class="header header-fixed">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 header-logo">
                <img src="assets/img/logo.png" alt="Logo" class="header-logo__img">
            </div>
            <div class="col-sm-8 header-navigation">
                <nav class="nav-fixed">
                    <a href="#about" data-scroll class="header-navigation__item">PARKING</a>
                    <a href="#service" data-scroll class="header-navigation__item">SERVICIO</a>
                    <a href="#selling" data-scroll class="header-navigation__item">VENTA</a>
                    <a href="#contact" data-scroll class="header-navigation__item">CONTACTOS</a>
                </nav>
            </div>
            <div class="col-sm-2 header-language">
                <a href="#" class="header-language__a">ESP</a>
            </div>
        </div>
    </div>
</header>

<!-------------------Hamburger icon------------------>

<div class="hamburger-icon">
    <i class="fa fa-bars" aria-hidden="true"></i>
</div>

<!----------------------Mobile Menu------------------------>

<div class="mobile-menu">
    <nav class="mobile-nav">
        <a href="#about" data-scroll class="mobile-nav-item">PARKING</a>
        <a href="#service" data-scroll class="mobile-nav-item">SERVICIO</a>
        <a href="#selling" data-scroll class="mobile-nav-item">VENTA</a>
        <a href="#contact" data-scroll class="mobile-nav-item">CONTACTOS</a>
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
                        <a href="#about" data-scroll class="header-navigation__item">PARKING</a>
                        <a href="#service" data-scroll class="header-navigation__item">{{ $lg['services'] }}</a>
                        <a href="#selling" data-scroll class="header-navigation__item">VENTA</a>
                        <a href="#contact" data-scroll class="header-navigation__item">CONTACTOS</a>
                    </nav>
                </div>
                <div class="col-sm-2 header-language">
                    <a href="{{ route('change.language') }}" class="header-language__a">
                        @if(Session::get('lg') == 'en')
                            ESP
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
                        PARKING CARAVANING<br><span class="name__h2-big">PASCUAL</span>
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>