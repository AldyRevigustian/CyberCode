<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CyberCode</title>


    <link rel="shortcut icon" href="./assets/compiled/svg/favicon.svg" type="image/x-icon" />
    <link rel="shortcut icon"
        href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAiCAYAAADRcLDBAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjMzIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iMzQiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSIzMyIKICAgdGlmZjpJbWFnZUxlbmd0aD0iMzQiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LjAiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LjAiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiCiAgIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiPgogICA8eG1wTU06SGlzdG9yeT4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJwcm9kdWNlZCIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWZmaW5pdHkgRGVzaWduZXIgMS4xMC4xIgogICAgICBzdEV2dDp3aGVuPSIyMDIyLTAzLTMxVDEwOjUwOjIzKzAyOjAwIi8+CiAgICA8L3JkZjpTZXE+CiAgIDwveG1wTU06SGlzdG9yeT4KICA8L3JkZjpEZXNjcmlwdGlvbj4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9InIiPz5V57uAAAABgmlDQ1BzUkdCIElFQzYxOTY2LTIuMQAAKJF1kc8rRFEUxz9maORHo1hYKC9hISNGTWwsRn4VFmOUX5uZZ36oeTOv954kW2WrKLHxa8FfwFZZK0WkZClrYoOe87ypmWTO7dzzud97z+nec8ETzaiaWd4NWtYyIiNhZWZ2TvE946WZSjqoj6mmPjE1HKWkfdxR5sSbgFOr9Ll/rXoxYapQVik8oOqGJTwqPL5i6Q5vCzeo6dii8KlwpyEXFL519LjLLw6nXP5y2IhGBsFTJ6ykijhexGra0ITl5bRqmWU1fx/nJTWJ7PSUxBbxJkwijBBGYYwhBgnRQ7/MIQIE6ZIVJfK7f/MnyUmuKrPOKgZLpEhj0SnqslRPSEyKnpCRYdXp/9++msneoFu9JgwVT7b91ga+LfjetO3PQ9v+PgLvI1xkC/m5A+h7F32zoLXug38dzi4LWnwHzjeg8UGPGbFfySvuSSbh9QRqZ6H+Gqrm3Z7l9zm+h+iafNUV7O5Bu5z3L/wAdthn7QIme0YAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAJTSURBVFiF7Zi9axRBGIefEw2IdxFBRQsLWUTBaywSK4ubdSGVIY1Y6HZql8ZKCGIqwX/AYLmCgVQKfiDn7jZeEQMWfsSAHAiKqPiB5mIgELWYOW5vzc3O7niHhT/YZvY37/swM/vOzJbIqVq9uQ04CYwCI8AhYAlYAB4Dc7HnrOSJWcoJcBS4ARzQ2F4BZ2LPmTeNuykHwEWgkQGAet9QfiMZjUSt3hwD7psGTWgs9pwH1hC1enMYeA7sKwDxBqjGnvNdZzKZjqmCAKh+U1kmEwi3IEBbIsugnY5avTkEtIAtFhBrQCX2nLVehqyRqFoCAAwBh3WGLAhbgCRIYYinwLolwLqKUwwi9pxV4KUlxKKKUwxC6ZElRCPLYAJxGfhSEOCz6m8HEXvOB2CyIMSk6m8HoXQTmMkJcA2YNTHm3congOvATo3tE3A29pxbpnFzQSiQPcB55IFmFNgFfEQeahaAGZMpsIJIAZWAHcDX2HN+2cT6r39GxmvC9aPNwH5gO1BOPFuBVWAZue0vA9+A12EgjPadnhCuH1WAE8ivYAQ4ohKaagV4gvxi5oG7YSA2vApsCOH60WngKrA3R9IsvQUuhIGY00K4flQG7gHH/mLytB4C42EgfrQb0mV7us8AAMeBS8mGNMR4nwHamtBB7B4QRNdaS0M8GxDEog7iyoAguvJ0QYSBuAOcAt71Kfl7wA8DcTvZ2KtOlJEr+ByyQtqqhTyHTIeB+ONeqi3brh+VgIN0fohUgWGggizZFTplu12yW8iy/YLOGWMpDMTPXnl+Az9vj2HERYqPAAAAAElFTkSuQmCC"
        type="image/png" />

    <link rel="stylesheet" href="./assets/compiled/css/app.css" />
    <link rel="stylesheet" href="./assets/compiled/css/app-dark.css" />
    <link rel="stylesheet" href="./assets/compiled/css/iconly.css" />


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
        html {
            scroll-behavior: smooth;
        }

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
            margin: 0px 80px;
        }

        .search-group .yearpicker {
            border-radius: 15px 0px 0px 15px;
            backdrop-filter: blur(50px);
            background-color: rgba(17, 14, 14, 0.4);
            border: 2px solid grey;
            color: white;
            padding: 10px 15px;
            text-align: center;
            width: 13%
        }

        .search-group .yearpicker::placeholder {
            color: white;
            font-weight: normal
        }

        .search-input {
            border-radius: 0px 15px 15px 0px;
            padding: 10px 15px;
            backdrop-filter: blur(50px);
            background-color: rgba(17, 14, 14, 0.8);
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
    <div class="smooth-scroll-wrapper">
        @livewire('list-app', ['year' => $year])
        {{-- @livewire('list-app') --}}
        <footer>
            <div class="footer clearfix mb-0 text-white">
                <div class="text-center">
                    <p>2022 &copy; CyberCode - XII RPL</p>
                </div>
            </div>
        </footer>
    </div>

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
