<!---------------Services------------>

<div id="service">
    {{--<section class="services">
        <div class="container">
            <div class="row services-block">
                <h2 class="services-block__h2">{{ $lg->services['header'] }}</h2>
                <div class="col-md-6 service-item">
                    <div>
                        <img src="assets/img/caravan_outside.jpg" alt="Caravan" class="service-item__img">
                    </div>
                    <h4 class="service-item__name">
                        {{ $lg->global['parking'] }} <span class="service-item__bold">{{ $lg->services['outside'] }}</span>
                    </h4>
                    <div class="row">
                        <div class="col-xs-7 service-bottom__price">250 &#8364/{{ $lg->global['year'] }}</div>
                        <div class="col-xs-5 service-bottom__btn"><div class="selling-details service-item__outside">{{ $lg->global['gallery'] }}</div></div>
                    </div>
                </div>
                <div class="col-md-6 service-item">
                    <img src="assets/img/caravan_inside.jpg" alt="Caravan" class="service-item__img">
                    <h4 class="service-item__name">
                        {{ $lg->global['parking'] }} <span class="service-item__bold">{{ $lg->services['inside'] }}</span>
                    </h4>
                    <div class="row">
                        <div class="col-xs-7 service-bottom__price">500 &#8364/{{ $lg->global['year'] }}</div>
                        <div class="col-xs-5 service-bottom__btn"><div class="selling-details service-item__inside">{{ $lg->global['gallery'] }}</div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}

    {{-----------------Specefical services---------------}}

    <section class="services">
        <div class="container">
            <h2 class="services__h2">
                ТРАНСПОРТНІ ПОСЛУГИ
            </h2>

            <div class="row">
                @foreach($services as $service)
                    <div class="col-sm-12 col-md-6">
                        <div class="thumbnail services-thumbnail">
                            <img src="{{ $service->avatar }}" alt="...">
                            <div class="caption">
                                <h3 class="services-thumbnail__h3">{{ $service->title }}</h3>
                                <p class="services-thumbnail__p">
                                    {{ $service->description }}
                                </p>
                                <button data-value="{{ $service->title }}" class="services-btn choose-service">ЗАМОВИТИ</button>
                                <button data-value="{{ $service->title }}" class="services-btn show-more">ДЕТАЛЬНІШЕ</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!--------------Why we SECTION-------------->

    <section class="we">
        <div class="container">
            <div class="row we-section">
                <div class="col-md-offset-6 col-md-6">
                    <header class="we-header">
                        <h3>{{ $lg->why_we['why_we'] }}</h3>
                        <span>{{ $lg->why_we['include'] }}</span>
                    </header>
                    <div class="we-item">  <!--block for preferer-->
                        <div class="row vcenter">
                            <div class="col-xs-4 we-icon animate_left" data-wow-duration="0.3s">
                                <img src="assets/img/reparaciones.svg" alt="icon" class="we-item__img">
                            </div>
                            <div class="col-xs-8">
                                <div class="we-item__description">
                                    <h5>{{ $lg->why_we['repairs']['header'] }}</h5>
                                    <p>{{ $lg->why_we['repairs']['text'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="we-item">  <!--block for preferer-->
                        <div class="row vcenter">
                            <div class="col-xs-4 we-icon animate_left" data-wow-duration="0.6s">
                                <img src="assets/img/drop.svg" alt="icon" class="we-item__img">
                            </div>
                            <div class="col-xs-8">
                                <div class="we-item__description">
                                    <h5>{{ $lg->why_we['exterior_wash']['header'] }}</h5>
                                    <p>{{ $lg->why_we['exterior_wash']['text'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="we-item">  <!--block for preferer-->
                        <div class="row vcenter">
                            <div class="col-xs-4 we-icon animate_left" data-wow-duration="0.9s">
                                <img src="assets/img/seguro.svg" alt="icon" class="we-item__img">
                            </div>
                            <div class="col-xs-8">
                                <div class="we-item__description">
                                    <h5>{{ $lg->why_we['insurance']['header'] }}</h5>
                                    <p>{{ $lg->why_we['insurance']['text'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="we-item">  <!--block for preferer-->
                        <div class="row vcenter">
                            <div class="col-xs-4 we-icon animate_left" data-wow-duration="1.2s">
                                <img src="assets/img/engrase.svg" alt="icon" class="we-item__img">
                            </div>
                            <div class="col-xs-8">
                                <div class="we-item__description">
                                    <h5>{{ $lg->why_we['lubrication']['header'] }}</h5>
                                    <p>{{ $lg->why_we['lubrication']['text'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="we-item">  <!--block for preferer-->
                        <div class="row vcenter">
                            <div class="col-xs-4 we-icon animate_left" data-wow-duration="1.5s">
                                <img src="assets/img/camera.svg" alt="icon" class="we-item__img">
                            </div>
                            <div class="col-xs-8">
                                <div class="we-item__description">
                                    <h5>{{ $lg->why_we['video']['header'] }}</h5>
                                    <p>{{ $lg->why_we['video']['text'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="we-item">  <!--block for preferer-->
                        <div class="row vcenter">
                            <div class="col-xs-4 we-icon animate_left" data-wow-duration="1.8s">
                                <img src="assets/img/transport.svg" alt="icon" class="we-item__img">
                            </div><div class="col-xs-8">
                                <div class="we-item__description">
                                    <h5>{{ $lg->why_we['transporation']['header'] }}</h5>
                                    <p>{{ $lg->why_we['transporation']['text'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>