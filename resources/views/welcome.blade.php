@extends('layouts.page-user')

@section('styles')
    <link rel="stylesheet" href={{ asset("assets/css/bootstrap.min.css") }}>
    <link rel="stylesheet" href={{ asset("assets/css/font-awesome.min.css") }}>
    <link rel="stylesheet" href={{ asset("assets/css/owl.carousel.css") }}>
    <link rel="stylesheet" href={{ asset("assets/css/owl.theme.default.css") }}>
    <link rel="stylesheet" href={{ asset("assets/css/jquery.fancybox.css") }}>
    <link rel="stylesheet" href={{ asset("assets/css/style.css") }}>
    <link rel="stylesheet" href={{ asset("assets/css/animate.css") }}>
    <link rel="icon" type="image/png" href="favicon.png" />
@endsection

@section('caravanSelling')
    <section class="selling" id="selling">
        <div class="container">
            <div class="row selling-section">
                <h3 class="selling-section__h3">{{ $lg->selling['header'] }}</h3>

                @if(count($caravanas) > 0)
                    @foreach($caravanas as $key=>$caravan)

                        <div class="col-md-6 selling-caravan-margin @if($key > 3) selling-caravan__none @endif">
                            <div class="selling-caravan">
                                <div class="selling-caravan-avatar" style="background-image: url('{{ $caravan->avatar }}')">
                                    {{--<img src="storage/{{ $caravan->avatar }}" class="selling-caravan__img" alt="Caravan">--}}
                                    <h6>{{ $caravan->name }}</h6>
                                </div>
                                <div class="row">
                                    <div class="col-xs-7 selling-price">{{ $caravan->price }} &#8364;</div>
                                    <div class="col-xs-5"><div class="selling-details show-details" data-url="{{ route('caravan.detail', ['id' => $caravan->id]) }}">{{ $lg->selling['details'] }}</div></div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                @else
                    <h3 class="selling-caravan__no">{{ $lg->errors['no_caravan'] }}</h3>
                @endif


                @if(count($caravanas) > 4)

                    <div class="col-md-12 selling-more">
                        <button class="selling-more__btn">
                            {{ $lg->selling['more'] }}
                        </button>
                    </div>

                @endif
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.fancybox.pack.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/smooth-scroll.min.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/form-validation.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6OteSbFlfYJ3CmJQxQXoPmFBJadNwwIk&callback=Module.initMap"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/services.js"></script>
    <script src="assets/js/contact.js"></script>
    <script src="assets/js/details.js"></script>
@endsection
