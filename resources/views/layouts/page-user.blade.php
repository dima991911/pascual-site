<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pascual Caravan</title>
    @yield('styles')
</head>
<body>

    @include('includes.header') {{--Header(Menu fixed, Header, Menu for mobile)--}}

    <div class="content-top"> {{--Content top 100px--}}

        @include('includes.about') {{--About--}}

        @include('includes.services') {{--Our Services--}}

        @yield('caravanSelling') {{--Caravan Sellinh section--}}

        @include('includes.contact') {{--Contact Section--}}

        @include('includes.gallery') {{--Gallery section--}}

        @include('includes.modal-window') {{--Modal window(Detail Caravan)--}}

    </div>

    @include('includes.footer') {{--Footer--}}

    @yield('scripts')
</body>
</html>