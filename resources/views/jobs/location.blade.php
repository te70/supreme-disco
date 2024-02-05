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
                                <h1 class="h2">Create Location</h1>
                            </div> 
                            <div class="row text-center ml-3">
                                <form action="/job/location/store" method="POST" class="row g-3 w-75 bg-white p-4 rounded-lg">
                                    @csrf
                                  <div class="mb-3">
                                      <label for="inputTitle" class="form-label">Location</label>
                                      <input type="text" class="form-control" id="inputTitle" name="location">
                                    </div>
                                    <div class="col-12">
                                      <button type="submit" class="btn btn-primary font-black">Create location</button>
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
