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
                                <h1 class="h2">Jobs</h1>
                                <div class="btn-group me-2">
                                    <a class="btn btn-sm btn-outline-secondary" href="/job/create">Create job</a>
                                    <a class="btn btn-sm btn-outline-secondary" href="/job/location/index">Add location</a>
                                </div>
                            </div>           
                            <div class="row text-center">
                                <table id="example" class="table table-striped w-100">
                                    <thead>
                                        <tr>
                                            <th>Job ID</th>
                                            <th>Job title</th>
                                            <th>Job type</th>
                                            <th>Job location</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach($jobs as $key=>$job)
                                            <td>{{$key+1}}</td>
                                            <td><a href="{{route('job.view', ['id'=>$job->id])}}">{{$job->job_title}}</a></td>
                                            <td>{{$job->job_type}}</td>
                                            <td>{{$job->job_location}}</td>
                                            <td>{{$job->created_at}}</td>
                                            <td>
                                                <div class="dropup">

                                                    <a href="#" role="button" data-bs-toggle="dropdown">
                                                      <i style="color: black;" class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                      <form action="{{route('job.delete',['id'=>$job->id])}}" method="POST">
                                                        <a class="dropdown-item" href="{{route('job.edit',['id'=>$job->id])}}">Edit</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item" href="">Delete</button>
                                                    </form> 
                                                    </ul>
                                                  </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </main>
                    </div>
                </div>
            </body>
        </div>
    </div>
</x-app-layout>
