<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CyberCode</title>

    <link rel="stylesheet" href="/assets/css/main/app.css">
    <link rel="stylesheet" href="/assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="/assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="/assets/images/logo/favicon.png" type="image/png">

    <link rel="stylesheet" href="/assets/css/shared/iconly.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <style>
        body {
            justify-content: center;
            align-items: center;
            background-image: url('/assets/images/bg.png');
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
            overflow: overlay;
        }


        .navbar-brand {
            color: white;
            font-size: 30px;
        }

        .navbar-brand:hover {
            color: white;
        }

        .navbar-brand:focus {
            color: white;
        }

        a.nav-link:active,
        a.nav-link:focus,
        a.nav-link:hover,
        .nav-link {
            color: white;

        }

        .card {
            /* transition: transform .5s; */
            border-radius: 15px;
            backdrop-filter: blur(50px);
            background-color: rgba(17, 14, 14, 0.4);
            border: 2px solid grey;
            color: white;
            overflow: hidden;
        }

        .card-header,
        .card-footer {
            background-color: transparent
        }

        .card-text {
            border-radius: 10px;
            border: 2px solid grey;
            height: 120px;
            overflow-y: scroll;
        }

        ::-webkit-scrollbar {
            width: 20px;
        }

        ::-webkit-scrollbar-track {
            background-color: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #d6dee1;
            border-radius: 20px;
            border: 6px solid transparent;
            background-clip: content-box;
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: #a8bbbf;
        }

        .badge {
            backdrop-filter: blur(50px) !important;
            background-color: rgba(17, 14, 14, 0.4) !important;
            border: 2px solid grey !important;
            color: white !important;
            margin-right: 5px !important;
            padding: 5px 15px !important;
        }

        .search-input {
            width: 100%;
            border-radius: 15px;
            backdrop-filter: blur(50px);
            background-color: rgba(17, 14, 14, 0.4);
            border: 2px solid grey;
            color: white;
            padding: 10px 15px;
            margin: 10px 50px;
        }

        .btn-login {
            border-radius: 15px;
            backdrop-filter: blur(50px);
            background-color: rgba(17, 14, 14, 0.6);
            border: 2px solid grey;
            color: white;
            font-weight: bold;
            font-size: 20px;
            padding: 0px 10px;
        }

        .btn-login a: {}

        .not-found {
            border-radius: 15px;
            backdrop-filter: blur(50px);
            background-color: rgba(17, 14, 14, 0.4);
            border: 2px solid grey;
            color: white;
            font-weight: bold;
            font-size: 20px;
            padding: 10px;
        }
    </style>

    @livewireStyles

</head>

<body>
    @livewire('list-app')
    <script src="/assets/js/bootstrap.js"></script>
    <script src="/assets/js/app.js"></script>
    @livewireScripts

</body>

</html>
