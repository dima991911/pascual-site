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

        @yield('caravanSelling')

        @include('includes.contact')

        @include('includes.gallery')

        @include('includes.modal-window')

    </div>

    @include('includes.footer')

    @yield('scripts')
</body>
</html>