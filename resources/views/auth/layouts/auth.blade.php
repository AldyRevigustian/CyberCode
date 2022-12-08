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

    <link rel="shortcut icon" href="/assets/images/logo/tiaraicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="/assets/images/logo/tiaraicon.png" type="image/png">

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="/assets/extensions/choices.js/public/assets/styles/choices.css">

    <style>
        #auth{

            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('/assets/images/kelas.png');
            background-filter: blur(8px);
            background-repeat: no-repeat;
            background-size: cover
        }
        .card-login{
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: white;
            padding: 60px 40px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    @yield('content')

    <script src="/assets/extensions/choices.js/public/assets/scripts/choices.js"></script>
    <script src="/assets/js/pages/form-element-select.js"></script>
</body>



</html>
