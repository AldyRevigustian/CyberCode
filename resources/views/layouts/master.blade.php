<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberCode</title>

    <link rel="stylesheet" href="/assets/css/main/app.css">
    <link rel="stylesheet" href="/assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="/assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="/assets/images/logo/favicon.png" type="image/png">

    <link rel="stylesheet" href="/assets/css/shared/iconly.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="/assets/extensions/simple-datatables/style.css">
    <link rel="stylesheet" href="/assets/css/pages/simple-datatables.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
        integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .dataTable-top {
            padding-left: 0px;
        }
    </style>
</head>

<body class="theme-dark">
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
            <div class="sidebar-header position-relative "
                style="display: flex; flex-direction:column; justify-content:center; align-items:center;">
                <img src="/assets/images/logo/logo.png" style="height: 70px">
                <div class="sidebar-toggler  x">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
            <div class="sidebar-menu">


                <ul class="menu mt-0">
                    <li class="sidebar-item ">
                        <a href="/" class='sidebar-link'>
                            <i class="bi bi-chevron-left"></i>
                            <span>Back</span>
                        </a>
                    </li>
                    <li class="sidebar-title">Menu</li>

                    <li class="sidebar-item {{ request()->is('category') ? 'active' : '' }}">
                        <a href="{{ route('category') }}" class='sidebar-link'>
                            <i class="bi bi-diagram-3-fill"></i>
                            <span>Category</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ request()->is('application') ? 'active' : '' }}">
                        <a href="{{ route('application') }}" class='sidebar-link'>
                            <i class="bi bi-window-stack"></i>
                            <span>Application</span>
                        </a>
                    </li>

                    <li class="sidebar-item" style="margin-bottom:5rem;">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
document.getElementById('logout-form').submit();"
                            class='sidebar-link'>
                            <i class="bi bi-box-arrow-in-left"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </ul>

            </div>
        </div>
    </div>

    @yield('content')
    
    <footer>
        <div class="footer clearfix mb-0 text-white">
            <div class="text-center">
                <p>2022 &copy; CyberCode - XII RPL</p>
            </div>
        </div>
    </footer>
    <script src="/assets/js/bootstrap.js"></script>
    <script src="/assets/js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"
        integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @stack('scripts')

    <script>
        const appBody = document.body;
        if (localStorage.getItem('theme') == 'theme-light') {
            localStorage.setItem('theme', "theme-dark")
            appBody.classList.add("theme-dark");
        } else {
            localStorage.setItem('theme', "theme-dark")
            appBody.classList.add("theme-dark");
        };
    </script>

    <script src="/assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
    <script src="/assets/js/pages/simple-datatables.js"></script>
</body>

</html>
