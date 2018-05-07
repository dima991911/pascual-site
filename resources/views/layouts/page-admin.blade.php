<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Panel</title>
    @yield('styles')
</head>
<body>
    <div class="logout">
        <a href="{{ route('index') }}"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
    </div>

    <header class="header">
        <div class="container">
            <nav>
                <a href="{{ route('admin.panel') }}" class="header-active">
                    ТРАНСПОРТ
                </a>

                <a href="{{ route('services.panel') }}">ПОСЛУГИ</a>
                <a href="{{ route('message.panel') }}">ЗАМОВЛЕННЯ</a>
            </nav>
        </div>
    </header>

    @yield('caravanas')

    @yield('add-caravana')

    @yield('scripts')
</body>
</html>