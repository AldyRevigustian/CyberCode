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


        .nav-link {
            color: white;
        }

        a.nav-link:hover {
            color: white
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
            height: 150px;
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

        .badge{
            backdrop-filter: blur(50px) !important;
            background-color: rgba(17, 14, 14, 0.4) !important;
            border: 2px solid grey !important;
            color: white !important;
            margin-right: 5px !important;
            padding: 5px 15px !important;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg transparent navbar-inverse mt-3">
        <div class="container">
            <div class="d-flex gap-2 align-items-center">
                <img src="{{ asset('assets/images/logo/rpl.png') }}" width="40px" alt="">
                <a class="navbar-brand fw-bold" href="https://www.instagram.com/anothersideofrpl/?hl=id"
                    target="_blank">CyberCode</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <h4>
                            <a class="nav-link" href="{{ route('login') }}">
                                Login
                            </a>
                        </h4>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="content">
        <div class=" container mt-3 mb-5">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($application as $app)
                    <div class="col">
                        <div class="card overflow-hidden h-100">
                            <div class="row">
                                <div class="col-11">
                                    {{-- <h4 class="card-header">{{ $app->name }}</h5> --}}
                                        <div class="card-header">
                                            <h4 style="font-size: 24px; color: white; font-weight: bold">{{ $app->name }}</h4>
                                            <span class="badge">{{ $app->category->name}}</span>
                                            <span class="badge">{{ $app->type}}</span>
                                        </div>
                                </div>
                                <div class="col-1 text-center">
                                    <a href="{{ $app->url }}" target="_blank">
                                        <h5 class="card-header text-white fw-light float-end"><i
                                                class="bi bi-box-arrow-up-right"></i></h5>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body pb-0 pt-1">
                                <img src="{{ asset('storage/' . $app->image) }}"
                                    style="height: 150px;object-fit: cover;"
                                    class="card-img" alt="...">
                                <p class="card-text mt-3" style="padding: 10px 13px">{{ $app->description }}</p>
                            </div>
                            <div class="card-footer border-0 pt-0 pb-0">
                                <div class="row">
                                    <div class="col-10">
                                        <p class="text-start">
                                            {{ $app->created_by }}
                                        </p>
                                    </div>
                                    <div class="col-2">
                                        <p class="text-end">{{ $app->year }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <script src="/assets/js/bootstrap.js"></script>
    <script src="/assets/js/app.js"></script>
</body>

</html>
