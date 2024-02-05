<div>
    <div class="modal fade" id="addModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="addModalLabel">Create a router</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <strong>Oops</strong> There were some problems with your input. <br><br>
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                  @endif
      
                  @if(Session::has('success'))
                      <div class="alert alert-success text-center">
                          {{Session::get('success')}}
                      </div>
                  @endif
      
                <form class="form-signin" action="" method="POST" enctype="multipart/form-data" novalidate>
                  @csrf 
                  {{-- router name --}}
                  <label for="name" class="sr-only mb-2">Router name</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Router Name">
                  @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong></strong>
                  </span>
                  @enderror
                  {{-- router location --}}
                  <label for="location" class="sr-only mb-2 mt-3">Router Location</label>
                  <select class="form-select" aria-label="Default select example" name="location" id="location">
                    <option selected>Open to select location</option>
                    {{-- @foreach($location as $location)
                      <option value="{{$location->location}}">{{$location->location}}</option>
                    @endforeach --}}
                    {{-- @error('location')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror --}}
                    </select>
                      {{-- router description --}}
                      <label for="description" class="sr-only mb-2 mt-3">Description</label>
                      <input type="text" id="description" class="form-control " name="description" placeholder="Description">
                      @error('description')
                      <span class="invalid-feedback" role="alert">
                          {{-- <strong>{{$message}}</strong> --}}
                      </span>
                      @enderror
                      {{-- router ip  --}}
                      <label for="routerip" class="sr-only mb-2 mt-3">Router Ip Address</label>
                      <input type="text" id="routerip" class="form-control" name="routerip" placeholder="Router Ip">
                      {{-- @error('routerip')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{$message}}</strong>
                      </span>
                      @enderror --}}
                      {{-- router mac --}}
                      <label for="routermac" class="sr-only mb-2 mt-3">Router Mac Address</label>
                      <input type="text" id="routermac" class="form-control " name="routermac" placeholder="Router Mac">
                      {{-- @error('routermac')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{$message}}</strong>
                      </span>
                      @enderror --}}
      
                      <button class="btn btn-primary btn-sm btn-block mb-2 mt-3" style="margin-top: 8px;" type="submit">Submit</button>
                </form> 
            </div>
          </div>
        </div>
      </div>
</div>