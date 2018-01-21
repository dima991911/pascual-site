<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href={{ asset("assets/css/bootstrap.min.css") }}>
    <link rel="stylesheet" href={{ asset("assets/css/font-awesome.min.css") }}>
    <link rel="stylesheet" href={{ asset("assets/css/login.css") }}>
    <link rel="icon" type="image/png" href="favicon.png" />
</head>
<body>

    {{----------------Button back to index--------------------}}
    <div class="login-back">
        <a href="{{ asset('back') }}">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </a>
    </div>

    <div class="login-form">
        <div class="row">
            <div class="col-xs-12 login-auth">

                @if(session()->has('error'))
                    <div class="auth-error">
                        <p>{{ session()->get('error') }}</p>
                    </div>
                @endif

                <form action="{{ route('check.user') }}" method="post" class="login-auth-form">
                    <div class="feedback-group">
                        <input type="text" name="login" data-pattern="^[a-z0-9_-]{3,16}$" placeholder="Login" class="feedback-group__input">
                        <p class="feedback-group__error feedback-group__none">Incorrect login</p>
                    </div>
                    <div class="feedback-group">
                        <input type="password" name="password" data-pattern="[A-Za-z0-9]{6,}" placeholder="Password" class="feedback-group__input">
                        <p class="feedback-group__error feedback-group__none">Incorrect password</p>
                    </div>

                    <div class="feedback-group feedback-btn login-auth-form__btn">
                        <input type="submit" value="LOGIN" class="feedback-group__btn login-auth-form__btn">
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/form-validation.js') }}"></script>
    <script src="{{ asset('assets/js/contact.js') }}"></script>
</body>
</html>