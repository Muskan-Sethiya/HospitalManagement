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
                <h4 class="card-title">Update User</h4>
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
                <form class="forms-sample" action="" method="POST">
                  @csrf
                  <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" value="{{$userupdate->name}}" name="username" class="form-control input-color" id="exampleInputName1" placeholder="Enter Name">
                
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">Email</label>
                    <input type="email" value="{{$userupdate->email}}" name="email" class="form-control input-color" id="exampleInputEmail3" placeholder="Enter Email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword4">Phone</label>
                    <input type="number" value="{{$userupdate->phone}}" name="phone" class="form-control input-color" id="exampleInputPassword4" placeholder="Enter Phone Number">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputCity1">Address</label>
                    <input type="text" value="{{$userupdate->address}}" name="address" class="form-control input-color" id="exampleInputCity1" placeholder="Write Address Here">
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