<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-dash-layout/>
            <body>
                <div class="container-fluid">
                    <div class="row">
                        <x-side-menu/>
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
                                        <h5 class="card-title">{{count($resumes)}}</h5>
                                        <p class="card-text">Resumes</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                        <h5 class="card-title">10</h5>
                                        <p class="card-text">Live jobs</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-4 text-center">
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                        <h5 class="card-title">{{count($jobs)}}</h5>
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
