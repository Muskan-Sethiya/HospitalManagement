<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-3 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
         
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
     @include('admin.header')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
         
          <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Basic form elements</h4>
                <p class="card-description">
                  @if(session()->has('message'))
                
                      <div class="alert alert-success">
                        {{-- <button type="button" class="close" data-dismiss="alert">
                          x
                        </button> --}}
                          {{ session('message') }}
                      </div>
                    
                  @endif
              </p>
                <form class="forms-sample" action="{{url('update_doctor', $data->id)}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" value="{{$data->doctor_name}}" name="doctor_name" class="form-control input-color" id="exampleInputName1" placeholder="Enter Name">
                    @error('doctor_name')
                    <div class="text-danger">{{ $message }}</div>
                   @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">Email</label>
                    <input type="email" name="email" value="{{$data->email}}" class="form-control input-color" id="exampleInputEmail3" placeholder="Enter Email">
                    @error('email')
                    <div class="text-danger">{{ $message }}</div>
                   @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword4">Phone</label>
                    <input type="number" name="phone" value="{{$data->phone}}" class="form-control input-color" id="exampleInputPassword4" placeholder="Enter Phone Number">
                    @error('phone')
                    <div class="text-danger">{{ $message }}</div>
                   @enderror
                  </div>
                
                  <div class="form-group">
                    <label for="exampleSelectGender">Speciality</label>
                    <select class="form-control input-color" id="exampleSelectGender" name="speciality">
                        <option>--Choose Speciality--</option>
                        <option value="cardiology" {{ $data->speciality == 'cardiology' ? 'selected' : '' }}>Cardiology</option>
                        <option value="dental" {{ $data->speciality == 'dental' ? 'selected' : '' }}>Dental</option>
                        <option value="oncologist" {{ $data->speciality == 'oncologist' ? 'selected' : '' }}>Oncologist</option>
                        <option value="general health" {{ $data->speciality == 'general health' ? 'selected' : '' }}>General Health</option>
                        <option value="pediatrics" {{ $data->speciality == 'pediatrics' ? 'selected' : '' }}>Pediatrics</option>
                        <option value="dermatologists" {{ $data->speciality == 'dermatologists' ? 'selected' : '' }}>Dermatologists</option>
                    </select>
                    
                    @error('speciality')
                    <div class="text-danger">{{ $message }}</div>
                   @enderror
                  </div>

                  <div class="form-group">
                    <label for="exampleInputCity1">Room No.</label>
                    <input type="text" name="room_no" value="{{$data->room_no}}" class="form-control input-color" id="exampleInputCity1" placeholder="Write a Room No">
                  </div> 

                  @if($data->image)
                  <div class="form-group">
                      <label>Current Image:</label>
                      <img height="100" width="100" src="{{ asset('doctorimg/' . $data->image) }}" alt="Doctor Image">
                  </div>
                 @endif

                  <div class="form-group">
                    <label>Change Image</label>
                    <input type="file" name="img" >
                  </div>
                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                </form>
              </div>
            </div>
          </div>
          </div>
          <!-- partial -->
        <!-- main-panel ends -->
    <!-- container-scroller -->
   @include('admin.js')
  </body>
</html>