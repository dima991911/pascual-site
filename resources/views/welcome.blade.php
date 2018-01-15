@extends('layouts.page-user')

@section('styles')
    <link rel="stylesheet" href={{ asset("assets/css/bootstrap.min.css") }}>
    <link rel="stylesheet" href={{ asset("assets/css/font-awesome.min.css") }}>
    <link rel="stylesheet" href={{ asset("assets/css/owl.carousel.css") }}>
    <link rel="stylesheet" href={{ asset("assets/css/owl.theme.default.css") }}>
    <link rel="stylesheet" href={{ asset("assets/css/jquery.fancybox.css") }}>
    <link rel="stylesheet" href={{ asset("assets/css/style.css") }}>
@endsection

@section('caravanSelling')
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
@endsection

@section('scripts')
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.fancybox.pack.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/bpopup.js"></script>
    <script src="assets/js/smooth-scroll.min.js"></script>
    <script src="assets/js/form-validation.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6OteSbFlfYJ3CmJQxQXoPmFBJadNwwIk&callback=Module.initMap"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/contact.js"></script>
    <script src="assets/js/details.js"></script>
@endsection
