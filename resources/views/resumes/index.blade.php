<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta name="description" content="">
                <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
                <meta name="generator" content="Hugo 0.111.3">
                <title>Elvich</title>

                <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous" defer></script>
                <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous" defer></script>
                <!-- Option 1: Include in HTML -->
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
                <script href="{{asset('/js/dashboard.js')}}"></script>
                <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
                <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
                <!-- Custom styles for this template -->
                <link rel="stylesheet" href="{{asset('/css/dashboard.rtl.css')}}">
                <link rel="stylesheet" href="{{asset('/css/dashboard.css')}}">
                
                @vite(['resources/css/app.css', 'resources/js/app.js'])
            </head>
            <body>
                <div class="container-fluid">
                    <div class="row">
                        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
                            <div class="position-sticky pt-2 sidebar-sticky">
                                <ul class="nav flex-column">
                                    <li class="nav-item pb-4">
                                        <div class="shrink-0 flex items-center">
                                            <a href="{{ route('dashboard') }}">
                                                <img class="rounded ml-4 w-75" src="{{asset('/images/elvich_logo.png')}}"/>
                                            </a>
                                        </div>
                                    </li>
                                    <hr/>
                                    <div class="pt-4 d-grid gap-3">
                                <li class="nav-item">
                                    <a class="nav-link fs-5" href="#">
                                    <span class="align-text-bottom bi bi-house"></span>
                                    Dashboard
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fs-5" href="#">
                                    <span  class="align-text-bottom bi bi-envelope"></span>
                                    Resumes
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fs-5" href="#">
                                    <span class="align-text-bottom bi bi-basket3"></span>
                                    Jobs
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fs-5" href="#">
                                    <span class="align-text-bottom bi bi-person"></span>
                                    Users
                                    </a>
                                </li>
                                    </div>
                                </ul>
                            </div>
                        </nav>

                        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                                <h1 class="h2">Dashboard</h1>
                                {{-- <div class="btn-toolbar mb-2 mb-md-0">
                                <div class="btn-group me-2">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                                </div>
                                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                                    <span data-feather="calendar" class="align-text-bottom"></span>
                                    This week
                                </button>
                                </div> --}}
                            </div>
                            <div class="row text-center">
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                        <h5 class="card-title">10</h5>
                                        <p class="card-text">Resumes</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                        <h5 class="card-title">2</h5>
                                        <p class="card-text">Live jobs</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-4 text-center">
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                        <h5 class="card-title">20</h5>
                                        <p class="card-text">Total jobs</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                        <h5 class="card-title">10</h5>
                                        <p class="card-text">Awaiting jobs</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {{-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> --}}
                        </main>
                    </div>
                </div>
            </body>
        </div>
    </div>
</x-app-layout>
