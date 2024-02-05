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
                                <h1 class="h2">Edit Job</h1>
                            </div>           
                            <div class="row text-center">
                                <form action="{{ route('job.update', $id)}}" method="POST" class="row g-3 w-75 bg-white p-4 rounded-lg">
                                    @csrf
                                    @method('PUT')
                                  <div class="col-md-6">
                                      <label for="inputTitle" class="form-label">Job title</label>
                                      <input type="text" class="form-control" id="inputTitle" name="job_title" value={{$job->job_title}}>
                                    </div>
                                    <div class="col-md-6">
                                      <label for="inputType" class="form-label">Job type</label>
                                      <select id="inputType" class="form-select" name="job_type" value={{$job->job_type}}>
                                        <option selected>Choose...</option>
                                        <option value="Permanent">Permanent</option>
                                        <option value="Contract">Contract</option>
                                      </select>
                                    </div>
                                    <div class="col-md-6">
                                      <label for="inputLocation" class="form-label">Job Location</label>
                                      <select id="inputLocation" class="form-select" name="job_location" value={{$job->job_location}}>
                                        <option selected>Choose...</option>
                                        <option value="Nairobi">Nairobi</option>
                                        <option value="Kisumu">Kisumu</option>
                                      </select>
                                    </div>
                                    <div class="col-md-6">
                                      <label for="inputSalary" class="form-label">Salary</label>
                                      <input type="text" class="form-control" id="inputSalary" name="salary" value={{$job->salary}}>
                                    </div>
                                    <div class="col-md-6">
                                      <label for="inputContact" class="form-label">Contact name</label>
                                      <input type="text" class="form-control" id="inputContact" name="contact_name" value={{$job->contact_name}}>
                                    </div>
                                    <div class="col-md-6">
                                      <label for="inputEmail" class="form-label">Contact email</label>
                                      <input type="email" class="form-control" id="inputEmail" name="contact_email" value={{$job->contact_email}}>
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputRequirements" class="form-label">Job requirements</label>
                                        <textarea class="form-control" id="inputRequirements" rows="3" name="job_requirements">{{$job->job_requirements}}</textarea>
                                      </div>
                                      <div class="mb-3">
                                        <label for="inputResponsibilities" class="form-label">Job responsibilities</label>
                                        <textarea class="form-control" id="inputResponsibilities" rows="3" name="job_responsibilities">{{$job->job_responsibilities}}</textarea>
                                      </div>
                                    <div class="col-12">
                                      <button type="submit" class="btn btn-primary font-black">Update job</button>
                                    </div>
                                </form>
                            </div>
                        </main>
                    </div>
                </div>
            </body>
        </div>
    </div>
</x-app-layout>
