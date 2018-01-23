<!-------------Contact SECTION-------------->

<section class="contact" id="contact">
    <div class="container">
        <div class="row contact-section">
            <div class="col-xs-12">
                <h3 class="contact-section__h3">{{ $lg->contacts['contact'] }}</h3>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="contact-item">
                    <div class="row">
                        <div class="col-xs-2 contact-item__icon animate_left"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        <div class="col-xs-10 contact-item__text">17258, L’Estartit (Girona), Spain <br>
                            <span class="text_italica">42.047711"N 3.174757"E</span></div>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="row">
                        <div class="col-xs-2 contact-item__icon animate_left"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <div class="col-xs-10 contact-item__text"><a href="tel:+3463624338">(+34) 636 243 388</a>
                            <br><span class="text_italica">({{ $lg->contacts['spanish'] }})</span></div>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="row">
                        <div class="col-xs-2 contact-item__icon animate_left"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <div class="col-xs-10 contact-item__text"><a href="tel:+34654925503">(+34) 654 925 503 </a><br><span class="text_italica">({{ $lg->contacts['english'] }})</span></div>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="row">
                        <div class="col-xs-2 contact-item__icon animate_left"><i class="fa fa-laptop" aria-hidden="true"></i></div>
                        <div class="col-xs-10 contact-item__text"><a href="#">www.parkingcaravanaspascual.com</a></div>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="row">
                        <div class="col-xs-2 contact-item__icon animate_left"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                        <div class="col-xs-10 contact-item__text"><a href="mailto:parkingcaravanaspascual@gmail.com">parkingcaravanaspascual@gmail.com</a></div>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="row">
                        <div class="col-xs-2 contact-item__icon animate_left"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                        <div class="col-xs-10 contact-item__text">
                            8:30h - 20:00h ({{ $lg->contacts['every'] }})</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-12"> <!----------------Form feedback------------------>
                <form name="feedback" method="post" action="{{ route('send.email') }}" class="feedback">
                    <div class="feedback-group">
                        <input type="text" data-pattern="^[a-zA-Z ]+$" name="name" placeholder="{{ $lg->contacts['name'] }}" class="feedback-group__input">
                        <p class="feedback-group__error feedback-group__none">{{ $lg->errors['email'] }}</p>
                    </div>
                    <div class="feedback-group">
                        <input type="text" data-pattern="^\d{9,13}$" name="phone" placeholder="{{ $lg->contacts['phone'] }}" class="feedback-group__input">
                        <p class="feedback-group__error feedback-group__none">{{ $lg->errors['phone'] }}</p>
                    </div>
                    <div class="feedback-group">
                        <input type="text" data-pattern="(^$|^.*@.*\..*$)" name="email" placeholder="{{ $lg->contacts['email'] }}" class="feedback-group__input">
                        <p class="feedback-group__error feedback-group__none">{{ $lg->errors['email'] }}</p>
                    </div>

                    <textarea cols="30" rows="5" class="feedback-group__input" name="message" placeholder="{{ $lg->contacts['coment'] }}"></textarea>

                    <div class="feedback-group feedback-btn">
                        <input type="submit" value="{{ $lg->contacts['submit'] }}" class="feedback-group__btn">
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
            <div class="col-md-12 col-xs-12">
                <h3 class="contact-localizacion__h3">
                    {{ $lg->contacts['location'] }}
                </h3>
            </div>
            <div class="col-md-12" id="map">

            </div>
        </div>
    </div>
</section>