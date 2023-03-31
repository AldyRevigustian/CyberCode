<div>
    <nav class="navbar navbar-expand-lg transparent navbar-inverse mt-4">
        <div class="container">
            <div class="d-flex gap-2 align-items-center">
                <img src="{{ asset('assets/images/logo/rpl.png') }}" width="40px" alt="">
                <a class="navbar-brand fw-bold" href="https://www.instagram.com/anothersideofrpl/?hl=id"
                    target="_blank">CyberCode</a>
            </div>
            <div class="input-group search-group row">
                <form action="{{ route('filter') }}" id="myForm" style="display: contents" method="GET">
                    <input type="text" class="yearpicker col-2" name="year" id="yearpicker" readonly
                        placeholder="{{ $year }}" onchange=" document.getElementById('myForm').submit();" />
                </form>
                <input class="search-input col-10" placeholder="Search..." type="text" wire:model='search'>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <div class="btn-login">
                            <a class="nav-link" href="{{ route('login') }}">
                                Login
                            </a>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
    <div id="content">
        <div class=" container mt-5 mb-5">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @if ($application && $application->count() > 0)
                    @foreach ($application as $app)
                        <div class="col">
                            <div class="card overflow-hidden h-100">
                                <div class="row">
                                    <div class="col-11">
                                        <div class="card-header">
                                            <h4 style="font-size: 24px; color: white; font-weight: bold">
                                                {{ $app->name }}
                                            </h4>
                                            <span class="badge">{{ $app->category->name }}</span>
                                            <span class="badge">{{ $app->type }}</span>
                                        </div>
                                    </div>
                                    <div class="col-1 text-center">
                                        <a href="{{ $app->url }}" target="_blank">
                                            <h5 class="card-header text-white fw-light float-end"><i
                                                    class="bi bi-box-arrow-up-right"></i></h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body pb-0 pt-0">
                                    <img src="{{ asset($app->image) }}" style="height: 150px;object-fit: cover;"
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
                @else
                    <h4 class="text-light">No result found</h4>
                @endif
            </div>
        </div>
    </div>
</div>
