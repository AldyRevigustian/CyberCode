<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="/assets/css/main/app.css">
    <link rel="stylesheet" href="/assets/css/pages/auth.css">

    <link rel="shortcut icon" href="/assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="/assets/images/logo/favicon.png" type="image/png">

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="/assets/extensions/choices.js/public/assets/styles/choices.css">

    <style>
        #auth {

            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('/assets/images/bg.png');
            background-filter: blur(8px);
            background-repeat: no-repeat;
            background-size: cover
        }

        .card-login {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 60px 40px 20px 40px;
            border-radius: 15px;
            backdrop-filter: blur(50px);
            background-color: rgba(17, 14, 14, 0.4);
            border: 2px solid grey;
            color: white;
            overflow: hidden;
        }
        .btn-login{
            border-radius: 15px;
            backdrop-filter: blur(50px);
            background-color: rgba(17, 14, 14, 0.4);
            border: 2px solid grey;
        }

        .form-control {
            border-radius: 15px;
            backdrop-filter: blur(50px);
            background-color: rgba(17, 14, 14, 0.4);
            border: 2px solid grey;
            /* -webkit-box-shadow: 0 0 0 1000px #1b1b1b inset !important;
            -webkit-text-fill-color: white !important; */
        }
        .form-control:focus {
            border-radius: 15px;
            backdrop-filter: blur(50px);
            background-color: rgba(17, 14, 14, 0.4);
            border: 2px solid grey;
            /* -webkit-box-shadow: 0 0 0 1000px #1b1b1b inset !important;
            -webkit-text-fill-color: white !important; */
        }

        input:-webkit-autofill,
        textarea:-webkit-autofill,
        select:-webkit-autofill {

            -webkit-box-shadow: 0 0 0 1000px #1b1b1b inset !important;
            -webkit-text-fill-color: white !important;
        }
    </style>
</head>

<body>
    @yield('content')

    <script src="/assets/extensions/choices.js/public/assets/scripts/choices.js"></script>
    <script src="/assets/js/pages/form-element-select.js"></script>
</body>



</html>
