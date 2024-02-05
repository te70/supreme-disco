<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-dash-layout/>
            <body>
                <div class="container-fluid">
                    <div class="row">
                        <x-side-menu/>
                        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"> 
                            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                                <h1 class="h2">Job details</h1>
                            </div> 
                            <div class="card w-50">
                                <div class="card-body">
                                  <h5 class="card-title">{{$job->job_title}}</h5>
                                </div>
                                <ul class="list-group list-group-flush">
                                  <li class="list-group-item">Job type: <span>{{$job->job_type}}</span></li>
                                  <li class="list-group-item">Job location: <span>{{$job->job_location}}</span></li>
                                  <li class="list-group-item">Salary: <span>{{$job->salary}}</span></li>
                                  <li class="list-group-item">Contact name: <span>{{$job->contact_name}}</span></li>
                                  <li class="list-group-item">Contact email: <span>{{$job->contact_email}}</span></li>
                                </ul>
                                <div class="card-body">
                                    <h4>Job requirements:</h4>
                                    <p class="card-text">{{$job->job_requirements}}</p>
                                    <hr class="mt-2 mb-2"/>
                                    <h4>Job responsibilities</h4>
                                    <p class="card-text">{{$job->job_responsibilities}}</p>
                                </div>
                              </div>
                        </main>
                    </div>
                </div>
            </body>
        </div>
    </div>
    
</x-app-layout>
