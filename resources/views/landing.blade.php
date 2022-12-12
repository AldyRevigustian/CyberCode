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
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
        integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .datepicker td,
        th {
            text-align: center;
            padding: 8px 20px;
            font-size: 14px;
        }

        .datepicker {
            border-radius: 15px;
            backdrop-filter: blur(50px);
            background-color: rgba(17, 14, 14, 0.4);
            border: 2px solid grey;
            color: white;
        }

        .datepicker table tr td span.focused,
        .datepicker table tr td span:hover {
            background: rgba(17, 14, 14, 0.6)
        }

        .datepicker table tr td span.active.active {
            background: rgba(17, 14, 14, 1)
        }

        .datepicker .datepicker-switch:hover,
        .datepicker .next:hover,
        .datepicker .prev:hover,
        .datepicker tfoot tr th:hover {
            background: rgba(17, 14, 14, 0.6)
        }

        .datepicker table tr td span.active.active,
        .datepicker table tr td span.active.disabled,
        .datepicker table tr td span.active.disabled.active,
        .datepicker table tr td span.active.disabled.disabled,
        .datepicker table tr td span.active.disabled:active,
        .datepicker table tr td span.active.disabled:hover,
        .datepicker table tr td span.active.disabled:hover.active,
        .datepicker table tr td span.active.disabled:hover.disabled,
        .datepicker table tr td span.active.disabled:hover:active,
        .datepicker table tr td span.active.disabled:hover:hover,
        .datepicker table tr td span.active.disabled:hover[disabled],
        .datepicker table tr td span.active.disabled[disabled],
        .datepicker table tr td span.active:active,
        .datepicker table tr td span.active:hover,
        .datepicker table tr td span.active:hover.active,
        .datepicker table tr td span.active:hover.disabled,
        .datepicker table tr td span.active:hover:active,
        .datepicker table tr td span.active:hover:hover,
        .datepicker table tr td span.active:hover[disabled],
        .datepicker table tr td span.active[disabled] {
            background: rgba(17, 14, 14, 0.6)
        }

        #yearpicker {
            cursor: pointer;
        }

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

        .search-group {
            width: 100%;
            margin: 0px 50px;
        }

        .search-group .yearpicker {
            border-radius: 15px 0px 0px 15px;
            backdrop-filter: blur(50px);
            background-color: rgba(17, 14, 14, 0.9);
            border: 2px solid grey;
            color: white;
            padding: 10px 15px;
            text-align: center;
            width: 13%
        }

        .search-group .yearpicker::placeholder {
            color: white;
            font-weight: bold
        }

        .search-input {
            border-radius:  0px 15px 15px 0px;
            padding: 10px 15px;
            backdrop-filter: blur(50px);
            background-color: rgba(17, 14, 14, 0.9);
            border: 2px solid grey;
            color: white;

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
    @livewire('list-app', ['year' => $year])
    {{-- @livewire('list-app') --}}
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"
        integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/assets/js/bootstrap.js"></script>
    <script src="/assets/js/app.js"></script>

    <script>
        $(document).ready(function() {
            $("#yearpicker").datepicker({
                defaultDate: new Date(),
                setDate: new Date(),
                format: "yyyy",
                viewMode: "years",
                minViewMode: "years",
                autoclose: true
            }).on('changeYear', function(e) {

            });
        })
    </script>

    @livewireScripts

</body>

</html>
