@extends('layouts.page-user')

@section('styles')
    <link rel="stylesheet" href={{ asset("assets/css/bootstrap.min.css") }}>
    <link rel="stylesheet" href={{ asset("assets/css/font-awesome.min.css") }}>
    <link rel="stylesheet" href={{ asset("assets/css/owl.carousel.css") }}>
    <link rel="stylesheet" href={{ asset("assets/css/owl.theme.default.css") }}>
    <link rel="stylesheet" href={{ asset("assets/css/jquery.fancybox.css") }}>
    <link rel="stylesheet" href={{ asset("assets/css/style.css") }}>
@endsection

@section('content')
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

    <div class="content-top">

        <!----------About----------->

        <section class="about" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 about-parking">
                        <div class="row">
                            <div class="col-sm-6">
                                <h4 class="about-parking__h">SOBRE <span class="about-parking__h-bold">EL PARKING</span></h4>
                                <p class="about-parking__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias architecto, aspernatur autem delectus deserunt distinctio dolorum eos iusto minus modi neque odit officia officiis perspiciatis quasi veritatis voluptates! Aspernatur, blanditiis cumque dolores doloribus ea eius enim eos et magni nam neque quae, quaerat quod recusandae rem sapiente vitae voluptas? Ab accusamus ad animi asperiores assumenda autem culpa delectus ducimus facilis, fuga, incidunt ipsam ipsum natus nemo nobis odit, porro provident qui quia quisquam recusandae soluta temporibus voluptas! At atque culpa deserunt eius eligendi enim, impedit modi obcaecati odit quis totam veniam. Ad expedita perspiciatis quasi soluta? Nemo provident, voluptatibus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!---------------Services------------>

        <div id="service">
            <section class="services">
                <div class="container">
                    <div class="row services-block">
                        <h2 class="services-block__h2">SERVICIO DE PARKING CARAVANING PASCUAL</h2>
                        <div class="col-md-6 service-item">
                            <div>
                                <img src="assets/img/caravan_service.jpg" alt="Caravan" class="service-item__img">
                            </div>
                            <h4 class="service-item__name">
                                PARKING EXTERIOR
                            </h4>
                            <div class="row">
                                <div class="col-xs-7 service-bottom__price">250 &#8364/ano</div>
                                <div class="col-xs-5 service-bottom__btn"><div class="selling-details show-gallery">GALERIA</div></div>
                            </div>
                        </div>
                        <div class="col-md-6 service-item">
                            <img src="assets/img/caravan_service.jpg" alt="Caravan" class="service-item__img">
                            <h4 class="service-item__name">
                                PARKING EXTERIOR
                            </h4>
                            <div class="row">
                                <div class="col-xs-7 service-bottom__price">250 &#8364/ano</div>
                                <div class="col-xs-5 service-bottom__btn"><div class="selling-details show-gallery">GALERIA</div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--------------Why we SECTION-------------->

            <section class="we">
                <div class="container">
                    <div class="row we-section">
                        <div class="col-md-offset-6 col-md-6">
                            <header class="we-header">
                                <h3>PORQUE NOSOTROS</h3>
                                <span>EL PRESIO INCLUYE</span>
                            </header>
                            <div class="we-item">  <!--block for preferer-->
                                <div class="row">
                                    <div class="col-xs-4 we-icon">
                                        <img src="assets/img/reparaciones.svg" alt="icon" class="we-item__img">
                                    </div>
                                    <div class="col-xs-8">
                                        <div class="we-item__description">
                                            <h5>REPARACIONES</h5>
                                            <p>Hacemos reparaciones para los clientes de nuestro parking caravaning.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="we-item">  <!--block for preferer-->
                                <div class="row">
                                    <div class="col-xs-4 we-icon">
                                        <img src="assets/img/drop.svg" alt="icon" class="we-item__img">
                                    </div>
                                    <div class="col-xs-8">
                                        <div class="we-item__description">
                                            <h5>LAVADO EXTERIOR</h5>
                                            <p>Ofrecemos un servicio integral de lavado de toda <br> la caravana.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="we-item">  <!--block for preferer-->
                                <div class="row">
                                    <div class="col-xs-4 we-icon">
                                        <img src="assets/img/seguro.svg" alt="icon" class="we-item__img">
                                    </div>
                                    <div class="col-xs-8">
                                        <div class="we-item__description">
                                            <h5>SEGURO INCLUÍDO</h5>
                                            <p>Ofrecemos un seguro incluído en todos los precios de estancia para cuando la caravana está en nuestro parking</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="we-item">  <!--block for preferer-->
                                <div class="row">
                                    <div class="col-xs-4 we-icon">
                                        <img src="assets/img/engrase.svg" alt="icon" class="we-item__img">
                                    </div>
                                    <div class="col-xs-8">
                                        <div class="we-item__description">
                                            <h5>ENGRASE</h5>
                                            <p>Engrasamos los pies estabilizadores y todos los puntos de engrase de la caravana.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="we-item">  <!--block for preferer-->
                                <div class="row">
                                    <div class="col-xs-4 we-icon">
                                        <img src="assets/img/camera.svg" alt="icon" class="we-item__img">
                                    </div>
                                    <div class="col-xs-8">
                                        <div class="we-item__description">
                                            <h5>CÁMARAS DE VIDEOVIGILANCIA</h5>
                                            <p>24 horas de <br> videovigilancia.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="we-item">  <!--block for preferer-->
                                <div class="row">
                                    <div class="col-xs-4 we-icon">
                                        <img src="assets/img/transport.svg" alt="icon" class="we-item__img">
                                    </div>
                                    <div class="col-xs-8">
                                        <div class="we-item__description">
                                            <h5>TRANSPORTES</h5>
                                            <p>Transportamos su caravana <br> al camping y viceversa.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!----------Buy Caravan SECTION------------>

        <section class="selling" id="selling">
            <div class="container">
                <div class="row selling-section">
                    <h3 class="selling-section__h3">VENTA DE CARAVANAS</h3>
                    <div class="col-md-6 selling-caravan-margin">
                        <div class="selling-caravan">
                            <div class="selling-caravan-avatar">
                                <img src="assets/img/caravan1.jpg" class="selling-caravan__img" alt="Caravan">
                                <h6>CARAVANA HOBBY</h6>
                            </div>
                            <div class="row">
                                <div class="col-xs-7 selling-price">2.000 &#8364;</div>
                                <div class="col-xs-5"><div class="selling-details show-details" data-id="1">DETAILS</div></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 selling-caravan-margin">
                        <div class="selling-caravan">
                            <div class="selling-caravan-avatar">
                                <img src="assets/img/caravan2.jpg" class="selling-caravan__img" alt="Caravan">
                                <h6>CARAVANA HOBBY</h6>
                            </div>
                            <div class="row">
                                <div class="col-xs-7 selling-price">2.000 &#8364;</div>
                                <div class="col-xs-5"><div class="selling-details show-details" data-id="2">DETAILS</div></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 selling-caravan-margin">
                        <div class="selling-caravan">
                            <div class="selling-caravan-avatar">
                                <img src="assets/img/caravan3.jpg" class="selling-caravan__img" alt="Caravan">
                                <h6>CARAVANA HOBBY</h6>
                            </div>
                            <div class="row">
                                <div class="col-xs-7 selling-price">2.000 &#8364;</div>
                                <div class="col-xs-5"><div class="selling-details show-details">DETAILS</div></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 selling-caravan-margin">
                        <div class="selling-caravan">
                            <div class="selling-caravan-avatar">
                                <img src="assets/img/caravan3.jpg" class="selling-caravan__img" alt="Caravan">
                                <h6>CARAVANA HOBBY</h6>
                            </div>
                            <div class="row">
                                <div class="col-xs-7 selling-price">2.000 &#8364;</div>
                                <div class="col-xs-5"><div class="selling-details show-details">DETAILS</div></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 selling-caravan-margin selling-caravan__none">
                        <div class="selling-caravan">
                            <div class="selling-caravan-avatar">
                                <img src="assets/img/caravan2.jpg" class="selling-caravan__img" alt="Caravan">
                                <h6>CARAVANA HOBBY</h6>
                            </div>
                            <div class="row">
                                <div class="col-xs-7 selling-price">2.000 &#8364;</div>
                                <div class="col-xs-5"><div class="selling-details show-details">DETAILS</div></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 selling-caravan-margin selling-caravan__none">
                        <div class="selling-caravan">
                            <div class="selling-caravan-avatar">
                                <img src="assets/img/caravan1.jpg" class="selling-caravan__img" alt="Caravan">
                                <h6>CARAVANA HOBBY</h6>
                            </div>
                            <div class="row">
                                <div class="col-xs-7 selling-price">2.000 &#8364;</div>
                                <div class="col-xs-5"><div class="selling-details show-details">DETAILS</div></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 selling-caravan-margin selling-caravan__none">
                        <div class="selling-caravan">
                            <div class="selling-caravan-avatar">
                                <img src="assets/img/caravan1.jpg" class="selling-caravan__img" alt="Caravan">
                                <h6>CARAVANA HOBBY</h6>
                            </div>
                            <div class="row">
                                <div class="col-xs-7 selling-price">2.000 &#8364;</div>
                                <div class="col-xs-5"><div class="selling-details show-details">DETAILS</div></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 selling-caravan-margin selling-caravan__none">
                        <div class="selling-caravan">
                            <div class="selling-caravan-avatar">
                                <img src="assets/img/caravan1.jpg" class="selling-caravan__img" alt="Caravan">
                                <h6>CARAVANA HOBBY</h6>
                            </div>
                            <div class="row">
                                <div class="col-xs-7 selling-price">2.000 &#8364;</div>
                                <div class="col-xs-5"><div class="selling-details show-details">DETAILS</div></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 selling-caravan-margin selling-caravan__none">
                        <div class="selling-caravan">
                            <div class="selling-caravan-avatar">
                                <img src="assets/img/caravan1.jpg" class="selling-caravan__img" alt="Caravan">
                                <h6>CARAVANA HOBBY</h6>
                            </div>
                            <div class="row">
                                <div class="col-xs-7 selling-price">2.000 &#8364;</div>
                                <div class="col-xs-5"><div class="selling-details show-details">DETAILS</div></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 selling-more">
                        <button class="selling-more__btn">
                            Ver mas
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-------------Contact SECTION-------------->

        <section class="contact" id="contact">
            <div class="container">
                <div class="row contact-section">
                    <div class="col-xs-12">
                        <h3 class="contact-section__h3">CONTACTOS</h3>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="contact-item">
                            <div class="row">
                                <div class="col-xs-2 contact-item__icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                <div class="col-xs-10 contact-item__text">17258, L’Estartit (Girona), Spain <br>
                                    <span class="text_italica">42.047711"N 3.174757"E</span></div>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="row">
                                <div class="col-xs-2 contact-item__icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                <div class="col-xs-10 contact-item__text"><a href="tel:+3463624338">(+34) 636 243 388</a>
                                    <br><span class="text_italica">(en Castellano)</span></div>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="row">
                                <div class="col-xs-2 contact-item__icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                <div class="col-xs-10 contact-item__text"><a href="tel:+34654925503">(+34) 654 925 503 </a><br><span class="text_italica">(en Ingles)</span></div>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="row">
                                <div class="col-xs-2 contact-item__icon"><i class="fa fa-laptop" aria-hidden="true"></i></div>
                                <div class="col-xs-10 contact-item__text"><a href="#">www.parkingcaravanaspascual.com</a></div>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="row">
                                <div class="col-xs-2 contact-item__icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                <div class="col-xs-10 contact-item__text"><a href="mailto:parkingcaravanaspascual@gmail.com">parkingcaravanaspascual@gmail.com</a></div>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="row">
                                <div class="col-xs-2 contact-item__icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                                <div class="col-xs-10 contact-item__text">
                                    8:30h - 20:00h (cada dia)</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12"> <!----------------Form feedback------------------>
                        <form name="feedback" class="feedback">
                            <div class="feedback-group">
                                <input type="text" placeholder="Nombre" class="feedback-group__input">
                            </div>
                            <div class="feedback-group">
                                <input type="text" placeholder="Telefono" class="feedback-group__input">
                            </div>
                            <div class="feedback-group">
                                <input type="email" placeholder="Correo electronico" class="feedback-group__input">
                            </div>

                            <textarea cols="30" rows="5" class="feedback-group__input" placeholder="Mensaje"></textarea>

                            <div class="feedback-group feedback-btn">
                                <input type="submit" value="ENVIAR" class="feedback-group__btn">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <h3 class="contact-localizacion__h3">
                            LOCALIZACION
                        </h3>
                    </div>
                    <div class="col-md-12" id="map">

                    </div>
                </div>
            </div>
        </section>


    </div>

    <!-----------------------Gallery----------------------->
    <div class="gallery">
        <a class="fancybox" rel="gallery1" href="assets/img/nature.jpeg">
            <img src="assets/img/nature.jpeg" alt="" />
        </a>
        <a class="fancybox" rel="gallery1" href="assets/img/nature2.jpg">
            <img src="assets/img/nature2.jpg" alt="" />
        </a>
        <a class="fancybox" rel="gallery1" href="assets/img/nature3.jpg">
            <img src="assets/img/nature3.jpg" alt="" />
        </a>
    </div>

    <!------------------------Modal window for Caravan DETAILS------------------------->

    <div class="modal-details">
        <div class="modal-content">
            <div class="modal-content__close"> <!--Close button-->
                <i class="fa fa-times-circle-o" aria-hidden="true"></i>
            </div>

            <div class="modal-price"><!--Name and Price-->
                <div class="row">
                    <div class="col-xs-6"><h4>CARAVANA HOBBY</h4></div>
                    <div class="col-xs-6 modal-price__price">2008 &#8364;</div>
                </div>
            </div>

            <div class="row"> <!--Slider-->
                <div class="col-xs-12">
                    <div id="owl-demo" class="owl-carousel owl-theme">
                        <!--Modal window slider-->
                    </div>
                </div>
            </div>

            <div class="modal-info"> <!--Info to Caravan-->
                <div class="row">
                    <div class="col-md-7 col-sm-12 ">
                        <div class="modal-info-item">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 modal-info-item__name">TIPO DE VEHÍCULO:</div>
                                <div class="col-md-4 col-sm-6 modal-info-item__value modal-info-item__type">Autocaravana</div>
                            </div>
                        </div>
                        <div class="modal-info-item">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 modal-info-item__name">MARCA:</div>
                                <div class="col-md-4 col-sm-6 modal-info-item__value modal-info-item__marca">KNAUS</div>
                            </div>
                        </div>
                        <div class="modal-info-item">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 modal-info-item__name">AÑO DE FABRICACIÓN:</div>
                                <div class="col-md-4 col-sm-6 modal-info-item__value modal-info-item__year">2008</div>
                            </div>
                        </div>
                        <div class="modal-info-item">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 modal-info-item__name">LONGITUD:</div>
                                <div class="col-md-4 col-sm-6 modal-info-item__value modal-info-item__lenght">Autocaravana</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12 modal-info-description">
                        <h5>Description</h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa cumque deleniti eligendi, illo iusto magni nisi nulla perspiciatis rem sapiente! Commodi deserunt laudantium nulla quo sunt. Aspernatur expedita explicabo iste odit saepe sequi temporibus! Aperiam doloremque earum eos explicabo nostrum praesentium quasi quisquam! Minima nisi obcaecati, repellat rerum tempore temporibus.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!---------------Section FOOTER--------------->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-8 footer-copyright">
                    <p>© 2008-2018 Parking Caravanas Pascual</p>
                </div>
                <div class="col-xs-4 footer-logo"><img src="assets/img/logo_white.svg" alt="Logo"></div>
            </div>
        </div>
    </footer>
@endsection

@section('scripts')
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.fancybox.pack.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/bpopup.js"></script>
    <script src="assets/js/smooth-scroll.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6OteSbFlfYJ3CmJQxQXoPmFBJadNwwIk&callback=Module.initMap"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/details.js"></script>
@endsection
